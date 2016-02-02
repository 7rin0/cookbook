<?php

use Doctrine\Common\Annotations\AnnotationRegistry;
use Composer\Autoload\ClassLoader;

/**
 * @var ClassLoader $loader
 */
$loader = require __DIR__.'/../vendor/autoload.php';

// Use Symfony class loader to register classes
$loader->add('Bigfoot\\Bundle\\ContentBundle', __DIR__ . '/../src/bigfoot/BigfootContentBundle');

AnnotationRegistry::registerLoader([$loader, 'loadClass']);

return $loader;
