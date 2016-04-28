<?php
class Charactercontroller extends CI_Controller
{
/* Displays all data in the character table*/
 public function allcharacters()
 {
    $data['title']="Characters";
$this->load->view("header", $data);
 $this->load->model("charactermodel");
$data['characters']=$this->charactermodel->getcharacters();
$this->load->view("allcharacters",$data);


 }
/*Add new character*/
 public function addcharacterinput()
{
  $data['title']="Add New Character Form";
$this->load->view("header", $data);
$this->load->view("allcharacters",$data);
}
public function addchar()
{
$charactername=$this->input->post('charactername');
$media=$this->input->post('media');
$this->load->model("charactermodel");
if($this->charactermodel->addcharacter($charactername, $media)){
$data['msg']="New favourite character added!";
}else{
$data['msg']="Error";
}

 redirect('/charactercontroller/allcharacters', 'refresh');
}
} /*closing controller*/
?>