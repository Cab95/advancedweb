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
  /*function updatecharacter($charactername, $media)
 {
 $data = array(
               'charactername' => $charactername,
               'media' => $media
               
            );
    
	 $this->db->where('characterid', $characterid);
	 $result=$this->db->update('characters');
	 return $result;
    }
 */
  /*adding character*/
 function addcharacter($charactername,$media)
{
 $newcharacter=array("charactername"=>$charactername,"media"=>$media);
 return $this->db->insert('characters', $newcharacter);
 }
 /*deleting character*/
   function deletecharacter($characterid)
    {
	 $this->db->where('characterid', $characterid);
	 $result=$this->db->delete('characters');
	 return $result;
    }

 //selects all characters
function show_characters(){
$query = $this->db->get('characters');
$query_result = $query->result();
return $query_result;
}
// used for selecting character to update
function show_character_id($data){
$this->db->select('*');
$this->db->from('characters');
$this->db->where('characterID', $data);
$query = $this->db->get();
$result = $query->result();
return $result;
}
// update character
function update_character_id1($id,$data){
$this->db->where('characterID', $id);
$this->db->update('characters', $data);
}
}
 
 
 
 
 
 
 
 
 

?>