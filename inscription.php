<?php

include('includes/head.php');
include('includes/header.php');

include('includes/var_set.php');
include('includes/db_call.php');

?>

<form action="index.php" method="post" class="login">
    <h2>Il est de noôÔôotre !!!</h2>
    <p>Vas-y, donne tes trucs et clique en bas !</p>
        Pseudo : <input type="text" name="pseudo" placeholder="Ton blaze" required>
        <br />
        E-mail : <input type="text" name="email" placeholder="Ton imèl" required>
        <br />
        Mot de passe : <input type="password" name="password" placeholder="Ton truc secret là" required>
        <br />
        Confirmation mot de passe : <input type="password" name="password_check" placeholder="Et vérifie ksè bien écrit" required>
        <br />
        <input type="submit" value="Valide ça et ramène toi !">
        <br />
        <a href="index.php">R'tourne d'où tu viens !</a>
</form>

</html>