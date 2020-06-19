#!/usr/bin/php
<?php

/**
 * FileEye/MediaProbe
 *
 * A PHP library for reading and writing media files metadata.
 */

use FileEye\MediaProbe\ElementInterface;
use FileEye\MediaProbe\Entry\Core\EntryInterface;
use FileEye\MediaProbe\MediaProbe;
use FileEye\MediaProbe\InvalidFileException;
use FileEye\MediaProbe\Media;
use FileEye\MediaProbe\Collection;
use FileEye\MediaProbe\Data\DataWindow;
use FileEye\MediaProbe\Utility\ConvertBytes;
use FileEye\MediaProbe\Block\Jpeg;
use FileEye\MediaProbe\Block\Tiff;
use FileEye\MediaProbe\Utility\DumpLogFormatter;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\TestHandler;
use Monolog\Processor\PsrLogMessageProcessor;
use Symfony\Component\Yaml\Yaml;

function dump_element(ElementInterface $element, $exiftool_dump, $exiftool_raw_dump)
{
    global $exiftool_raw_miss_a;
    global $exiftool_raw_force_a;
    global $exiftool_miss_a;

    if ($element instanceof EntryInterface) {
        $ifd_name = $element->getParentElement()->getParentElement()->getAttribute('name') ?: $element->getParentElement()->getAttribute('name');
        //$tag_title = $element->getParentElement()->getAttribute('name') ?: '*na*';
        $tag_title = $element->getParentElement()->getAttribute('name') ?? '*na*';
        print $ifd_name . '/' . $tag_title . "\n";
        print $element->toString() . "\n";
        $exiftool_DOM_Node = $element->getParentElement()->getCollection()->getPropertyValue('exiftoolDOMNode');
        if ($exiftool_DOM_Node) {
            print "Exiftool: " . $exiftool_DOM_Node . "\n";
            if ($exiftool_raw_dump) {
                $xml_nodes = $exiftool_raw_dump->getElementsByTagName('*');
                $n = null;
                foreach ($xml_nodes as $node) {
                    if ($node->nodeName === $exiftool_DOM_Node) {
                        $n = $node;
                        break;
                    }
                }
                if (!$n) {
                    $exiftool_raw_miss_a[] = $exiftool_DOM_Node;
                }
                print "raw: " . ($n->textContent ?? "*** MISSING ***") . "\n";
                $valx = rtrim($n->textContent, " ");
                $vala = $element->getValue(['format' => 'exiftool']);
                if ($valx != $vala) {
                    $exiftool_raw_force_a[$exiftool_DOM_Node] = $vala;
                }
            }
            if ($exiftool_dump) {
                $xml_nodes = $exiftool_dump->getElementsByTagName('*');
                $n = null;
                foreach ($xml_nodes as $node) {
                    if ($node->nodeName === $exiftool_DOM_Node) {
                        $n = $node;
                        break;
                    }
                }
                if (!$n) {
                    $exiftool_miss_a[] = $exiftool_DOM_Node;
                }
                print "txt: " . ($n->textContent ?? "*** MISSING ***") . "\n";
            }
        }
        print "------------------------------------------------\n";
    }

    foreach ($element->getMultipleElements('*') as $sub_element) {
        dump_element($sub_element, $exiftool_dump, $exiftool_raw_dump);
    }
}

/* Make MediaProbe speak the users language, if it is available. */
setlocale(LC_ALL, '');

require_once dirname(__FILE__) . '/../vendor/autoload.php';

$prog = array_shift($argv);
$file = '';
$logger = null;
$fail_on_error = false;
$write_back = false;

global $exiftool_raw_miss_a;
global $exiftool_raw_force_a;
global $exiftool_miss_a;
$exiftool_raw_miss_a = [];
$exiftool_raw_force_a = [];
$exiftool_miss_a = [];

while (! empty($argv)) {
    switch ($argv[0]) {
        case '-d':
            $logger = new Logger('dump-media');
            $log_handler = new StreamHandler('php://stdout');
            $log_formatter = new DumpLogFormatter();
            $log_handler->setFormatter($log_formatter);
            $logger
                ->pushHandler($log_handler)
                ->pushProcessor(new PsrLogMessageProcessor());
            break;
        case '-s':
            $fail_on_error = 'error';
            break;
        case '-w':
            $write_back = true;
            break;
        default:
            $file = $argv[0];
            break;
    }
    array_shift($argv);
}

if (empty($file)) {
    printf("Usage: %s [-d] [-s] <filename>\n", $prog);
    print("Optional arguments:\n");
    print("  -d        turn debug output on.\n");
    print("  -s        turn strict parsing on (halt on errors).\n");
    print("  -w        write back after parsing.\n");
    print("Mandatory arguments:\n");
    print("  filename  a media file.\n");
    exit(1);
}

if (!is_readable($file)) {
    printf("dump-media: Unable to read %s!\n", $file);
    exit(1);
}

try {
    /* Load data from file */
    $media = Media::createFromFile($file, $logger, $fail_on_error);
    if ($media === null) {
        print("dump-media: Unrecognized media format!\n");
        exit(1);
    }
    if ($write_back) {
        $media->saveToFile($file . '-rewrite.img');
    }

    /* Exiftool dump */
    $test_dump = @Yaml::parse(file_get_contents($file . '.test-dump.yml'));
//    dump($exiftool_raw_dump);
    $exiftool_dump = null;
    if (isset($test_dump['exiftool'])) {
        $exiftool_dump = new \DOMDocument();
        $exiftool_dump->loadXML($test_dump['exiftool']);
    }
    $exiftool_raw_dump = null;
    if (isset($test_dump['exiftool_raw'])) {
        $exiftool_raw_dump = new \DOMDocument();
        $exiftool_raw_dump->loadXML($test_dump['exiftool_raw']);
    }
} catch (InvalidFileException $e) {
    $err = $e->getMessage();
}

if (!isset($err)) {
    dump_element($media, $exiftool_dump, $exiftool_raw_dump);
    print "--- raw miss:\n    ";
    print implode("\n    ", $exiftool_raw_miss_a);
    print implode("\n");
    print "--- raw force:\n    ";
    $t = [];
    foreach ($exiftool_raw_force_a as $k => $v) {
        $t[] = $k . ': ' . $v;
    }
    print implode("\n    ", $t);
    print implode("\n");
    print "--- miss:\    n";
    print implode("\n    ", $exiftool_miss_a);
    print implode("\n");
} else {
    print("dump-media: Error while reading media file: " . $err . "\n");
}

// Dump via exif_read_data().
//dump(@exif_read_data($file));

exit(0);  // xx decide exit code
