<?php

if (isset($_POST['killsession'])) {
    $_SESSION = array();
    session_destroy();

    setcookie('autologin', '');
    setcookie('id', '');
    setcookie('pseudo', '');
    setcookie('pass', '');

    header('Location: index.php');
}

?>