<?php

include('includes/head.php');
include('includes/header.php');

include('includes/var_set.php');
include('includes/db_call.php');

?>

<form action='inside.php' method='post' class='login'>
    <h2>T'es qui touè ?</h2>
        <input type='text' name='pseudo' placeholder='Ton blaze' required />
        <br />
        <input type='password' name='password' placeholder='Ton code' required />
        <br />
        <input type='submit' value='Vas-y entre !' />
</form>

</html>