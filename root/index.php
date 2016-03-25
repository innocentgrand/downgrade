<?php 
defined("DS") || define("DS", DIRECTORY_SEPARATOR);
$rootDir = dirname(dirname(__FILE__));
$rootDir .= DS . "downgrade" . DS . "core";
require_once($rootDir . DS . "downgrade.php");
