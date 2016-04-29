<!DOCTYPE HTML>
<html>
<head>
<title><?php echo $title;?></title>

<link href="<?php echo base_url()."assets/style.css";?>" rel="stylesheet" type="text/css">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

</head>
<body>
    <div id="fullHeader"> <!-- header and nav bar -->
    <div id="websiteHeader"> <!-- header only-->
<h1>Favourite Characters</h1>
 </div>
 


<p></p>
<!-- Nav bar links that are displayed on every page-->
<nav class="navLinks">
 <ul>


  <li><a href="<?php echo base_url('index.php/charactercontroller/deletecharacterform'); ?>">Remove Character</a></li>
  <li><a href="<?php echo base_url('index.php/charactercontroller/show_character_id'); ?>">Update Existing Character</a></li>
   <li><a href="<?php echo base_url('index.php/charactercontroller/allcharacters'); ?>">Favourite Characters</a></li>
   <li><a href="<?php echo base_url('index.php/loginhomecontroller'); ?>">Home</a></li>

 </ul>
 </nav>
</div>
 
 </body>
 </html>