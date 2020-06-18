<?php
/**
 * Arya- controler.php
 * User: Janbl
 * Date: 20.05.2020
 */


require "model/userManagement.php";

function home()
{
$_GET['action'] = "home";
    require "view/home.php";
}

function login()
{
    $_GET['action'] = "login";
    require "view/login.php";
}

function logout()
{
    $_SESSION = session_destroy();
    home();

}

function register()
{
    $_GET['action'] = "register";
    require "view/register.php";
}

function registerIsCorrect($formR){
    if (CheckRegister($formR)) {
        home();
    } else {
        register();
    }
}


function LoginIsCorrect($formL)
{
    if (CheckLogin($formL)) {
        home();
        echo"hello";
    } else {
        login();
    }
}

function galerie()
{
    require "view/galerie.php";
}



