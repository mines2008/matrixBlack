<?php
error_reporting(0);
$microtime = explode(' ', microtime());
$starttime = $microtime[1] + $microtime[0];
define('IN_MCMS', TRUE);
define('MCMS_ROOT', dirname(__FILE__));
define('SITE_URL', 'http://' . $_SERVER['HTTP_HOST'] . substr($_SERVER['PHP_SELF'], 0, -9));
include MCMS_ROOT . '/model/mcms.class.php';
$mcms = new mcms();
$mcms->run();
?>