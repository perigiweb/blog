<?php

declare(strict_types=1);

use Skola\Core\WebApp;

define('BASE_PATH', __DIR__);
define('ASSET_PATH', BASE_PATH . '/assets');
define('APP_PATH', dirname(__DIR__) .  '/app');
define('VENDOR_PATH', APP_PATH . '/vendor');
define('VAR_PATH', dirname(__DIR__) . '/var');

require APP_PATH . '/vendor/autoload.php';

WebApp::create()->run();
