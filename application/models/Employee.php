<?php

class Employee extends CI_Model{
    
    function __construct(){
      //  $this->load->database();
    }

    public function validate_login($email,$pass){
      $query = $this->db->where(array("email"=>$email,"password"=>$pass))
      ->get('customer');
      //echo "<pre>";
      if($query->result_id->num_rows>=1)
      {
        return true;
      }
      else
      {
      return false;
      }
    }
   public function GetAllCustomer(){
      //  $result=$this->db->query("select* from customer");
       
      //$c=$this->db->count_all("customer");
        //echo "Total Employee ".$c;
       // $this->db->select("id,name,email,address");
        $result=$this->db->get("customer");
        //$sql = $this->db->get_compiled_select('customer');
        //echo $sql;
        return $result->result_array();
    }

    public function DelCustomer($id){
      $this->db->delete('customer', array('id' => $id));
      return true;
    }
    public function CreateCustomer($data){
      $this->db->insert("customer",$data);
    }

    public  function FecthCustomer($id)
    {
      # code...
      /*
      $this->db->where('id', $id);
      $result=$this->db->get("customer");
      return $result;
      */
      $query = $this->db->where("id",$id)
                ->get('customer');
                return $query->result_array();
    }

    public function UpdateCustomer($id,$data){
        $this->db->where('id', $id);
       $this->db->update('customer', $data);
    }
}

?>