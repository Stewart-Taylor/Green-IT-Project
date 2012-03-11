<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta charset="utf-8" />
	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<title> </title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link rel="stylesheet" href="style.css" type="text/css" media="screen, projection" />
</head>



<body>



<div id="wrapper">


<?php include "Parts/Header.php" ?>



	

	<div id="content">

			
	<div id="middle_content">
	
	
	
	
		
	
			<div id="signUpBox" >
			
			<h2> Add Personnel</h2></br>
			
			
			<form name="input" action="Functions/registerPersonnel.php" method="post">
				

				<div id="signUpItem" >
				First Name: <input type="text" name="firstName"  value=""/>
				</div>
				
				<div id="signUpItem" >
				Surname: <input type="text" name="surname"  value=""/>
				</div>
				
				
				
								
				<div id="signUpItem" >
				Role: <input type="text" name="role"  />
				</div>
				
				
				<div id="signUpItem" >
				Phone Number: <input type="text" name="phoneNumber"  value=""/>
				</div>
				
												<div id="signUpItem" >
				Email: <input type="text" name="email"  value=""/>
				</div>
				
																<div id="signUpItem" >
				Image Link: <input type="text" name="imageLink"  value=""/>
				</div>
				
				
	
						<?php
		
			if(isset($_GET['error']))
			{
				$error = $_GET['error'] ;
				
				if($error == 1)
				{
				echo "Error Adding Personnel";
				}
			}
			
			
			if(isset($_GET['complete']))
			{
				$complete = $_GET['complete'] ;
				
				if($complete == 1)
				{
				echo "<h4> Personnel Added </h4>";
				}
			}
		
		
		
		
		?>
				
				

				
				<div id="signUpItem" >
				<input type="submit" class="btn1"   value="Add Personnel" />
				</div>
				
				

			</form>
			
			
			
			</div>
        
 
    
        
    </div><!--end of middle content-->





	
	<div style="clear: both;">
	</div><!-- #content-->



	<footer id="footer">
		<p>Created By Stewart Taylor</p>
	</footer><!-- #footer -->



</div><!-- #wrapper -->



</body>

</html>









