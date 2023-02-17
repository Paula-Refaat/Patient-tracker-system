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

<html>

<head>
    <title>patient repoort</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/theme.css">


    <style>
        h3 {
            font-family: Calibri;
            font-size: 25pt;
            font-style: normal;
            font-weight: bold;
            color: #00D9A5;
            text-align: center;
            text-decoration: underline
        }

        table {
            font-family: Calibri;
            color: white;
            font-size: 11pt;
            font-style: normal;
            font-weight: bold;
            /* text-align:; */
            background-color: 00D9A5;
            border-collapse: collapse;
            width: 38%;
            height: 70%;

        }

        table.inner {
            border: 0px
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
                <li class="nav-item">
                  <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="table final.php">Manage patientes</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="medical report.php">Medical Reports</a>
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










    <h2 style="text-align:center ; color: #000; font-weight: 600;
padding-top: 10px;
padding-bottom: 10px;">Medical Report</h2>
    <table align="center" cellpadding="10">
        <!----- First Name ---------------------------------------------------------->

        <tr>
            <td >FIRST NAME</td>
            <td><input type="text" name="First_Name" maxlength="30" />
                (max 30 characters a-z and A-Z)
            </td>
        </tr>

        <!----- Last Name ---------------------------------------------------------->
        <tr>
            <td>LAST NAME</td>
            <td><input type="text" name="Last_Name" maxlength="30" />
                (max 30 characters a-z and A-Z)
            </td>
        </tr>

        <!----- Date Of Birth -------------------------------------------------------->
        <tr>
            <td>DATE OF BIRTH</td>

            <td>
                <select name="Birthday_day" id="Birthday_Day">
                    <option value="-1">Day:</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>

                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>

                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>

                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>

                    <option value="31">31</option>
                </select>

                <select id="Birthday_Month" name="Birthday_Month">
                    <option value="-1">Month:</option>
                    <option value="January">Jan</option>
                    <option value="February">Feb</option>
                    <option value="March">Mar</option>
                    <option value="April">Apr</option>
                    <option value="May">May</option>
                    <option value="June">Jun</option>
                    <option value="July">Jul</option>
                    <option value="August">Aug</option>
                    <option value="September">Sep</option>
                    <option value="October">Oct</option>
                    <option value="November">Nov</option>
                    <option value="December">Dec</option>
                </select>

                <select name="Birthday_Year" id="Birthday_Year">

                    <option value="-1">Year:</option>
                    <option value="2012">2012</option>
                    <option value="2011">2011</option>
                    <option value="2010">2010</option>
                    <option value="2009">2009</option>
                    <option value="2008">2008</option>
                    <option value="2007">2007</option>
                    <option value="2006">2006</option>
                    <option value="2005">2005</option>
                    <option value="2004">2004</option>
                    <option value="2003">2003</option>
                    <option value="2002">2002</option>
                    <option value="2001">2001</option>
                    <option value="2000">2000</option>

                    <option value="1999">1999</option>
                    <option value="1998">1998</option>
                    <option value="1997">1997</option>
                    <option value="1996">1996</option>
                    <option value="1995">1995</option>
                    <option value="1994">1994</option>
                    <option value="1993">1993</option>
                    <option value="1992">1992</option>
                    <option value="1991">1991</option>
                    <option value="1990">1990</option>

                    <option value="1989">1989</option>
                    <option value="1988">1988</option>
                    <option value="1987">1987</option>
                    <option value="1986">1986</option>
                    <option value="1985">1985</option>
                    <option value="1984">1984</option>
                    <option value="1983">1983</option>
                    <option value="1982">1982</option>
                    <option value="1981">1981</option>
                    <option value="1980">1980</option>
                </select>
            </td>
        </tr>

        <!----- Email Id ---------------------------------------------------------->
        <tr>
            <td>weight</td>
            <td><input type="text" name="Email_Id" maxlength="100" /></td>
        </tr>

        <tr>
            <td>height</td>
            <td><input type="text" name="Email_Id" maxlength="100" /></td>
        </tr>

        <!----- Mobile Number ---------------------------------------------------------->
        <tr>
            <td>MOBILE NUMBER</td>
            <td>
                <input type="text" name="Mobile_Number" maxlength="11" />
                (11 digit number)
            </td>
        </tr>

        <!----- Gender ----------------------------------------------------------->
        <tr>
            <td>GENDER</td>
            <td>
                Male <input type="radio" name="Gender" value="Male" />
                Female <input type="radio" name="Gender" value="Female" />
            </td>
        </tr>

        <!----- Address ---------------------------------------------------------->
        <tr>
            <td>ADDRESS <br /><br /><br /></td>
            <td><textarea name="Address" rows="4" cols="30"></textarea></td>
        </tr>

        <!----- City ---------------------------------------------------------->
        <tr>
            <td>medical condition</td>
            <td><input type="text" name="City" maxlength="30" />
                (max 30 characters a-z and A-Z)
            </td>
        </tr>

        <tr>
            <td>blood type
            </td>
            <td><input type="text" name="City" maxlength="30" />

            </td>
        </tr>

        <!----- Pin Code ---------------------------------------------------------->
        <tr>
            <td>admittance_date</td>
            <td><input type="date" name="Pin_Code" maxlength="6" />

            </td>
        </tr>

        <!----- State ---------------------------------------------------------->
        <tr>
            <td>follower doctor
            </td>
            <td><input type="text" name="State" maxlength="30" />
                (max 30 characters a-z and A-Z)
            </td>
        </tr>

        <!----- Country ---------------------------------------------------------->
        <tr>
            <td>COUNTRY</td>
            <td><input type="text" name="Country"   /></td>
        </tr>

        <!----- Hobbies ---------------------------------------------------------->

        <tr>
            <td>General Health <br /><br /><br /></td>

            <td>
                cardiology
                <input type="checkbox" name="Hobby_Drawing" value="Drawing" />
                Dental
                <input type="checkbox" name="Hobby_Singing" value="Singing" />
                Neurology
                <input type="checkbox" name="Hobby_Dancing" value="Dancing" />
                ophthalmology
                <input type="checkbox" name="Hobby_Dancing" value="Dancing" />
                Orthopedics
                <input type="checkbox" name="Hobby_Cooking" value="Cooking" />
                <br />
                Others
                <input type="checkbox" name="Hobby_Other" value="Other">
                <input type="text" name="Other_Hobby" maxlength="30" />
            </td>
        </tr>


        <tr>
            <td> select image
            </td>
            <td>
                <input type="file" id="img" name="img" accept="image/*">
            </td>
        </tr>


        <!----- Submit and Reset ------------------------------------------------->
        <tr>
            <td colspan="2" align="center">
                <a href="medical report.php"> <button type="reset" class="btn btn-primary mt-3 wow zoomIn">Reset</button></a>
                <input style="background-color:#00 ;" type="submit" name="update" class="btn btn-success" value="Save As txt file">
                <input onclick="window.print()" style="background-color:#00 ;" type="submit" name="update" class="btn btn-success" value="Save As PDF">
            </td>
        </tr>
    </table>

    </form>

</body>

</html>