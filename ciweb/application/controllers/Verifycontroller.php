<?php

class Verifycontroller extends CI_Controller {
 
 function __construct()
 {
   parent::__construct();
   $this->load->model('usermodel','',TRUE);
 }
 
 function index()
 {
   //This method will have the credentials validation
   $this->load->library('form_validation');
 
   $this->form_validation->set_rules('username', 'Username', 'trim|required');
   $this->form_validation->set_rules('password', 'Password', 'trim|required|callback_check_database');
 
   if($this->form_validation->run() == FALSE)
   {
     //log in failed
     $this->load->view('loginform');
   }
   else
   {
     //sends user to home page
     
     redirect('loginhomecontroller', 'refresh');
     
   }
 
 }
 //validation 
 function check_database($password)
 {
   
   $username = $this->input->post('username');
 
   //query the database
   $result = $this->usermodel->login($username, $password);
 
   if($result)
   {
     $sess_array = array();
     foreach($result as $row)
     {
       $sess_array = array(
         'id' => $row->id,
         'username' => $row->username
       );
       $this->session->set_userdata('logged_in', $sess_array);
     }
     return TRUE;
   }
   else
   {
     $this->form_validation->set_message('check_database', 'Invalid username or password');
     return false;
   }
 }
}
?>