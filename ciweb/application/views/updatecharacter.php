<html>
<head>
<title>Update Character</title>

</head>
<body>


<h1>Choose a character to update</h1>
<div id="updatecharForm">

<!-- Getting Names Of All Chars From Database -->
<ol>
<?php foreach ($characters as $character): ?>
<li><a href="<?php echo base_url() . "index.php/charactercontroller/show_character_id/" . $character->characterID; ?>"><?php echo $character->charactername; ?></a></li>
<?php endforeach; ?>
</ol>


<!-- Fetching All Details of Selected Student From Database And Showing In a Form -->
<?php foreach ($single_character as $character): ?>
<p>Edit the character in the fields below and click update to save</p>
<form method="post" action="<?php echo base_url() . "index.php/charactercontroller/update_character_id1"?>">
<label id="hide">Id :</label>
<input type="text" id="hide" name="did" value="<?php echo $character->characterID; ?>">
<label>Name :</label>
<input type="text" name="dname" value="<?php echo $character->charactername; ?>">
<label>Media :</label>
<input type="text" name="demedia" value="<?php echo $character->media; ?>">

<input type="submit" id="submit" name="dsubmit" value="Update">
</form>
<?php endforeach; ?>
</div>

</body>
</html>