<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Helper\AppFactoryHelper;
use App\Routes\RouteHelperMain;

$app = AppFactoryHelper::create();

// load routes (add here all the routes that you need!)
RouteHelperMain::addRoutesToApp($app);

$app->run();
