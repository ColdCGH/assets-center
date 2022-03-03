<?php

use Asset\Asset;

require '../vendor/autoload.php';

$factory = Asset::Account()->query();

print_r($factory);exit;
