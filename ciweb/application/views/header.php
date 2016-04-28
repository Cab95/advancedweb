<!DOCTYPE HTML>
<html>
<head>
<title><?php echo $title;?></title>

<link href="<?php echo base_url()."assets/style.css";?>" rel="stylesheet" type="text/css">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

</head>
<body>
    
    <div id="websiteHeader">
<h1>Favourite Characters</h1>
</div>
 
</div>

<p></p>
<nav>
 <ul>
 <li><a href="<?php echo base_url('index.php/homecontroller/home'); ?>">Home</a></li>
 <li><a href="<?php echo base_url('index.php/charactercontroller/allcharacters'); ?>">Favourite Characters</a></li>
  <li><a href="<?php echo base_url('index.php/charactercontroller/deletecharacterform'); ?>">Remove Character</a></li>
  <li><a href="<?php echo base_url('index.php/charactercontroller/show_character_id'); ?>">Update Existing Character</a></li>

 </ul>
 </nav>

 
 
 </body>
 </html>