<?php

include('includes/head.php');
include('includes/header.php');

include('includes/var_set.php');
include('includes/db_call.php');

?>

<h3 class="login">Salut <?php $_SESSION['pseudo'] ?> !</h3>

<h2>Bon bon bon...pas grand chose à faire ici...</h2>
<form action="index.php" method="post" class="login">
    <input type="hidden" value="killsession">
    <input type="submit" value="Se déconnecter">
</form>

</html>