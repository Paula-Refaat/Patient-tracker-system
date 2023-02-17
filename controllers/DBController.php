<?php 
class DBController
{
    public $dbhost="localhost";
    public $dbuser="root";
    public $dbpassword="";
    public $dbname="medic";
    public $connection;

    public function openConnection()
    {
        $this->connection= new mysqli($this->dbhost,$this->dbuser,$this->dbpassword,$this->dbname);
        if($this->connection->connect_error)
        {
            echo "Error in connection: " . $this->connection->connect_error;
            return false;
        }
        else
        {
            return true;
        }
    }
    public function closeConnection()
    {
        if($this->connection)
        {
            $this->connection->close();
        }
        else
        {
            echo "Connection is not opened to be closed";
        }
    }
    public function select($query)
    {
        $result=$this->connection->query($query);
        if(!$result)
        {
            echo "Error" . mysqli_error($this->connection);
            return false;
        }
        else
        {
            return $result->fetch_all(MYSQLI_ASSOC);
        }
    }
    public function insert($query)
    {
        $result2=$this->connection->query($query);
        if(!$result2)
        {
            echo "Error" . mysqli_error($this->connection);
            return false;
        }
        else
        {
            return true;
        }
    }
    public function select_appointment()
    {
        $data = null;
        $query = "select * FROM appointment";
        if ($sql = $this->connection->query($query)){
            while ($row = mysqli_fetch_assoc($sql)){
                $data[] = $row;
            }
        }
        return $data;
    }
    public function delete_appointment($app_name)
    {
        $query="delete from appointment where name = '$app_name'";
        if ($this->connection->query($query)){
            return true;
            header("location : appointments table.php");
        }
        else
        {
            return false;
        }
    }
    public function fetch_single($app_name){

        $data = null;

        $query = "select * FROM appointment WHERE name = '$app_name'";
        if ($sql = $this->connection->query($query)) {
            while ($row = $sql->fetch_assoc()) {
                $data = $row;
            }
        }
        return $data;
    }
    public function update($data){

        $query = "update appointment SET name='$data[name]' , date='$data[date]' , time='$data[time]' , email='$data[email]' WHERE name='$data[name]'";

        if ($this->connection->query($query)) {
            return true;
        }else{
            return false;
        }
    }
}

?>