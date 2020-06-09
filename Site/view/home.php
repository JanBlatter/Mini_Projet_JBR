<?php
/**
 * 133-Start - home.php
 * User: Janbl
 * Date: 20.05.2020
 */
ob_start();


?>

<h2> Bienvenue dans la page Home</h2>



<?php

$contenu = ob_get_clean(); //efface la mémoire tampon dans la variable $content
require "view/gabarit.php";
