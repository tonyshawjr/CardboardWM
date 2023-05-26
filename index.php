<?php
// Define the path to the MVC directories
define("VIEW_PATH", __DIR__ . "/src/view/");
define("CONTROLLER_PATH", __DIR__ . "/src/controller/");
define("MODEL_PATH", __DIR__ . "/src/model/");

// Include the MVC files
include_once MODEL_PATH . 'indexModel.php';
include_once VIEW_PATH . 'indexView.php';
include_once CONTROLLER_PATH . 'indexController.php';
