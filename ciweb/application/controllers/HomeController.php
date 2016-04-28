<?php

class HomeController extends CI_Controller {
public function home()
{
$data['title']="Home page";
$data['msg']="Favourite Characters";
$this->load->view("header", $data);
$this->load->view("home", $data);
}
}
?>