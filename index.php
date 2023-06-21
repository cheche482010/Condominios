<?php

date_default_timezone_set('America/Caracas');
error_reporting(E_ALL);
ini_set('display_errors', 1);

require 'libs/database.php';
require 'libs/model.php';
require 'libs/controller.php';
require 'libs/view.php';
require 'libs/app.php';

require 'config/config.php';
$app = new App();

?>