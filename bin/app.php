<?php
require dirname(__DIR__) . '/vendor/autoload.php';
exit((require dirname(__DIR__) . '/bootstrap.php')(PHP_SAPI === 'cli' ? 'cli-hal-api-app' : 'hal-api-app'));
