<?php

if (isset($_POST['killsession'])) {
    session_destroy();
}

?>