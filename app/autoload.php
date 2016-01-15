<?php

use Doctrine\Common\Annotations\AnnotationRegistry;
use Composer\Autoload\ClassLoader;

/**
 * @var ClassLoader $loader
 */
$loader = require __DIR__.'/../vendor/autoload.php';

// Use Symfony class loader to register classes
$loader->add('BeSimple\\I18nRoutingBundle', __DIR__ . '/../src/BeSimpleI18nRoutingBundle');
$loader->add('JMS\\TwigJsBundle', __DIR__ . '/../src/jms/JMSTwigJsBundle');
$loader->add('Bigfoot\\Bundle\\CoreBundle', __DIR__ . '/../src/bigfoot/BigfootCoreBundle');
$loader->add('Bigfoot\\Theme\\DefaultThemeBundle', __DIR__ . '/../src/bigfoot/BigfootCoreBundle');
$loader->add('Bigfoot\\Bundle\\UserBundle', __DIR__ . '/../src/bigfoot/BigfootUserBundle');
$loader->add('Bigfoot\\Bundle\\ContextBundle', __DIR__ . '/../src/bigfoot/ContextBundle');
$loader->add('Bigfoot\\Bundle\\ContentBundle', __DIR__ . '/../src/bigfoot/BigfootContentBundle');
$loader->add('Bigfoot\\Bundle\\NavigationBundle', __DIR__ . '/../src/bigfoot/BigfootNavigationBundle');
$loader->add('Bigfoot\\Bundle\\MediaBundle', __DIR__ . '/../src/bigfoot/BigfootMediaBundle');

AnnotationRegistry::registerLoader([$loader, 'loadClass']);

return $loader;
