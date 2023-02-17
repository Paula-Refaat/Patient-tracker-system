<?php
    require_once '../../controllers/appController.php';
    $controller = new appController;
    $name = $_REQUEST['full_name'];
    $delete = $controller->delete_appointment($name);

    if ($delete) {
        echo "<script>alert('delete successfully');</script>";
        echo "<script>window.location.href = 'appointments table.php';</script>";
    }



?>