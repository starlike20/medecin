<?php
require_once('controller/function.php');
    session_start();
    $_SESSION['id']=verification().[2];
    header('location:ajouter.php');
?>