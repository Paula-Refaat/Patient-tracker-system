<?php  
session_start();
if(isset($_SESSION["docID"]))
{
  header("location: table final.php");
}
elseif(isset($_SESSION["admID"]))
{
  header("location: admin Acess.php");
}

require_once '../../Model/user.php';
require_once '../../controllers/AuthController.php';
$error="form-control rounded-left";
$admin="Login";
$adminpath="login.php";
    if(isset($_POST['username']) && isset($_POST['password']))
    {
      if(!empty($_POST['username']) && !empty($_POST['username']))
      {

        $user=new User;
        $auth=new AuthController;
        $user->username=$_POST['username'];
        $user->password=$_POST['password'];
        if($auth->login($user))
        {
          
          if(isset($_SESSION["admID"]))
          {
            // $error="form-control rounded-left";
            // echo "checkpoint";
            $admin="Admin Panel";
            $adminpath="admin Acess.php";
          
            header("location: admin Acess.php");
            // echo "Logged in success";

          }
          else
          {
            // session_start();
          }
          if(isset($_SESSION["docID"]))
          {
            // echo "checkpoint doc";
            header("location: table final.php");
          }
          else
          {
            // session_start();
          }
        }
        else
        {
          $error='alert-danger';
        }
      }
    }


    //     if(!$auth->login($user))
    //     {
    //       $error='alert-danger';
    //       if(!isset($_SESSION["admID"])|| !isset($_SESSION["docID"]))
    //       {
            
    //         session_start();
    //       }
    //     }
    //     else
    //     {          
    //       $error="form-control rounded-left";
    //       // if(!isset($_SESSION["adm_id"])|| !isset($_SESSION["doc_id"]))
    //       // {
    //       //   session_start();
    //       // }
    //       if($_SESSION["admID"]==1)
    //       {
    //         echo "checkpoint";
    //         header("location ../Admin/index.php");
    //       }

    //       echo "Logged in success";
    //     }
    //   }
    //   else
    //   {

    //   }
    // }
?>

<!doctype html>
<html lang="en">
  <head>
  	<title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="../assets/css/style.css">
	

	<link rel="stylesheet" href="../assets/css/maicons.css">

	<link rel="stylesheet" href="../assets/css/bootstrap.css">
  
	<link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">
  
	<link rel="stylesheet" href="../assets/vendor/animate/animate.css">
  
	<link rel="stylesheet" href="../assets/css/theme.css">

	</head>
	<body>


	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<!-- <div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Login</h2>
				</div> -->
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<div class="icon d-flex align-items-center justify-content-center">
		      		<span class="fa fa-user-o"></span>
		      	</div>
		      	<h3 class="text-center mb-4">Have an account?</h3>
						<form id ="formAuthentication" action="#" class="login-form" method="POST">
		      		<div class="form-group">
		      			<input type="text" class="<?php
                echo $error;
                ?>" placeholder="Username" name="username" required>
		      		</div>
	            <div class="form-group d-flex">
	              <input type="password" class="<?php
                echo $error;
                ?>" placeholder="Password" name="password" required>
	            </div>
	            <div class="form-group d-md-flex">
	            	<div class="w-50">
	            		<label class="checkbox-wrap checkbox-primary">Remember Me
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
									</label>
								</div>

	            </div>
	            <div class="form-group">
	            	<button type="submit" class="btn btn-primary rounded submit p-3 px-5">Get Started</button>
	            </div>
	          </form>
	        </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>
