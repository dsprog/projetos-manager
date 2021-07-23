<?php
$composer = require __DIR__ . '/vendor/autoload.php';

use Dsprog\Framework\App;

require __DIR__ . '/config/modules.php';

$app = new App($composer, $modules);
$app->run();