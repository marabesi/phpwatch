<?php

require __DIR__ . '/../vendor/autoload.php';

$phpFile = new PhpWatch\PhpFile($argv[2]);

$command = new PhpWatch\Watch($phpFile);
$invoke = new PhpWatch\Invoker($command);
$invoke->run();