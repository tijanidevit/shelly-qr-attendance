<?php 
    session_start();
    unset($_SESSION['shelly_lecturer']);
    header('location: ./');
    exit();
?>