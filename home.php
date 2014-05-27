<?php 
	require 'config.php';
	require 'helpers.php';

	$confidencial = 'wow such private very confidential';
	$language = "PHP";
	$titulo = 'Mejorando.la';

	//LLAMANDO UNA FUNCION
	view('view', compact('language','titulo'));