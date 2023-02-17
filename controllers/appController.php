<?php
require_once '../../Model/appointment.php';
require_once 'DBController.php';
    class  appController{
        protected $db;

        public function addAppointment(Appointment $appointment){
            $this->db= new DBController;
            if($this->db->openConnection())
            {
                $query="insert into appointment values ('$appointment->date', '$appointment->time', '$appointment->name', '$appointment->email')";
                return $this->db->insert($query);
            }
            else{
                echo "Error in database";
                return false;
            }
        }
        public function viewAppointment(Appointment $appointment){
            $this->db=new DBController;
            if($this->db->openConnection()){
                $result=$this->db->select_appointment();
            }
            
            return $result;
        }
        public function delete_appointment($app_name){
            $this->db=new DBController;
            if($this->db->openConnection()){
                $result=$this->db->delete_appointment($app_name);
            }
            
            return $result;
        }
        public function fetch_single($app_name){

            $this->db=new DBController;
            if($this->db->openConnection()){
                $result=$this->db->fetch_single($app_name);
            }
            
            return $result;
        }
        public function update($data){
            $this->db=new DBController;
            if($this->db->openConnection()){
                $result=$this->db->update($data);
            }
            
            return $result;
        }
    }

?>