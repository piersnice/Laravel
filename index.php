<?php

/*El frontend controller se encarga de configurar
nuestra alplicacion*/

	require 'config.php';
	require 'helpers.php';

controller($_GET['url']);

//LIBRARY
require 'library/Request.php';

if(empty($_GET['url']))
{
	$url = "";
}
else
{
	$url = $_GET['url'];
}

$request = new Request($url);
var_dump($request->getUrl());

