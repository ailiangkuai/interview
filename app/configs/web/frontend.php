<?php
$db = require(APP_PATH . DIRECTORY_SEPARATOR  . 'configs/db.config.php');
$alias = require(APP_PATH . DIRECTORY_SEPARATOR  . 'configs/alias.config.php');
return [
    'id'                  => 'frontend',
    'name'                => 'demo',
    'language'            => 'zh-CN',
    'basePath'            => APP_PATH . DIRECTORY_SEPARATOR . 'web' . DIRECTORY_SEPARATOR . 'frontend',
    'vendorPath'          => dirname(APP_PATH) . DIRECTORY_SEPARATOR . 'vendor',
    'runtimePath'         => ROOT_PATH . DIRECTORY_SEPARATOR . 'runtime' . DIRECTORY_SEPARATOR . 'frontend',
    'controllerNamespace' => 'application\web\frontend\controllers',
    'aliases'             => $alias,
    'bootstrap'           => ['debug', 'xsteach\yii\validators\Validator'],
    'components'          => [
        'request'    => [
            'class'                  => \yii\web\Request::className(),
            'enableCookieValidation' => false,
        ],
        'db'        => $db,
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName'  => false,
        ],
        'student' => \application\user\services\StudentService::className(),
        'teacher' => \application\user\services\TeacherService::className(),
    ],
];
