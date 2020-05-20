<?php
/**
 * Arya- controler.php
 * User: Janbl
 * Date: 20.05.2020
 */


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