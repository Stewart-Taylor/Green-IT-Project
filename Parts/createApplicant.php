<?php
if(isset($_SESSION['staff']))
{
		if ( $_SESSION['staff'] != true)
		{
			header("location:/2011-ac32004/staylor ");
		}
	}	
?>





<div id="signUpBox" >	
	<h2>Create Applicant</h2></br>

	<form name="register" method="post" action="Functions/registerApplicant.php" >
		
		
		
		<div id="signUpItem" >
			Email: <input type="text" name="email" />
		</div>
		
		<div id="signUpItem" >
			First Name: <input type="text" name="firstname" />
		</div>
		
		<div id="signUpItem" >
			Surname: <input type="text" name="surname" />
		</div>
		
		<div id="signUpItem" >
		Date Of Birth
			<?php include "Parts/dateofbirth.php" ?>
		</div>
		
		
		<div id="signUpItem" >
		Gender
			<select name="gender">
				<option value="male">Male</option>
				<option value="female">Female</option>
			</select>
		</div>
		
		<div id="signUpItem" >
			Phone Number: <input type="text" name="phoneNumber" />
		</div>
		
		<div id="signUpItem" >
			Image Link: <input type="text" name="imageLink" />
		</div>
		
		<div id="signUpItem" >
			CV Link: <input type="text" name="cvLink" />
		</div>
		
		
		
		<?php include "Parts/AddressBox.php" ?>
		
		<?php
		
			if(isset($_GET['error']))
			{
				$error = $_GET['error'] ;
				
				if($error == 1)
				{
				echo "Error Creating New Applicant";
				}
			}
			
			
			if(isset($_GET['complete']))
			{
				$complete = $_GET['complete'] ;
				
				if($complete == 1)
				{
				echo "<h4> Applicant Created </h4>";
				}
			}
		
		
		
		
		?>
		
		
		<div id="signUpItem" >
			<input type="submit" class="btn1"  value="Register" />
		</div>
		
	</form>
</div>

	