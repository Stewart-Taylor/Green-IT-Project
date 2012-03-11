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
				<h2>Create new Job</h2></br>

				<form name="register" method="post" action="Functions/createJob.php" >
					
				
					
					<div id="signUpItem" >
						Job Title: <input type="text" name="title" /> 
					</div>
					

					
					<div id="signUpItem" >
						Job Description: 
						<textarea  name="description"  cols="30" rows="5"></textarea>
					</div>
					
					<div id="signUpItem" >
						Job Responsibilities: 
						<textarea  name="responsibilities"  cols="30" rows="5"></textarea>
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
						<input type="submit" class="btn1"  value="Submit" />
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









