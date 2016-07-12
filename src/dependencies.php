<?php
// DIC configuration

$container = $app->getContainer();

// view renderer
$container['renderer'] = function ($c) {
    $settings = $c->get('settings')['renderer'];
    return new Slim\Views\PhpRenderer($settings['template_path']);
};

// monolog
$container['logger'] = function ($c) {
    $settings = $c->get('settings')['logger'];
    $logger = new Monolog\Logger($settings['name']);
    $logger->pushProcessor(new Monolog\Processor\UidProcessor());
    $logger->pushHandler(new Monolog\Handler\StreamHandler($settings['path'], Monolog\Logger::DEBUG));
    return $logger;
};

// doctirine
$container['entityManager'] = function ($c) {
    $settings = $c->get('settings')['doctrine'];
    $config = \Doctrine\ORM\Tools\Setup::createAnnotationMetadataConfiguration(
        $settings['meta']['entity_paths'],
        $settings['meta']['is_dev_mode'],
        $settings['meta']['proxy_dir'],
        $settings['meta']['cache'],
        false
    );

    return \Doctrine\ORM\EntityManager::create($settings['connection'], $config);
};
