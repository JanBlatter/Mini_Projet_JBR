<?php
/**
 * Arya - gabarit.php
 * User: Janbl
 * Date: 20.05.2020
 */
ob_start();
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="view/style.css" />
    <title>Arya</title>

</head>
<body>

<header> Arya </header>

<div class="menu">

    <?php if (isset($_SESSION['e-mail'])) :?>
        <br><li>Connecté en tant que :  <?php echo $_SESSION['e-mail']?></li>
        <li><a href="index.php?action=home">Home</a></li>
    <li><a href="index.php?action=logout">Logout</a></li>
        <li><a href="index.php?action=galerie">Galerie</a></li>
    <?php else:?>
        <li><a href="index.php?action=home">Home</a></li>
        <li><a href="index.php?action=login">Login</a></li>
        <li><a href="index.php?action=register">Register</a></li>
        <li><a href="index.php?action=galerie">Galerie</a></li>
    <?php endif;?>


</div>


<?=$contenu?>




<footer>
    <p> Contact :  Twitter @Arya </p>
</footer>





</body>
</html>
