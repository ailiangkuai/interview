<?php
/* THIS PATH */
define('FRONTEND_PATH', __DIR__);

require(dirname(dirname(FRONTEND_PATH)) . '/env.php');

require(VENDOR_PATH .'/autoload.php');

$config = require(APP_PATH . '/configs/web/frontend.php');

(new \app\web\frontend\Application($config))->run();