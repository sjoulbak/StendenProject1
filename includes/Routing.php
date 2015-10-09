<?php
/**
 * Created by PhpStorm.
 * User: alwin_000
 * Date: 9-10-2015
 * Time: 09:10
 */
require_once("AltoRouter.php");
$router = new AltoRouter();

// map homepage
$router->map( 'GET', '/nl/', function() {
    require __DIR__ . '../nl.txt';

});
var_dump($router->getRoutes());