<?php

class Patient{
    #connection..
    private $server = 'localhost';
    private $username = 'root';
    private $password = '';
    private $db = 'medic';
    private $conn;

    public function __construct(){
        try {
            $this->conn = new mysqli($this->server,$this->username,$this->password,$this->db);
        }
        catch (Exception $e) {
            echo "connection failed" . $e->getMessage();

        }
    }


    public function Add_Patient(){
        if (isset($_POST['submit'])){
            if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['address']) && isset($_POST['weight']) && isset($_POST['height']) && isset($_POST['age']) && isset($_POST['gender']) && isset($_POST['medical_condition']) && isset($_POST['admittance_date'])){
                if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['address']) && !empty($_POST['weight']) && !empty($_POST['height']) && !empty($_POST['age']) && !empty($_POST['gender']) && !empty($_POST['medical_condition']) && !empty($_POST['admittance_date'])){

                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $address = $_POST['address'];
                    $weight = $_POST['weight'];
                    $height = $_POST['height'];
                    $age = $_POST['age'];
                    $gender = $_POST['gender'];
                    $medical_condition = $_POST['medical_condition'];
                    $admittance_date = $_POST['admittance_date'];

                    $query = "INSERT INTO patient VALUES ('','$name','$age','$gender','$admittance_date','$medical_condition','$email','$address','$height','$weight')";
                    if ($sql = $this->conn->query($query)) {   
                        echo "<script>alert('records added successfully');</script>";
                        echo "<script>window.location.href = 'table final.php';</script>";
                    }else{
                        echo "<script>alert('failed');</script>";
                        echo "<script>window.location.href = 'table final.php';</script>";     
                        }
                    }

                else{
                    echo "<script>alert('Empty');</script>";
                    echo "<script>window.location.href = 'table final.php';</script>";
                }
            }
        }
   
    }

    public function search_view(){
        if(isset($_POST['search_'])){
            $valueToSearch = $_POST['valueToSearch'];
            $data = null;
            $query = "SELECT * FROM patient WHERE CONCAT(pat_id,name,address,gender,age,medical_condition) LIKE '%".$valueToSearch."%'";
            if ($sql = $this->conn->query($query)){
                while($row = mysqli_fetch_assoc($sql)){
                    $data[] = $row;
                }
            }
        }
        else
        {
            $data = null;
            $query = "SELECT * FROM patient";
            if ($sql = $this->conn->query($query)){
                while ($row = mysqli_fetch_assoc($sql)){
                    $data[] = $row;
                }
            }
        }
        return $data;
    }

    public function delete_patient($pat_id){
        $query = "DELETE from patient where pat_id = '$pat_id' ";
        if ($sql= $this->conn->query($query)){
            return true;
            header("location : table final.php");
        }
        else
        {
            return false;
        }

    }

    public function fetch_single($pat_id){

        $data = null;

        $query = "SELECT * FROM patient WHERE pat_id = '$pat_id'";
        if ($sql = $this->conn->query($query)) {
            while ($row = $sql->fetch_assoc()) {
                $data = $row;
            }
        }
        return $data;
    }

    public function update($data){

        $query = "UPDATE patient SET name='$data[name]' , address='$data[address]' , gender='$data[gender]' , age='$data[age]' , weight='$data[weight]' , height='$data[height]' , medical_condition ='$data[medical_condition]' , admittance_date ='$data[admittance_date]' WHERE pat_id='$data[pat_id]'";

        if ($sql = $this->conn->query($query)) {
            return true;
        }else{
            return false;
        }
    }




















}

?>