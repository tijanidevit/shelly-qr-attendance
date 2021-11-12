<?php 
    session_start();
    unset($_SESSION['shelly_admin']);
    header('location: ./');
    exit();
?>