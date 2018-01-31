<?php
			
	require_once(__DIR__.'/Config/config.php');

	//chargement autoloader pour autochargement des classes
	require_once(__DIR__.'/Config/Autoload.php');
	Autoload::charger();
	session_start();
	$controller = new FrontControl();		
?>