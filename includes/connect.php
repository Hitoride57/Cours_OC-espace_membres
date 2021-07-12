<?php

if (isset($_POST['pseudo'])) {

    $pseudo = $_POST['pseudo'];

    // Recherche de l'id et du mots de passe hashé de l'utilisateur selon son pseudo de connexion
    $req = $db_espace_membres->prepare('SELECT id, pass FROM membres WHERE pseudo = :pseudo');
    $req->execute(array(
        'pseudo' => $pseudo));
    
    $resultat = $req->fetch();
        
    // Comparaison des mots de passe hashés pour la connexion
    $is_pass_correct = password_verify($_POST['password'], $resultat['pass']);

    // Connexion si les identifiants sont corrects
    if (!$resultat) {
        echo '<h3 class="login">Tu t\'es gouré champion...</h3>';
    } else {
        if ($is_pass_correct) {
            session_start();
            $_SESSION['id'] = $resultat['id'];
            $_SESSION['pseudo'] = $pseudo;

            // A voir si cette méthode est réellement sécurisée
            if (isset($_POST['autologin'])) {
                
                $pass_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
                
                setcookie('id', $resultat['id'], time() + 3600, null, null, false, true);
                setcookie('pseudo', $resultat['pseudo'], time() + 3600, null, null, false, true);
                setcookie('pass', $pass_hash, time() + 3600, null, null, false, true);
            }
            
            header('Location: inside.php');
            
        } else {
            echo '<h3 class="login">Tu t\'es gouré champion...</h3>';
        }
    }

    $req->closeCursor();
    
}


?>