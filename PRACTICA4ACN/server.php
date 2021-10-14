<?php 
	require_once "lib/nusoap.php";
	function obtenerPelicula($dato){
		if($dato == "Peluculas")
		{
			return join(",", array(
				"Rapido y Furioso",
				"Avenger End Game",
				"Ip Man",
				"Monster Inc"
			));
		}
		else
		{
			return "No hay Peliculas";
		}
	}

	$server = new soap_server();
	$server->register("obtenerPelicula");
	if(!isset($http_post_data)) $http_raw_post_data = file_get_contents('php://input');
	$server->service($http_raw_post_data);
 ?>