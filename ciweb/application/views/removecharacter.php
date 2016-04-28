<!DOCTYPE HTML>
<html>
<head>
	<title>Remove Character</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>
<body>
<div class="maincontent">
<?php
echo form_open('Character/delete');

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
</body>
</html>