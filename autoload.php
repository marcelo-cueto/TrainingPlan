<?php
require_once 'controllers/conexion.php';
require_once 'controllers/user.php';
require_once 'controllers/management.php';
require_once 'controllers/area.php';
require_once 'controllers/bossarea.php';
require_once 'controllers/course.php';
require_once 'controllers/courses_users.php';

session_start();

if (isset($_COOKIE["legajo"]) && !isset($_SESSION["legajo"])) {
$_SESSION["legajo"] = $_COOKIE["legajo"];
}
