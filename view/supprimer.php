<?php
require_once('../controller/patient.php');
$id_patient=$_GET['id_patient'];
$patient=new patient();
$patient->supprimepatient($id_patient);
header('location:listing.php')
?>