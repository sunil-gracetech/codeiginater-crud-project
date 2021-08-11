<?php
class Home extends CI_Controller{

    public function Index(){

        $books=array("php","java","asp");
        $data["books"]=$books;
       // $this->load->model("Employee");
        $data["customer"]=$this->em->GetAllCustomer();
        $this->load->view("home/index",$data);
    }

    public function CreateCustomer(){
        $this->load->view("home/create");
    }

    public function Create(){

        $this->form_validation->set_rules('name', 'customer name', 'required|min_length[3]',array("required"=>"customer name must be filled !"));
        $this->form_validation->set_rules('email', 'customer email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'customer password', 'required');
        $this->form_validation->set_rules('address', 'customer address', 'required');

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view("home/create");    
        }
        else{
        $data["name"]=$this->input->post("name");
        $data["email"]=$this->input->post("email");
        $data["password"]=$this->input->post("password");
        $data["address"]=$this->input->post("address");
        $this->em->CreateCustomer($data);
        $data["customer"]=$this->em->GetAllCustomer();
        $this->load->view("home/index",$data);
        }
    }

    public function DeleteCustomer(){    
      $id=$this->input->get("id");
      $this->em->DelCustomer($id);
      $data["customer"]=$this->em->GetAllCustomer();
      $this->load->view("home/index",$data);
    }

    public function getcustomerbyid(){    
       $id=$this->input->post("id");
       $customer=$this->em->FecthCustomer($id);
      echo json_encode($customer);
      }

      public function updatecustomer(){
        $this->form_validation->set_rules('name', 'customer name', 'required|min_length[3]',array("required"=>"customer name must be filled !"));
        $this->form_validation->set_rules('email', 'customer email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'customer password', 'required');
        $this->form_validation->set_rules('address', 'customer address', 'required');

        if ($this->form_validation->run() == FALSE)
        {
            echo "form is invalid ";    
        }
        else{
        $id=$this->input->post("id");
        $data["name"]=$this->input->post("name");
        $data["email"]=$this->input->post("email");
        $data["password"]=$this->input->post("password");
        $data["address"]=$this->input->post("address");
        $this->em->UpdateCustomer($id,$data);
        echo json_encode(array("message"=>"record updated"));
        }
      }
    public function About(){
        $this->load->view("home/about");
      
    }
}



?>