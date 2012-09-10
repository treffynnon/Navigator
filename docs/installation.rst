Installation
============

There are a few ways of installing this library, the easiest of which is via Packagist_ with Composer_.

Packagist with Composer
'''''''''''''''''''''''

Composer_ is a great way to manage dependencies for PHP projects and there is a ready made package for Navigator available on Packagist_.

In your projects `composer.json` file you should enter the following information:

.. code-block:: javascript

    {
        "require": {
            "treffynnon/navigator": "1.*",
        }
    }

Next you need to install composer on your system with

.. code-block:: sh

    curl -s http://getcomposer.org/installer | php

Install the Composer_ managed dependencies with:

.. code-block:: sh

    php composer.phar install

You will now have a `vendors` directory in your project that contains Navigator.

Composer also automatically generates an autoload file that you can use to autoload the classes of the Navigator library (and any other dependencies you have managed with Composer_). To do this add the following to your projects bootstrap file:

.. code-block:: php

    <?php require 'vendor/autoload.php';

Navigator is now installed in your project with Composer_ meaning that it is easy to keep up to date!

git Clone or Zip Package
''''''''''''''''''''''''

Navigator can also be installed from source by either using git to clone or export the repository or by downloading a `zipped release`_ from GitHub_.

To obtain the library with git it is as simple as:

.. code-block:: sh

    git clone git://github.com/treffynnon/Navigator.git

Otherwise you can download a `zip or tar file`_ of the latest release from GitHub_ and extract it.

Then to initialise the autoloader for the Navigator library add the following to your projects bootstrap:

.. code-block:: php

    <?php
    require_once __DIR__ . 'Navigator/lib/Treffynnon/Navigator.php';
    use Treffynnon\Navigator as N;
    N::autoloader();

The Navigator library is now available to your project.

.. _Packagist: http://packagist.org/packages/Treffynnon/Navigator
.. _Composer: http://getcomposer.org
.. _GitHub: https://github.com/treffynnon/Navigator
.. _zipped release: https://github.com/treffynnon/Navigator/tags
.. _zip or tar file: https://github.com/treffynnon/Navigator/tags
