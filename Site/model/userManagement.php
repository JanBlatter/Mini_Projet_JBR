<?php
/**
 * 133-Start - userManagement.php
 * User: Janbl
 * Date: 08.06.2020
 */

require "dbConnector.php";

function CheckLogin($formL)
{
    $password = $formL['password'];                 // le password du formulaire --> dans la variable password
    $email = $formL['email'];                    // username du formulaire --> dans la variable email


    $requete = "SELECT userEmailAddress, userHashPsw FROM users where userEmailAddress ='$email';";      // La commande MySQL , vérifie si l'email existe
    $result = executeQuery($requete);

    if ($result) {
        if(password_verify($password, $result[0]['userHashPsw'])){

            // si le compte existe , vérifie le password haché
            $_SESSION['e-mail'] = $formL['email'];

        } else {
            return false;
        }
    }else{ return false;
    }
}








function CheckRegister($formR)
{
    $email = $formR['emailRegister'];                // le nom du formulaire est dans email
    $requeteR = "SELECT userEmailAddress FROM users WHERE userEmailAddress ='" .$email. "';";   // requête , vérifie si l'usernameregister existe déjà
    $queryResult = executeQuery($requeteR);

    if ($queryResult) {

        return false;
    } else {
        if ($formR['passwordRegister'] == $formR['passwordVerify']) {    // si le password du formulaire register est identique  avec la confirmation du mdp, hash le mdp.
            $pwdHash = password_hash($formR['passwordRegister'], PASSWORD_DEFAULT);
            $requeteAdd = "INSERT INTO  (userEmailAddress, userHashPsw,) VALUES ('$email',.'$pwdHash');";       // ajoute le compte dans la base de donnée
            executeQuery($requeteAdd);

            $_SESSION['e-mail'] = $formR['emailRegister'];  //ouvre la session dès que la personne créé un compte.

            echo "Compte créé.";
            return true;
        } else {
            return false;
        }
    }
}
?>


