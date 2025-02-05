# README file for MediaProbe Test Suite

The tests run automatically on each commit on TravisCI. Status for the
master branch is:

@todo

## MediaProbe Test Suite

This directory holds the PHPUnit test suite for MediaProbe. The test
suite consists of a number of core tests which exercise the basic
functionality of MediaProbe.

In addition to the core tests, one can download a set of image tests.
These consist of example images taken from as many different camera
models as possible together with a test case that will ensure that MediaProbe
can read the data in the image, and that it keeps interpreting the
data in the same way.  This ensures stability in the development
process by making sure that MediaProbe keeps reading images in the same way.


## Running the Test Suite

First the make sure PHPUnit is downloaded. You can do so in
the project's top directory via composer

```bash
composer update
```

Now from the top of the project, you can run

```bash
phpunit
```

## Failing Tests

Should one or more of the tests fail, then first ensure that
SimpleTest is placed correctly so that run-tests.php can find it. If
everything seems correct, then please report the error to the MediaProbe
developers:

  https://github.com/fileeye/mediaprobe/issues

Remember to include all the output in your bug report.
