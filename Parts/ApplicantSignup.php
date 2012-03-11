<div id="signUpBox" >	
	<h2>Applicant Sign Up</h2></br>

	<form name="register" method="post" action="Functions/registerApplicant.php" >
		
		<div id="signUpItem" >
			Email: <input type="text" name="email" /> 
		</div>
		
		<div id="signUpItem" >
			Password: <input type="text" name="password" />
		</div>
		
		<div id="signUpItem" >
			Confirm Password: <input type="text" name="password2" />
		</div>
		
		<div id="signUpItem" >
			First Name: <input type="text" name="firstname" />
		</div>
		
		<div id="signUpItem" >
			Surname: <input type="text" name="surname" />
		</div>
		
		<div id="signUpItem" >
			<?php include "Parts/dateofbirth.php" ?>
		</div>
		
		<div id="signUpItem" >
			<select name="gender">
				<option value="male">Male</option>
				<option value="female">Female</option>
			</select>
		</div>
		
		
		
		
		<?php
		
			if(isset($_GET['error']))
	{
	
	
	
	$error = $_GET['error'] ;
	
	if($error == 1)
	{
	echo "Error : passwords don't match";
	}
	
	
	
	}
		
		
		
		
		?>
		
		
		<div id="signUpItem" >
			<input type="submit" class="btn1"  value="Register" />
		</div>
		
	</form>
</div>

	