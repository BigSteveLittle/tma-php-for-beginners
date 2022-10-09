<?php
    session_start();

    session_destroy();
    header('Location: /php/tm-php-for-beginners/tma-php-for-beginners/13-sessions.php');
?>