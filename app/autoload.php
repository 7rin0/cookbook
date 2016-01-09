<?php

use Doctrine\Common\Annotations\AnnotationRegistry;
use Composer\Autoload\ClassLoader;

/**
 * @var ClassLoader $loader
 */
$loader = require __DIR__.'/../vendor/autoload.php';

// Use Symfony class loader to register classes
$loader->add('Bigfoot\\Bundle\\CoreBundle', __DIR__ . '/../bigfoot/core-bundle');
$loader->add('Bigfoot\\Theme\\DefaultThemeBundle', __DIR__ . '/../bigfoot/theme-bundle');
$loader->add('Bigfoot\\Bundle\\CoreBundle', __DIR__ . '/../bigfoot/core-bundle');
$loader->add('Bigfoot\\Bundle\\CoreBundle', __DIR__ . '/../bigfoot/core-bundle');
$loader->add('Bigfoot\\Bundle\\CoreBundle', __DIR__ . '/../bigfoot/core-bundle');
$loader->add('Bigfoot\\Bundle\\UserBundle', __DIR__ . '/../bigfoot/user-bundle');
$loader->add('Bigfoot\\Bundle\\CoreBundle', __DIR__ . '/../bigfoot/core-bundle');
$loader->add('Bigfoot\\Bundle\\ContextBundle', __DIR__ . '/../bigfoot/context-bundle');
$loader->add('Bigfoot\\Bundle\\ContentBundle', __DIR__ . '/../bigfoot/content-bundle');
$loader->add('BeSimple\\I18nRoutingBundle', __DIR__ . '/../besimple/i18n-routing-bundle');

AnnotationRegistry::registerLoader([$loader, 'loadClass']);

return $loader;
