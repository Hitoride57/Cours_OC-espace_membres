<?php

session_start();

include('includes/var_set.php');
include('includes/db_call.php');

include('includes/kill_session.php');

include('includes/head.php');
include('includes/header.php');

if(isset($_SESSION['pseudo'])) {
    echo '<h3 class="login">Salut ' . $_SESSION['pseudo'] . '!</h3>';
} else {
    echo '<h3 class="login">Erreur de session</h3>';
}

?>

<h2>Bon bon bon...pas grand chose à faire ici...</h2>
<form action="inside.php" method="post" class="login">
    <input type="hidden" value="killsession" name="killsession">
    <input type="submit" value="Se déconnecter">
</form>

</html>