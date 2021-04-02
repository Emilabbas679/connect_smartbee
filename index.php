<?php
ob_start();
session_start();



define("APP_NAME", 'Sinyorz');
define("APP_TITLE", '| Sinyorz');
define("APP_URL", 'http://php.loc/');
define("ADMIN_URL", APP_URL.'admin/');
define('ADMIN_FILES', '/project/resources/admin' );
define('SITE_FILES', '/project/resources/site' );


require_once 'project/init.php';
$project = new Application;


