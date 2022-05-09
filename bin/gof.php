<?php

require_once __DIR__ . '/../vendor/autoload.php';

$app = new Ahc\Cli\Application('gof', '0.0.1');

$logo = '
PHP GoF Design Patterns
============================
';

foreach (include 'commands.php' as $class => $arguments) {
    $app->add(new $class($arguments['name'], $arguments['description']), $arguments['alias']);
}



$app->logo($logo)->handle($_SERVER['argv']);
