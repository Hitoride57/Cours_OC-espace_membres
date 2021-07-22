<?php

if (isset($_COOKIE['autologin'])) {
    
    $req = $db_espace_membres->prepare('SELECT id, pseudo, pass FROM membres WHERE id = :id');
    $req->execute(array(
        'id' => $_COOKIE['id']));
    
    $resultat = $req->fetch();

   
    if (!$resultat) {

        echo '<h3 class="login">Vos identifiants ne sont plus valides, merci de vous réauthentifier.</h3>';
    
    } else {

        if (($_COOKIE['pseudo'] != $resultat['pseudo']) OR ($_COOKIE['pass'] != $resultat['pass'])) {

            echo '<h3 class="login">Vos identifiants ne sont plus valides, merci de vous réauthentifier.</h3>';

        } else {

            header('Location: inside.php');
        
        }
    }
 
    $req->closeCursor();
    
} 

?>