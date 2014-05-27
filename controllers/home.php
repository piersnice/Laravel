<?php 

	$confidencial = 'wow such private very confidential';
	$language = "PHP";
	$titulo = 'Mejorando.la';

	//LLAMANDO UNA FUNCION
	view('home', compact('language','titulo'));