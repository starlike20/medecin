<?php
require_once('../controller/function.php');
session_start();
    $mail=$_POST['mail'];
    $mdp=$_POST['mdp'];
    $_SESSION['id']=verification()[2];
    header('location:listing.php');
 ?>