<?php

if (isset($_POST['pseudo'])) {

    $pseudo = $_POST['pseudo'];

    // Recherche de l'id et du mots de passe hashé de l'utilisateur selon son pseudo de connexion
    $req = $db_espace_membres->prepare('SELECT id, pass FROM membres WHERE pseudo = :pseudo');
    $req->execute(array(
        'pseudo' => $pseudo));
    
    $resultat = $req->fetch();
        
    // Connexion si les identifiants sont corrects et pass hashés identiques
    if (!$resultat || !password_verify($_POST['password'], $resultat['pass'])) {
        echo '<h3 class="login">Tu t\'es gouré champion...</h3>';
    } else {
        session_start();
        $_SESSION['id'] = $resultat['id'];
        $_SESSION['pseudo'] = $pseudo;
        $_SESSION['pass'] = $resultat['pass'];

        // A voir si cette méthode est réellement sécurisée
        if (isset($_POST['autologin'])) {
            
            $_SESSION['autologin'];
        }
        
        header('Location: inside.php');
        
    }

    $req->closeCursor();
    
}


?>