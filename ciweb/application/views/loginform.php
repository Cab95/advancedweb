<!DOCTYPE HTML>
<html>
 <head>
   <title>Log In</title>
 </head>
 <body>
   <h1>Welcome to Favourite Characters! Log in below</h1>
   <!-- log in form -->
   <?php echo validation_errors(); ?>
   <?php echo form_open('verifycontroller'); ?>
     <label for="username">Username:</label>
     <input type="text" size="20" id="username" name="username"/>
     <br/>
     <label for="password">Password:</label>
     <input type="password" size="20" id="password" name="password"/>
     <br/>
     <input type="submit" value="Login"/>
   </form>
 </body>
</html>