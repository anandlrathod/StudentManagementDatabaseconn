<?php

require_once 'controller/homeController.php';
require_once 'controller/config.php';
$controller = new HomeController();

$controller->handleRequest();

?>