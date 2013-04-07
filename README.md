GitSynchronizer App
===================

Welcome to the GitSynchronizer App - a fully-functional GitSynchronizer
application that you can use as the skeleton for your new applications.

This document contains information on how to download, install, and start
using GitSynchronizer.


Installation
------------

The simplest and recommended way to install GitSynchronizer App is to use
[Composer](http://getcomposer.org/):

If you don't have Composer yet, download it following the instructions on
http://getcomposer.org/ or just run the following command:

    curl -s http://getcomposer.org/installer | php

Then, use the `create-project` command to generate a new GitSynchronizer
application:

    php composer.phar create-project ml/git-synchronizer-app path/to/install

Composer will install GitSynchronizer and all its dependencies under the
`path/to/install` directory.

The applications main entry point is in the `web/index.php` file.
