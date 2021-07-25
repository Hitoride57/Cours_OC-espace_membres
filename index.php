<?php

session_start();

include('includes/var_set.php');
include('includes/db_call.php');

include('includes/autologin.php');
include('includes/connect.php');

include('includes/head.php');
include('includes/header.php');

?>

<form action="index.php" method="post" class="login">
    <h2>T'es qui touè ?</h2>
        Pseudo : <input type="text" name="pseudo" placeholder="Ton blaze" required>
        <br />
        Mot de passe : <input type="password" name="password" placeholder="Ton code" required>
        <br />
        <input type="submit" value="Vas-y entre !">
        <br />
        <input type="checkbox" name="autologin" id="autologin">
        <label for="autologin">Et m'oublie pas !</label>
        <br />
        <a href="inscription.php">Pas inscrit ? Allez, R'joins nous !</a>
</form>

</html>