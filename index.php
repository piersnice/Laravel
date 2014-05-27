<?php

/*El frontend controller se encarga de configurar
nuestra alplicacion*/

	require 'config.php';
	require 'helpers.php';


//Llamar a los controladores indicados

/*if(empty($_GET['url']))
{
	$_GET['url'] = 'home';
}
*/
controller($_GET['url']);

//index.php

	/*if(empty($_GET['url']))//comparar vacio
	{
		require "controllers/home.php";
	}
	//index.php?url=contactos
	elseif ($_GET['url'] == 'contactos')
	{
		require "controllers/contactos.php";
	}
	//index.php?url=asasasa
	else
	{
		header("HTTP/1.0 404 Not Found");
		exit("Pagina no Encontrada");
	}
*/

//var_dump($_GET);VER EL CONTENIDO DE UNA VARIABLE