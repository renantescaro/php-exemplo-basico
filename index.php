<?php

require_once __DIR__ . '/vendor/autoload.php';

use SebastianBergmann\Timer\Timer;

$timer = new Timer;
$timer->start();
$duration = $timer->stop();

echo($duration->asSeconds());
