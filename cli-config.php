<?php

require __DIR__ . '/vendor/autoload.php';

$settings = require __DIR__ . '/src/settings.php';
$settings = $settings['settings']['doctrine'];

$config = \Doctrine\ORM\Tools\Setup::createAnnotationMetadataConfiguration(
    $settings['meta']['entity_paths'],
    $settings['meta']['is_dev_mode'],
    $settings['meta']['proxy_dir'],
    $settings['meta']['cache'],
    false
);

$em = \Doctrine\ORM\EntityManager::create($settings['connection'], $config);

return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet($em);
