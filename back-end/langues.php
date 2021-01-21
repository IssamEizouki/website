<?php

session_start(); 

if(!isset($_SESSION['langues']))
    $_SESSION['langues'] = "fr"; 

    else if(isset($_GET['langues']) && $_SESSION['langues'] != $_GET['langues'] && !empty($_GET ['langues'])) {
        if($_GET['langues'] == "fr")
        $_SESSION['langues'] = "fr";

        else if ($_GET['langues'] =="en") 
         $_SESSION['langues'] = "en";
    }

require_once ("back-end/") . $_SESSION['langues'] . ".php";




?>