<?php
session_start();

define("BASE_URL","http://localhost/leapfrog/day 9/advanced_2/");
define("ROOT_PATH",$_SERVER['DOCUMENT_ROOT']."leapfrog/day 9/advanced_2/");

define("HOSTNAME","localhost");
define("USERNAME","root");
define("PASSWORD","alskdjf1");
define("DATABASE","online_store");

include_once(ROOT_PATH."config/routes.php");
include_once(ROOT_PATH."system/dbUtil/db.class.php");
?>