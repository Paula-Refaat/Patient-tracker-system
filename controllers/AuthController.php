<?php
require_once '../../Model/user.php';
require_once 'DBController.php';
class AuthController
{
    protected $db;

    public function login(User $user)
    {
    $this->db= new DBController;
    if($this->db->openConnection())
    {
        $query="select * from admin where username='$user->username' and password='$user->password'";
        $result=$this->db->select($query);
        if($result===false){
            echo "Error in Query";
            return false;
        }
        else
        {
            if(count($result)==0)
            {
                $query="select * from doctor where username='$user->username' and password='$user->password'";
                $result=$this->db->select($query);
                if($result===false){
                    echo "Error in Query";
                    return false;
                }
                else
                {
                    if(count($result)==0)
                    {
                        // session_start();
                        // echo "You entered wrong username and password";
                        return false;
                    }
                    else
                    {
                        session_start();
                        // echo "Logged in successfully Doctor " . $user->username;
                        $_SESSION["docID"]=$result[0]["doc_id"];
                        $_SESSION["phone"]=$result[0]["phone"];
                        $_SESSION["clinic"]=$result[0]["clinic"];
                        $_SESSION["fname"]=$result[0]["fname"];
                        $_SESSION["lname"]=$result[0]["lname"];
                        $_SESSION["username"]=$result[0]["username"];
                        $_SESSION["password"]=$result[0]["password"];
                        return true;  
                    }
                }
            }
            else
            {
                session_start();
                $_SESSION["admID"]=$result[0]["adm_id"];
                $_SESSION["admname"]=$result[0]["name"];
                $_SESSION["username"]=$result[0]["username"];
                $_SESSION["password"]=$result[0]["password"];
                return true;
            }
        }

    }
    else
    {
        echo "Error in database connection";
        return false;
    }
    }
}
?>