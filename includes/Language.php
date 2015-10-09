<?php
/**
 * Created by PhpStorm.
 * User: alwin_000
 * Date: 9-10-2015
 * Time: 09:10
 */


if(isset($_GET['lang'])){ // Wanneer er een taal gekozen is, wordt hij hier veranderd
    $lang = $_GET['lang'];
    $_SESSION['lang'] = $_GET['lang'];
}elseif(isset($_SESSION['lang'])){ // Kijkt of er een sessie bestaat met een gekozen taal en gebruikt dan die taal.
    $lang = $_SESSION['lang'];
}else{ // Als er geen taal is gekozen wordt er gekeken naar de taal van de browser.
    $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
}

// Verwerkt de talen.
switch ($lang){
    case "nl":
        require_once("languages/nl_NL.php");
        $feed = "nl_nl";
        break;
    case "en":
        require_once("languages/en_EN.php");
        $feed = "en_en";
        break;
    default:
        require_once("languages/en_EN.php");
        $feed = "en_en";
        break;
}