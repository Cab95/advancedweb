<!DOCTYPE HTML>
<html>
<head>
<title><?php echo $title;?></title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>
<body>
    <div class="maincontent">
<!--new character form-->
<form action="<?php echo site_url('/charactercontroller/allcharacters');?>" method="post">
<label for="charactername">Character Name:</label>
<input type="text" name="charactername">
<label for="media">Media:</label>
<textarea name="media" cols="30" rows="1"></textarea>
<input type="submit" name="Add character" value="Add character">
</form>
</div>
</body>
</html>