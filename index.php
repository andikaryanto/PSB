<?php
define("DS", DIRECTORY_SEPARATOR);
define("ROOT", getcwd() . DS);
define("APP_PATH", ROOT . DS);
// echo "APP_PATH";
session_start();
include "Main\\Loader.php";
if($_SERVER['PATH_INFO'] == "/")
    include "Pages\index.php";

?>

	