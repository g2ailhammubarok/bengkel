<?php
// session_start();

$f3 = require('lib/base.php');

$f3->config('config/config.ini');
$f3->config('config/routes.ini');

new Session();

$f3->run();