<?php
//standaart index.php 
session_start();
require_once 'controller/controller.php';

$controller = new Controller();
$controller->handleRequest();
?>