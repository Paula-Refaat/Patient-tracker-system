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
/*
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

*/


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

  
<?php

require_once '../../Model/patient.php';
  $patient = new Patient();
  $pat_id = $_REQUEST['pat_id'];
  $row = $patient->fetch_single($pat_id);

  if (isset($_POST['update'])) {
    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['address']) && isset($_POST['weight']) && isset($_POST['height']) && isset($_POST['age']) && isset($_POST['gender']) && isset($_POST['medical_condition']) && isset($_POST['admittance_date']) ) {
      if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['address']) && !empty($_POST['weight']) && !empty($_POST['height']) && !empty($_POST['age']) && !empty($_POST['gender']) && !empty($_POST['medical_condition']) && !empty($_POST['admittance_date']) ) {
        
        $data['pat_id'] = $pat_id;
        $data['name'] = $_POST['name'];
        $data['email'] = $_POST['email'];
        $data['address'] = $_POST['address'];
        $data['weight'] = $_POST['weight'];
        $data['height'] = $_POST['height'];
        $data['age'] = $_POST['age'];
        $data['gender'] = $_POST['gender'];
        $data['medical_condition'] = $_POST['medical_condition'];
        $data['admittance_date'] = $_POST['admittance_date'];

        $update = $patient->update($data);

        if($update){
          echo "<script>alert('record update successfully');</script>";
          echo "<script>window.location.href = 'table final.php';</script>";
        }else{
          echo "<script>alert('record update failed');</script>";
          echo "<script>window.location.href = 'table final.php';</script>";
        }

      }else{
        echo "<script>alert('empty');</script>";
        header("Location: edit_patient.php?pat_id=$pat_id");
      }
    }
  }

?>
        
        <form method = "POST" >
                <div class="modal-header">
                  <h4 class="modal-title">Update Patient Deltails</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>

                <div class="modal-body">
                  <div class="form-group">
                    <label>Name</label>
                    <input type="text" name='name' value="<?php echo $row['name']; ?>" class="form-control" required>
                  </div>

                  <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name='email' value="<?php echo $row['email']; ?>"  required>
                  </div>

                  <div class="form-group">
                    <label>Address</label>
                    <input class="form-control" name = 'address' value="<?php echo $row['address']; ?>" required></input>
                  </div>
                  
              <!-- 
                 <div class="form-group">
                    <label>Phone</label>
                    <input type="text" name='Phone' class="form-control" required>
                  </div>
                -->

                  <div class="form-group">
                    <label>weight</label>
                    <input type="number" name= 'weight' value="<?php echo $row['weight']; ?>" class="form-control" required>
                  </div>

                  <div class="form-group">
                    <label>height</label>
                    <input type="number" name='height' value="<?php echo $row['height']; ?>" class="form-control" required>
                  </div>

                  <div class="form-group">
                    <label>age</label>
                    <input type="number" name = 'age' value="<?php echo $row['age']; ?>" class="form-control" required>
                  </div>


                  <div class="form-group">
                    <label>select gender</label>
                    <select style="width: 150px; font-size: medium;" name="gender" value = "<?php echo $row['gender']; ?>" >
                      
                      <option  name='male'>Male</option>
                      <option name = 'female' >Female</option>
                      <option name = 'other' >Other</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label>medical condition</label>
                    <input type="text" name='medical_condition' value="<?php echo $row['medical_condition']; ?>" class="form-control" required>
                  </div>


                  <div class="form-group">
                    <label>admittance_date</label>
                    <input type="date" name='admittance_date' value="<?php echo $row['admittance_date']; ?>" class="form-control" required>
                  </div>

                </div>
                <div class="modal-footer">
                  <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                  <input style="background-color:#00D9A5 ;" type="submit" name="update" class="btn btn-success" value="Update">
                </div>
              </form>
</body>
</html>