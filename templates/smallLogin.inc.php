<form action="<?php echo($directoryPath); ?>/membership/login.php" name="login"  method="post">
				
  <div class='floatLeft'>
    <label for="username">Username</label>
	  <input class='text' type="text" name="username" />
	
    <label for="password">Password</label>
	  <input class='text' type="password" name="password" />
  </div>
 
  <div class='floatRight'> 
    <input type="submit" class="button" name="submit" value="Go" /> 
  </div>

  <div class='registerText'>
    <p>Not yet a member? <a href='<?php echo($directoryPath); ?>/membership/register.php'>Register Here</a></p>
  </div>
 
</form>
