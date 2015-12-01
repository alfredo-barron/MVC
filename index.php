<?php

/*
 * El FrontEnd Controller se encarga de configurar
 * nuestra aplicación.
 */

require 'config.php';

//Library
require 'library/Request.php';
require 'library/Inflector.php';
require 'library/Response.php';
require 'library/View.php';



if (empty($_GET['url']))
{
    $url = "";
}
else
{
    $url = $_GET['url'];

}

$request = new Request($url);
$request->execute();

//Pruebas Unitarias
//var_dump($request->getParams());
