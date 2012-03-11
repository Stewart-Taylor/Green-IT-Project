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
				
				
				//check for login
					if(!isset($_SESSION['user']))
					{
						header("location:/2011-ac32004/staylor/login.php");
					}
					
					
					if(!isset($_GET['cr']))
					{
						header("location:/2011-ac32004/staylor");
					}
					
					$type = $_GET['cr'];
					
					
					if($type == "applicant")
					{
						include "Parts/CreateApplicant.php" ;
					
					}
					else if($type == "term")
					{
						include "Parts/CreateTerm.php" ;
					
					}
					
					
					
				
				
				
				//get param
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				?>
				
				
				
				
				
				
				
				
				
				
				

			</div><!--end of middle content-->

			<div style="clear: both;">
			</div><!-- #content-->

			<footer id="footer">
				<p>Created By Stewart Taylor</p>
			</footer><!-- #footer -->

	</div><!-- #wrapper -->

</body>
</html>









