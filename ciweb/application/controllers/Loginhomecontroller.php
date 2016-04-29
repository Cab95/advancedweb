<?php 

class Loginhomecontroller extends CI_Controller {
 
 function __construct()
 {
   parent::__construct();
 }
   

 function index()
 {
    


   
   if($this->session->userdata('logged_in'))
   {
   
  
     $session_data = $this->session->userdata('logged_in');
     $data['username'] = $session_data['username'];
      $data['title']="Home Page";
      $this->load->view("header"); 
     $this->load->view('homeview', $data);
    
   }
   else
   {
     
     redirect('loginhomecontroller', 'refresh');
   }
 }
 
 function logout()
 {
   $this->session->unset_userdata('logged_in');
   session_destroy();
   redirect('logincontroller');
 }
  public function allcharacters()
 {
    $data['title']="Characters";
$this->load->view("header", $data);
 $this->load->model("charactermodel");
$data['characters']=$this->charactermodel->getcharacters();
$this->load->view("allcharacters",$data);


 }

 
 
 
 
 
}
 
?>