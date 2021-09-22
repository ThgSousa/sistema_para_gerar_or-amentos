<?php

ob_start();   
session_start(); 

include("./includes/config.php");

// Report all errors
error_reporting(E_ALL);

// get web settings

$url = "http://localhost/MobileAula/";
include("./includes/functions.php");
$source_dir = './source/';

$m = protect($_GET['m']);
switch($m) {

	case "dashboard": include($source_dir."dashboard.php"); break;
	case "materiais": include($source_dir."materiais.php"); break;
	case "novo_orcamento": include($source_dir."novoOrcamento.php"); break;
	case "ver": include($source_dir."ver.php"); break;

	case "logout": 
		unset($_SESSION['id']);
		session_unset();
		session_destroy();
		header("Location: account/login");
		break;
	

}
?>