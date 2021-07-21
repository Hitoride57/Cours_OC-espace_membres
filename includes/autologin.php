<?php

if ((isset($_SESSION['autologin']))) {
    
    $req = $db_espace_membres->prepare('SELECT id, pseudo, pass FROM membres WHERE id = :id');
    $req->execute(array(
        'id' => $_SESSION['id']));
    
    $resultat = $req->fetch();

   
    if (!$resultat) {

        echo '<h3 class="login">Vos identifiants ne sont plus valides, merci de vous réauthentifier.</h3>';
    
    } else {

        if (($_SESSION['pseudo'] != $resultat['pseudo']) OR ($_SESSION['pass'] != $resultat['pass'])) {

            echo '<h3 class="login">Vos identifiants ne sont plus valides, merci de vous réauthentifier.</h3>';

        } else {

            header('Location: inside.php');
        
        }
    }
 
    $req->closeCursor();
    
} 

?>