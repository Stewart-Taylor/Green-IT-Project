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
	<h2>Create Company</h2></br>

	<form name="register" method="post" action="Functions/registerCompany.php" >
		
		
		
		<div id="signUpItem" >
			Company Name: <input type="text" name="name" />
		</div>
		
		<div id="signUpItem" >
			Company Description:</br> <textarea type="text" name="description"  cols= "25" rows="5"> </textarea>
		</div>
		
		<div id="signUpItem" >
			Website: <input type="text" name="website" />
		</div>
		
		
		<div id="signUpItem" >
			Phone Number: <input type="text" name="phone" />
		</div>
		
		<div id="signUpItem" >
			Company Logo: <input type="text" name="logo" />
		</div>
		
		

		
		
		<?php include "Parts/AddressBox.php" ?>
		
		<?php
		
			if(isset($_GET['error']))
			{
				$error = $_GET['error'] ;
				
				if($error == 1)
				{
				echo "Error Creating New Company";
				}
			}
			
			
			if(isset($_GET['complete']))
			{
				$complete = $_GET['complete'] ;
				
				if($complete == 1)
				{
				echo "<h4> Company Created </h4>";
				}
			}
		
		
		
		
		?>
		
		
		<div id="signUpItem" >
			<input type="submit" class="btn1"  value="Register" />
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









