<?php
/**
 * 133-Start - register.php
 * User: Janbl
 * Date: 09.06.2020
 */


?>

<form method="POST" action="index.php?action=registerIsCorrect">
    <br>
    <h1> Créer un nouveau compte </h1>
    <b>Email:</b><br>
    <input  type="email" name="emailRegister" value="" placeholder="enter email adress" required>
    <br>
    <b>Password:</b><br>
    <input type="password" name="passwordRegister" value="" placeholder="enter Password" required>
    <br>
    <b>Confirm Password:</b><br>
    <input type="password" name="passwordVerify" value="" placeholder="enter the same password" required>
    <br>

    <input type="submit" value="Login"> <input type="button" value="Reset"> Forgot <a href="">password</a>
</form>
<?php
$contenu = ob_get_clean(); //efface la mémoire tampon dans la variable $content
require "view/gabarit.php";  //Appele le fichier. gabarit.php est, requis pour que ça marche.