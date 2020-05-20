<?php
/**
 * Arya - login.php
 * User: Janbl
 * Date: 20.05.2020
 */
// tampon de flux stocké en mémoire
ob_start(); //ouvre la mémoire tampon
$titre="Arya - Login"
?>
    <form class="form" method="POST" action="index.php?action=loginIsCorrect">
        <br>
        <h1> Login </h1>
        <b>Username:</b><br>
        <input  type="email" name="username" value="" placeholder="enter email adress" required>
        <br>
        <b>Password:</b><br>
        <input type="password" name="password" value="" placeholder="enter Password" required>
        <br>
        <br>
        <input type="submit" value="Login"> <input type="button" value="Reset"> Forgot <a href="">password</a> ?
    </form>
<?php
$contenu = ob_get_clean(); //efface la mémoire tampon dans la variable $content
require "view/gabarit.php";  //Appele le fichier. gabarit.php est requis pour que ça marche.
