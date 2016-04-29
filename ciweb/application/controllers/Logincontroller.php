<?php
 
class Logincontroller extends CI_Controller {
 // controller for log in
 function __construct()
 {
   parent::__construct();
 }
 
 function index()
 {
   $this->load->helper(array('form'));
   $this->load->view('loginform');
 }
 
}
 
?>