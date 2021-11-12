<?php 
    session_start();
    unset($_SESSION['shelly_student']);
    header('location: ./');
    exit();
?>