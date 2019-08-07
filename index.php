<?php
define("DS", DIRECTORY_SEPARATOR);
define("ROOT", getcwd() . DS);
define("APP_PATH", ROOT . DS);
// echo "APP_PATH";
session_start();
require_once __DIR__ . '/vendor/autoload.php';
include "Main\\Loader.php";
if($_SERVER['PATH_INFO'] == "/")
    include "Pages\index.php";

?>

	