<?php
require_once '../../Model/admin.php';
$admin = new Admin();
$doc_id = $_REQUEST['doc_id'];
$delete = $admin->delete_doctor($doc_id);

if ($delete) {
    echo "<script>alert('delete successfully');</script>";
    echo "<script>window.location.href = 'admin Acess.php';</script>";
}



?>