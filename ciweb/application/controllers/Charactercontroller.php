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
/*Delete character function*/
public function deletecharacterform(){

		$this->load->helper('form');
		$this->load->model("charactermodel"); 
		$data['character']=$this->charactermodel->getcharacters();
		$data['title']="Remove Characters";
		$this->load->view("header",$data); 
		$this->load->view("deletecharacter",$data);
		
	}
	
	public function delete(){
		$characters=$this->input->post('characters');
		$this->load->model("charactermodel");
		foreach($characters as $characterID)
		{
			$this->charactermodel->deletecharacter($characterID);
		}
		  redirect('/charactercontroller/allcharacters', 'refresh');
		 
	}


/* function for updating character*/
function show_character_id() {
 $this->load->model('charactermodel');
$this->load->view("header"); 
$id = $this->uri->segment(3);
$data['characters'] = $this->charactermodel->show_characters();
$data['single_character'] = $this->charactermodel->show_character_id($id);
$this->load->view('updatecharacter', $data);
}
function update_character_id1() {
 $this->load->model('charactermodel');
$id= $this->input->post('did');
$data = array(
'charactername' => $this->input->post('dname'),
'media' => $this->input->post('demedia')

);
$this->charactermodel->update_character_id1($id,$data);
$this->show_character_id();

}




} /*closing controller*/
?>