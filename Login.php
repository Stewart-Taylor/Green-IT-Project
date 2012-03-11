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
				
				
				<?php
					if(isset($_SESSION['user']))
	{
			
		header("location:/2011-ac32004/staylor/");
	}
	
	?>
				
							<div id="loginBox">		
								<form name="login" method="post" action="Functions/loginProcess.php" >
							
									<div id="loginbox_item" >
										User 		</br>		<select name="user">
									<option >  11ac3other23</option> 
									<option >  11ac3extra23</option> 
									<option >  11ac3user23</option> 
									</select>
										
									</div>
									
									<div id="loginbox_item" >
										Password   <input type="password" name="password"  value="333bbb" />
									</div>
							
										<?php 
										if(isset($_GET['loginerror']))
										{
										echo ' <div id="loginbox_item">		';
											echo "Invalid Credentials!";
											echo ' </div>';
										}
										?>
							

									<div id="loginbox_button">
										<input type="submit"    class="btn1" value="Login" />
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









