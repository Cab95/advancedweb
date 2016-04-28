<!DOCTYPE HTML>
<html>
<head>
<title><?php echo $title;?></title>
<link href="<?php echo base_url()."css/style.css";?>" rel="stylesheet" type="text/css">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>
<body>

<?php
/*Table for displaying data*/
 echo "<ul>";
foreach($characters as $character)
{
 echo '<table class="centered-table" border="1">';
        echo '<tr><th>character name</th><th>media</th></tr>';
        echo "<tr><td>".$character->charactername."</td><td>".$character->media."</td></tr>";        
        echo "</table>";
}
echo "</ul>";

 ?>
<h1>Add a new favourite character! (Refresh page if new character is not displayed or deleted.)</h1>
<!--new character form-->
<form action="<?php echo site_url('/charactercontroller/addchar');?>" method="post">
<label for="charactername">Character Name:</label>
<input type="text" name="charactername">
<label for="media">Media:</label>
<textarea name="media" cols="30" rows="1"></textarea>
<input type="submit" name="Add character" value="Add character">
</form>

</body>
</html>
