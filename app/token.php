<?php
    if (!isset($_SESSION)) {
        session_start();
    }
    $token = bin2hex(random_bytes(20));
    $_SESSION['token'] = $token;