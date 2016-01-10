<?php

use Doctrine\Common\Annotations\AnnotationRegistry;
use Composer\Autoload\ClassLoader;

/**
 * @var ClassLoader $loader
 */
$loader = require __DIR__.'/../vendor/autoload.php';

// Use Symfony class loader to register classes
$loader->add('Bigfoot\\Bundle\\CoreBundle', __DIR__ . '/../src/BigfootCoreBundle');
$loader->add('Bigfoot\\Theme\\DefaultThemeBundle', __DIR__ . '/../src/BigfootCoreBundle');
$loader->add('Bigfoot\\Bundle\\UserBundle', __DIR__ . '/../src/BigfootUserBundle');
$loader->add('Bigfoot\\Bundle\\ContextBundle', __DIR__ . '/../src/ContextBundle');
$loader->add('Bigfoot\\Bundle\\ContentBundle', __DIR__ . '/../src/BigfootContentBundle');
$loader->add('Bigfoot\\Bundle\\NavigationBundle', __DIR__ . '/../src/BigfootNavigationBundle');
$loader->add('BeSimple\\I18nRoutingBundle', __DIR__ . '/../src/BeSimpleI18nRoutingBundle');
$loader->add('JMS\\TwigJsBundle', __DIR__ . '/../src/jms/JMSTwigJsBundle');

AnnotationRegistry::registerLoader([$loader, 'loadClass']);

return $loader;
