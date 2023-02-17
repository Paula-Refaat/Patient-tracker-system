<?php
class Admin{
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

    
    public function Add_Doctor(){
        if (isset($_POST['submit'])){
            if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['username']) && isset($_POST['phone']) && isset($_POST['clinic']) && isset($_POST['password'])){
                if(!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['username']) && !empty($_POST['phone']) && !empty($_POST['clinic']) && !empty($_POST['password'])){

                    $fname = $_POST['fname'];
                    $lname = $_POST['lname'];
                    $username = $_POST['username'];
                    $phone = $_POST['phone'];
                    $clinic = $_POST['clinic'];
                    $password = $_POST['password'];

                    $query = "INSERT INTO doctor VALUES ('','$phone','$clinic','$fname','$lname','$username','$password')";
                    if ($sql = $this->conn->query($query)) {   
                        echo "<script>alert('records added successfully');</script>";
                        echo "<script>window.location.href = 'admin Acess.php';</script>";
                    }else{
                        echo "<script>alert('failed');</script>";
                        echo "<script>window.location.href = 'admin Acess.php';</script>";     
                        }
                    }

                else{
                    echo "<script>alert('Empty');</script>";
                    echo "<script>window.location.href = 'admin Acess.php';</script>";
                }
                
            }
        }
   
    }

    public function search_view(){
        if(isset($_POST['search_'])){
            $valueToSearch = $_POST['valueToSearch'];
            $data = null;
            $query = "SELECT * FROM doctor WHERE CONCAT(doc_id,username,phone,clinic) LIKE '%".$valueToSearch."%'";
            if ($sql = $this->conn->query($query)){
                while($row = mysqli_fetch_assoc($sql)){
                    $data[] = $row;
                }
            }
        }
        else
        {
            $data = null;
            $query = "SELECT * FROM doctor";
            if ($sql = $this->conn->query($query)){
                while ($row = mysqli_fetch_assoc($sql)){
                    $data[] = $row;
                }
            }
        }
        return $data;
    }


    public function delete_doctor($doc_id){
        $query = "DELETE from doctor where doc_id = '$doc_id' ";
        if ($sql= $this->conn->query($query)){
            return true;
            header("location : admin Acess.php");
        }
        else
        {
            return false;
        }

    }

    public function fetch_single($doc_id){

        $data = null;

        $query = "SELECT * FROM doctor WHERE doc_id = '$doc_id'";
        if ($sql = $this->conn->query($query)) {
            while($row = $sql->fetch_assoc()){
                $data = $row;
            }
        }
        return $data;
    }

    public function update($data){

        $query = "UPDATE doctor SET fname='$data[fname]' , lname='$data[lname]' , username='$data[username]' , phone='$data[phone]' , clinic='$data[clinic]' WHERE doc_id='$data[doc_id]'";

        if ($sql = $this->conn->query($query)) {
            return true;
        }else{
            return false;
        }
    }


}
?>