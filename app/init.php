<?php 

define("APP_DIR", __DIR__ );
define("BASE_URL", "http://localhost/mvc/public");

require_once "../vendor/autoload.php";

//require_once APP_DIR . "/models/User.php";

require_once APP_DIR . "/Database.php";
require_once APP_DIR . "/core/App.php";
require_once APP_DIR . "/core/Controller.php";


$user = new User();
