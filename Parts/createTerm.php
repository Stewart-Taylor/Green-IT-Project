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
	<h2>Create Term</h2></br>

	<form name="register" method="post" action="Functions/registerTerm.php" >
		
		
		
		<div id="signUpItem" >
			Term: <input type="text" name="term" />
		</div>
		
		<div id="signUpItem" >
		Definition:
		</div>
		
		
		<div id="signUpItem" >
			 <textarea name="definition" cols="30" rows="5"></textarea>
		</div>
		
		
		
		<?php
		
			if(isset($_GET['error']))
			{
				$error = $_GET['error'] ;
				
				if($error == 1)
				{
				echo "Error Creating New Term";
				}
			}
			
			
			if(isset($_GET['complete']))
			{
				$complete = $_GET['complete'] ;
				
				if($complete == 1)
				{
				echo "<h4> Term Created </h4>";
				}
			}
		
		
		
		
		?>
		
		
		<div id="signUpItem" >
			<input type="submit" class="btn1"  value="Register" />
		</div>
		
	</form>
</div>

	