Tests
=====

Tests are written for PHPUnit_ 3.5+ with 100% code coverage and can be run with:

.. code-block:: sh

    phpunit --bootstrap tests/bootstrap.php tests

Travis-CI
'''''''''

Continuous integration is handled by Travis-CI_:

.. image:: https://secure.travis-ci.org/treffynnon/Navigator.png?branch=master
    :alt: Build Status
    :target: http://travis-ci.org/treffynnon/Navigator

Code Coverage
'''''''''''''

Code coverage can be obtained from PHPUnit_ with the following command:

.. code-block:: sh

    phpunit --bootstrap tests/bootstrap.php --coverage-html ../coverage tests


.. _Travis-CI: http://travis-ci.org
.. _PHPUnit: http://phpunit.de