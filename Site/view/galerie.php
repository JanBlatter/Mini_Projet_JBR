<?php
/**
 * 133-Start - galerie.php
 * User: Janbl
 * Date: 28.05.2020
 */
ob_start();
?>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="view/style.css" />
    <title>Arya </title>

</head>
<body>

<section id="images">

    <img src="view/content/images/image0.jpg" id="image0" width="250" height="333">
    <img src="view/content/images/image1.jpg" id="image1" width="250" height="333">
    <br>
    <img src="view/content/images/image2.jpg" id="image2" width="250" height="333">
    <img src="view/content/images/image4.jpg" id="image4" width="250" height="333">
    <br>
    <img src="view/content/images/image3.jpg" id="image3" width="500" height="350">
</section>


</body>
</html>
<?php

$contenu = ob_get_clean(); //efface la mémoire tampon dans la variable $content
require "view/gabarit.php";  //Appele le fichier. gabarit.php est requis pour que ça marche.
?>
