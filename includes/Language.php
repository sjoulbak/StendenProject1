<?php
/**
 * Created by PhpStorm.
 * User: alwin_000
 * Date: 9-10-2015
 * Time: 09:10
 */
if(isset($_GET['lang'])){
    $lang = $_GET['lang'];
    $_SESSION['lang'] = $_GET['lang'];
}elseif(isset($_SESSION['lang'])){
    $lang = $_SESSION['lang'];
}else{
    $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
}
switch ($lang){
    case "nl":
        echo "PAGE NL";
        require_once("languages/nl_NL.php");
        $feed = "nl_nl";
        break;
    case "en":
        echo "PAGE EN";
        require_once("languages/en_EN.php");
        $feed = "en_en";
        break;
    default:
        echo "PAGE DEFAULT";
        require_once("languages/en_EN.php");
        $feed = "en_en";
        break;
}
//var_dump($router->getRoutes());