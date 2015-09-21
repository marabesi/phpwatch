#!/usr/bin/env php
<?php
require __DIR__.'/../vendor/autoload.php';

use PhpWatch\Watch;
use PhpWatch\Phpunit;
use Symfony\Component\Console\Application;

$application = new Application();
$application->add(new Watch());
$application->add(new Phpunit());
$application->run();