<?php

use Skola\Core\WebApp;

define('BASE_PATH', __DIR__);
define('ASSET_PATH', dirname(__DIR__) . '/assets');
define('APP_PATH', dirname(__DIR__, 2) .  '/app');
define('VENDOR_PATH', APP_PATH . '/vendor');
define('VAR_PATH', dirname(__DIR__, 2) . '/var');

require APP_PATH . '/vendor/autoload.php';

WebApp::create(true, '/s-admin')->run();
