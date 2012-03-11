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
		


		<?php 
			if(!isset($_SESSION['user']))
			{
				header("location:/2011-ac32004/staylor/login.php");
			}
		?>
			
		
		
		<?php
		
		
			if(isset($_SESSION['staff']))
			{
				if ( $_SESSION['staff'] == true)
				{
						 include "Parts/staffActions.php" ;
				}
			}
			
			if(isset($_SESSION['applicant']))
			{
				if ( $_SESSION['applicant'] == true)
				{
						 include "Parts/applicantActions.php" ;
				}
			}
			
			if(isset($_SESSION['company']))
			{
				if ( $_SESSION['company'] == true)
				{
						 include "Parts/companyActions.php" ;
				}
			}
		
		
		
		
		?>
		
		
		
		
		
		
		
		
			
			<div style="clear: both;">
			</div><!-- #content-->

			<footer id="footer">
				<p>Created By Stewart Taylor</p>
			</footer><!-- #footer -->
	</div><!-- #wrapper -->
</body>
</html>









