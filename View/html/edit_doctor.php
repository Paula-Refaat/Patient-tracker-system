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
        /*
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
       */




        /* Modal styles */
        /*
        .modal .modal-dialog {
            max-width: 400px;
        }
        */

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

require_once '../../Model/admin.php';
  $admin = new Admin();
  $doc_id = $_REQUEST['doc_id'];
  $row = $admin->fetch_single($doc_id);

  if (isset($_POST['update'])) {
    if (isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['username']) && isset($_POST['phone']) && isset($_POST['clinic'])) {
      if (!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['username']) && !empty($_POST['phone']) && !empty($_POST['clinic'])) {
        
        $data['doc_id'] = $doc_id;
        $data['fname'] = $_POST['fname'];
        $data['lname'] = $_POST['lname'];
        $data['username'] = $_POST['username'];
        $data['phone'] = $_POST['phone'];
        $data['clinic'] = $_POST['clinic'];

        $update = $admin->update($data);

        if($update){
          echo "<script>alert('record update successfully');</script>";
          echo "<script>window.location.href = 'admin Acess.php';</script>";
        }else{
          echo "<script>alert('record update failed');</script>";
          echo "<script>window.location.href = 'admin Acess.php';</script>";
        }

      }else{
        echo "<script>alert('empty');</script>";
        header("Location: edit_doctor.php?doc_id=$doc_id");
      }
    }
  }

?>
    <form method = "POST">
                <div class="modal-header">
                    <h4 class="modal-title">Update Doctor Deltails</h4>
                    <button type="button" class="close" data-dismiss="modal"
                        aria-hidden="true">&times;</button>
                </div>

                <div class="modal-body">
                    <div class="form-group">
                        <label>Fname</label>
                        <input type="text" name = 'fname' value="<?php echo $row['fname']; ?>" class="form-control" required>
                    </div>

                    <!--
                    <div class="form-group">
                        <label>Gender</label>
                        <select style="width: 150px; font-size: medium;" name="gender">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                    -->

                    <div class="form-group">
                        <label>Lname</label>
                        <input type="text" name='lname' value="<?php echo $row['lname']; ?>" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name='username' value="<?php echo $row['username']; ?>" class="form-control" required>
                    </div>

                  <!--
                    <div class="form-group">
                        <label>Address</label>
                        <textarea class="form-control" required></textarea>
                    </div>
                 -->

                    <div class="form-group">
                        <label>Phone</label>
                        <input type="text" name='phone' value="<?php echo $row['phone']; ?>" class="form-control" required>
                    </div>


                    <div class="form-group">
                        <label>clinic</label>
                        <input type="text" name = 'clinic' value="<?php echo $row['clinic']; ?>" class="form-control" required>
                    </div>



                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name='password' value="<?php echo $row['password']; ?>" class="form-control" required>
                    </div>

<!--
                    <div class="form-group">
                        <label>Certificate</label>
                        <input type="file" class="form-control" accept="image/*" required>
                    </div>


                    <div class="form-group">
                        <label>Skills</label>
                        <textarea class="form-control" required></textarea>
                    </div>

                    <div class="form-group">
                        <label>Salary</label>
                        <input type="number" class="form-control" required>
                    </div>
    -->

                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <input style="background-color:#00D9A5 ;" type="submit" name="update" class="btn btn-success"
                        value="Update">
                </div>
            </form>
            </body>
            </html>