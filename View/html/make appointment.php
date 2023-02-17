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
require_once '../../Model/appointment.php';
require_once '../../controllers/appController.php';
require_once '../../Model/mail.php';


if(isset($_POST['name']) && isset($_POST['date']) && isset($_POST['time']) && isset($_POST['email']))
{
  $controller=new appController;
  $appointment= new Appointment;
  $appointment->name=$_POST['name'];
  $appointment->date=$_POST['date'];
  $appointment->time=$_POST['time'];
  $appointment->email=$_POST['email'];
  if($controller->addAppointment($appointment))
  {$mail->setFrom('amirbarakat48@gmail.com', 'patient-Health');
$mail->addAddress($_POST['email']);               //Name is optional
$mail->Subject = 'Examination reservation';
$mail->Body    = "dear ".$_POST['name'] ."<br>"."your Appointment date is ". $_POST['date']. " \n". "on " . $_POST['time']; 
$mail->send();
    echo "<script>alert('records added successfully');</script>";
    echo "<script>window.location.href = 'make appointment.php';</script>";
  }
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">
  <title>Appointment</title>


  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">

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
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="table final.php">Manage patientes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="medical report.php">Manage reports</a>
            </li>
            <li class="nav-item active">
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


  <div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Make an Appointment</h1>

      <form class="main-form" method="POST">
        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" class="form-control" placeholder="Full name" name="name" required>
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="text" class="form-control" placeholder="Email address.." name="email" required>
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <input type="text" class="form-control" name="date" placeholder="Date: 2022-05-0x" required>
          </div>
          <!-- <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
            <select name="departement" id="departement" class="custom-select">
              <option value="general">General Health</option>
              <option value="cardiology">Cardiology</option>
              <option value="dental">Dental</option>
              <option value="neurology">Neurology</option>
              <option value="orthopaedics">ophthalmology</option>
              <option value="orthopaedics">Orthopedics</option>
            </select>
          </div> -->
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <input type="text" class="form-control" placeholder="Time: xx:xx" name="time" required>
          </div>
          <!-- <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <input type="text" class="form-control" placeholder="Telephone number.." name="tel_num" required>
          </div> -->
        </div>

        <button type="submit" class="btn btn-primary mt-3 wow zoomIn">Submit</button>
        <button type="submit" class="btn btn-primary mt-3 wow zoomIn">cancel</button>
        <a href="appointments table.php"> <span style="margin-left:200px ;" type="submit"
            class="btn btn-primary mt-3 wow zoomIn">view All Appointments</span></a>
      </form>
    </div>
  </div> <!-- .page-section -->

</body>

</html>