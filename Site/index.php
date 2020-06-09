<?php
/**
 * Arya - index.php
 * User: Jan.BLATTER
 * Date: 07.02.2020
 */

require "controler/controler.php";

if (isset($_GET['action'])){                        /* Si action est activé , alors va sur une des cases en fonction de l'utilisateur  */
    $action=$_GET['action'];
    switch ($action){
        case 'home':
            home();
            break;
        case 'login':
            login();
            break;
        case 'galerie':
            galerie();
            break;
        case'register':
            register();
            break;
        case'loginIsCorrect':
            LoginIsCorrect($_POST);
            break;
        case'registerIsCorrect':
            registerIsCorrect($_POST);
            break;
        default:
            home();
    }
}
else{
    home();
}