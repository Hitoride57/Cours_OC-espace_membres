<?php

if (isset($_POST['killsession'])) {
    $_SESSION = array();
    session_destroy();

    setcookie('autologin', '', time() - 3600 );
    setcookie('id', '', time() - 3600 );
    setcookie('pseudo', '', time() - 3600 );
    setcookie('pass', '', time() - 3600 );
}

?>