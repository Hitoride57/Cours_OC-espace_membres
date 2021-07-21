<?php

if (isset($_POST['pseudo'])) {

    if (preg_match('#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#', $_POST['email'])) {

        
        if ($_POST['password'] == $_POST['password_check']) {
            
            $pseudo = htmlspecialchars($_POST['pseudo']);
            
            $pass_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
            
            $email = $_POST['email'];
            
            $req = $db_espace_membres->prepare('INSERT INTO membres(pseudo, pass, email, date_inscription) VALUES (:pseudo, :pass, :email, CURDATE())');

            $req->execute(array(
                'pseudo' => $pseudo,
                'pass' => $pass_hash,
                'email' => $email));

            $req->closeCursor();
            
            // Rediriger vers la page de connexion si l'inscription s'est bien passée
            // Voir pour ajouter un message de confirmation pour dire que l'inscription est validée
            header('Location: index.php');
            
            
        } else {

            echo '<h3 class="login">Et ! Tu t\'est gouré dans tes trucs secrets là !</h3>';

        }
    } else {
        echo '<h3 class="login">C\'est quoi de ton mèl là ! Ressais moi tout ça !</h3>';
    }
}


?>