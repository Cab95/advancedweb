<!DOCTYPE HTML>
<html>
<head>
	<title>Remove Characters</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>
<body>
<div class="maincontent">
	<div id="deletecharForm">
<?php
echo form_open('Charactercontroller/delete');
echo"<h1>Choose characters to delete</h1>";
//form,checkbox,button for deleting characters
foreach($character as $characters)
{
	
	echo "<p>";
	echo form_label($characters->charactername, 'character'.$characters->characterID);
	$data = array('name' => 'characters[]', 'id'=>'character'.$characters->characterID, 'value' => $characters->characterID);
	echo form_checkbox($data);
	echo "</p>";
}
echo form_submit("delete_btn","Remove Character");
echo form_close();

?>
</div>
	</div>
</body>
</html>