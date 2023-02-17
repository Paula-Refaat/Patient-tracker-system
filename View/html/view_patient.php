<?php
session_start();
$welcome="";
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
  <title>Bootstrap Simple Data Table</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <link rel="stylesheet" href="D:\one-health\assets\css\theme.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <style>
    body {
      color: #566787;
      background: #f5f5f5;
      font-family: 'Roboto', sans-serif;
    }

    .table-responsive {
      margin: 30px 0;
    }

    .table-wrapper {
      min-width: 1000px;
      background: #fff;
      padding: 20px;
      box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
    }

    .table-title {
      padding-bottom: 10px;
      margin: 0 0 10px;
      min-width: 100%;
    }

    .table-title h2 {
      margin: 8px 0 0;
      font-size: 40px;
    }

    .search-box {
      position: relative;
      float: right;
    }

    .search-box input {
      height: 34px;
      border-radius: 20px;
      padding-left: 35px;
      border-color: #ddd;
      box-shadow: none;
    }

    .search-box input:focus {
      border-color: #3FBAE4;
    }

    .search-box i {
      color: #a0a5b1;
      position: absolute;
      font-size: 19px;
      top: 8px;
      left: 10px;
    }

    table.table tr th,
    table.table tr td {
      border-color: #e9e9e9;
    }

    table.table-striped tbody tr:nth-of-type(odd) {
      background-color: #fcfcfc;
    }

    table.table-striped.table-hover tbody tr:hover {
      background: #f5f5f5;
    }

    table.table th i {
      font-size: 13px;
      margin: 0 5px;
      cursor: pointer;
    }

    table.table td:last-child {
      width: 130px;
    }

    table.table td a {
      color: #a0a5b1;
      display: inline-block;
      margin: 0 5px;
    }

    table.table td a.view {
      color: #03A9F4;
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

    .pagination {
      float: right;
      margin: 0 0 5px;
    }

    .pagination li a {
      border: none;
      font-size: 95%;
      width: 30px;
      height: 30px;
      color: #999;
      margin: 0 2px;
      line-height: 30px;
      border-radius: 30px !important;
      text-align: center;
      padding: 0;
    }

    .pagination li a:hover {
      color: #666;
    }

    .pagination li.active a {
      background: #03A9F4;
    }

    .pagination li.active a:hover {
      background: #0397d6;
    }

    .pagination li.disabled i {
      color: #ccc;
    }

    .pagination li i {
      font-size: 16px;
      padding-top: 6px
    }

    .hint-text {
      float: left;
      margin-top: 6px;
      font-size: 95%;
    }




    /* Custom checkbox */
    .custom-checkbox {
      position: relative;
    }

    .custom-checkbox input[type="checkbox"] {
      opacity: 0;
      position: absolute;
      margin: 5px 0 0 3px;
      z-index: 9;
    }

    .custom-checkbox label:before {
      width: 18px;
      height: 18px;
    }

    .custom-checkbox label:before {
      content: '';
      margin-right: 10px;
      display: inline-block;
      vertical-align: text-top;
      background: white;
      border: 1px solid #bbb;
      border-radius: 2px;
      box-sizing: border-box;
      z-index: 2;
    }

    .custom-checkbox input[type="checkbox"]:checked+label:after {
      content: '';
      position: absolute;
      left: 6px;
      top: 3px;
      width: 6px;
      height: 11px;
      border: solid #000;
      border-width: 0 3px 3px 0;
      transform: inherit;
      z-index: 3;
      transform: rotateZ(45deg);
    }

    .custom-checkbox input[type="checkbox"]:checked+label:before {
      border-color: #03A9F4;
      background: #03A9F4;
    }

    .custom-checkbox input[type="checkbox"]:checked+label:after {
      border-color: #fff;
    }

    .custom-checkbox input[type="checkbox"]:disabled+label:before {
      color: #b8b8b8;
      cursor: auto;
      box-shadow: none;
      background: #ddd;
    }




    /* Modal styles */
    .modal .modal-dialog {
      max-width: 400px;
    }

    .modal .modal-header,
    .modal .modal-body,
    .modal .modal-footer {
      padding: 20px 30px;
    }

    .modal .modal-content {
      border-radius: 3px;
      font-size: 14px;
    }

    .modal .modal-footer {
      background: #ecf0f1;
      border-radius: 0 0 3px 3px;
    }

    .modal .modal-title {
      display: inline-block;
    }

    .modal .form-control {
      border-radius: 2px;
      box-shadow: none;
      border-color: #dddddd;
    }

    .modal textarea.form-control {
      resize: vertical;
    }

    .modal .btn {
      border-radius: 2px;
      min-width: 100px;
    }

    .modal form label {
      font-weight: normal;
    }


    .text-primary {
      color: #00D9A5 !important;
    }

    a.text-primary:hover,
    a.text-primary:focus {
      color: #07be94 !important;
    }


    .btn-primary {
      color: #fff;
      background-color: #00D9A5;
      border-color: transparent;
    }

    .btn-primary.disabled,
    .btn-primary:disabled {
      color: #fff;
      background-color: #07be94;
      border-color: transparent;
    }

    .btn-primary:not(:disabled):not(.disabled):active,
    .btn-primary:not(:disabled):not(.disabled).active,
    .show>.btn-primary.dropdown-toggle {
      color: #fff;
      background-color: #00D9A5;
      border-color: #07be94;
    }

    .btn-primary:not(:disabled):not(.disabled):active:focus,
    .btn-primary:not(:disabled):not(.disabled).active:focus,
    .show>.btn-primary.dropdown-toggle:focus {
      box-shadow: none;
    }

    .table-title .btn span {
      float: left;
      margin-top: 2px;
    }
  </style>

</head>

<body>


  <div class="back-to-top"></div>

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
            <li class="nav-item">
              <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="table final.php">Manage patientes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="medical report.html">Medical Reports</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="make appointment.html">Appointments</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="login.html"><?php
              echo $welcome;
              ?></a>
            </li>
          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>



  <body>
    <div class="container">
      <div class="row">
        
        <div class="col-md-12 mt-5">

        </div>
      </div>
      <div class="row">
        <div class="col-md-5 mx-auto">
            
          <?php

              require_once '../../Model/patient.php';
              $patient = new Patient();
              $pat_id = $_REQUEST['pat_id'];
              $row = $patient->fetch_single($pat_id);
              if(!empty($row)){

          ?>
          
          <div class="card">
            <div class="card-header">
              
                    Details of Patient , <?php echo $row['name']; ?>
            
            </div>
            <div class="card-body">
              <p>pat_id = <?php echo $row['pat_id']; ?></p>
              <p>name = <?php echo $row['name']; ?></p>
              <p>address = <?php echo $row['address']; ?></p>
              <p>gender = <?php echo $row['gender']; ?></p>
              <p>age = <?php echo $row['age']; ?></p>
              <p>weight = <?php echo $row['weight']; ?></p>
              <p>height = <?php echo $row['height']; ?></p>
              <p>medical_condition = <?php echo $row['medical_condition']; ?></p>
              <p>admittance_date = <?php echo $row['admittance_date']; ?></p>
            </div>
          </div>
          <?php
            }else{
            echo "no data";
          }
          ?>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
  </html>