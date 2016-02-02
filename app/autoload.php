<?php

use Doctrine\Common\Annotations\AnnotationRegistry;
use Composer\Autoload\ClassLoader;

/**
 * @var ClassLoader $loader
 */
$loader = require __DIR__.'/../vendor/autoload.php';

// Use Symfony class loader to register classes
$loader->add('Bigfoot\\Theme\\DefaultThemeBundle', __DIR__ . '/../src/bigfoot/BigfootCoreBundle');
$loader->add('Bigfoot\\Bundle\\ContentBundle', __DIR__ . '/../src/bigfoot/BigfootContentBundle');
$loader->add('Bigfoot\\Bundle\\MediaBundle', __DIR__ . '/../src/bigfoot/BigfootMediaBundle');

AnnotationRegistry::registerLoader([$loader, 'loadClass']);

return $loader;
