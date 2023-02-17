<?php 
session_start();
$welcome="Login";
if(!isset($_SESSION["docID"]))
{
  header("location: login.php");
}
else{
  $welcome="Welcome, ". $_SESSION["username"];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap Table with Add and Delete Row Feature</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../assets/css/theme.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
    color: #404E67;
    background: #F5F7FA;
    font-family: 'Open Sans', sans-serif;
}
.table-wrapper {
    width: 700px;
    margin: 30px auto;
    background: #fff;
    padding: 20px;	
    box-shadow: 0 1px 1px rgba(0,0,0,.05);
}
.table-title {
    padding-bottom: 10px;
    margin: 0 0 10px;
}
.table-title h2 {
    margin: 6px 0 0;
    font-size: 22px;
}


table.table {
    table-layout: fixed;
}
table.table tr th, table.table tr td {
    border-color: #e9e9e9;
}
table.table th i {
    font-size: 13px;
    margin: 0 5px;
    cursor: pointer;
}
table.table th:last-child {
    width: 100px;
}
table.table td a {
    cursor: pointer;
    display: inline-block;
    margin: 0 5px;
    min-width: 24px;
}    
table.table td a.add {
    color: #27C46B;
}
table.table td a.edit {
    color: #FFC107;
}
table.table td a.delete {
    color: #E34724;
}
table.table td i {
    font-size: 19px;
}
table.table td a.add i {
    font-size: 24px;
    margin-right: -1px;
    position: relative;
    top: 3px;
}    
table.table .form-control {
    height: 32px;
    line-height: 32px;
    box-shadow: none;
    border-radius: 2px;
}
table.table .form-control.error {
    border-color: #f50000;
}
table.table td .add {
    display: none;
}
</style>

</head>
<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
          <div class="container">
            <a class="navbar-brand" href="#"><span class="text-primary">patient</span>-Health</a>
    
            <form action="#">
              <div class="input-group input-navbar">
                <div class="input-group-prepend">
    
                  <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
    
                </div>
    
                <input type="text" class="form-control" placeholder="Enter keyword.." aria-label="Username"
                  aria-describedby="icon-addon1">
              </div>
            </form>
    
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport"
              aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse" id="navbarSupport">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="table final.php">Manage patientes</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="doctors.php">Manage reports</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="make appointment.php">Appointments</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.php">Contact</a>
                </li>
                <li class="nav-item">
                  <a class="btn btn-primary ml-lg-3" href="login.php"><?php
                  echo $welcome;
                  ?></a>
                </li>
              </ul>
            </div> <!-- .navbar-collapse -->
          </div> <!-- .container -->
        </nav>
      </header>



<div class="container-lg">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Patients <b>Appointments</b></h2></div>
                 
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <!-- <th>General Health</th> -->
                        <th>Date</th>
                        <th>time</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <?php
                require_once '../../controllers/appController.php';
                require_once '../../Model/appointment.php';
                $appointment=new Appointment;
                $controller=new appController;
                $app_name="";
                //  $_REQUEST['name'];

                $rows =$controller->viewAppointment($appointment);
                if(!empty($rows)){
                  foreach($rows as $row){ 

                ?>
                <tbody>
                    <tr>
                      <td><?php  echo $row['name']; ?></td>
                      <td><?php echo $row['date']; ?></td>
                      <td><?php echo $row['time']; ?></td>
                      <td><?php echo $row['email']; ?></td>
                        <td>
                        <a href="edit_appointment.php?full_name=<?php echo $row['name']; ?>" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a href="delete_appointment.php?full_name=<?php echo $row['name'];?>" name="delete" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>
                    <?php

                  }

                }

                  ?>
                    <!-- <tr>
                        <td>Amir</td>
                        <td>Dental</td>
                        <td>15/11/2022</td>
                        <td>5:30</td>
                        <td>(503) 555-9931</td>
                        <td>
                        <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a  class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr> -->
    
                </tbody>
            </table>
        </div>
    </div>
</div>     
</body>
</html>