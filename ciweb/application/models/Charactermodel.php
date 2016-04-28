<?php
class Charactermodel extends CI_Model {
 function __construct()
 {
 parent::__construct();
 }
 
 function getcharacters(){
 $query = $this->db->get('characters');
 return $query->result();
 }
 
 function addcharacter($charactername,$media)
{
 $newcharacter=array("charactername"=>$charactername,"media"=>$media);
 return $this->db->insert('characters', $newcharacter);
 }
 
 
 
 
 
 
 
 
 
 
 
 }

?>