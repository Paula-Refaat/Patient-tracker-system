<?php
require_once '../../Model/patient.php';
$patient = new Patient();
$pat_id = $_REQUEST['pat_id'];
$delete = $patient->delete_patient($pat_id);

if ($delete) {
    echo "<script>alert('delete successfully');</script>";
    echo "<script>window.location.href = 'table final.php';</script>";
}



?>