<?php

$db = require(APP_PATH . DIRECTORY_SEPARATOR  . 'configs/db.config.php');
$alias = require(APP_PATH . DIRECTORY_SEPARATOR  . 'configs/alias.config.php');
return [
    'id' => 'console',
    'name' => 'console-demo',
    'language' => 'zh-CN',
    'basePath' => APP_PATH . DIRECTORY_SEPARATOR . 'console',
    'vendorPath' => dirname(APP_PATH) . DIRECTORY_SEPARATOR . 'vendor',
    'runtimePath'         => ROOT_PATH . DIRECTORY_SEPARATOR . 'runtime' . DIRECTORY_SEPARATOR . 'console',
    'aliases'    => $alias,
    'controllerNamespace' => 'application\console\controllers',
    'components' => [
        'db' => $db,
    ]
];