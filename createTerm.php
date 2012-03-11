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
			<input type="submit" class="btn1"  value="Add" />
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









