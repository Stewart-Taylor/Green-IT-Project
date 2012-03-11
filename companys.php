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
	
	
	
	
		<div id="companysBox">
	<h2>Green IT Companys</h2>
		
		
		
		
		
		<?php
		
		
			include "Functions/dbConnection.php";
	
	
	$sql="SELECT * FROM staff_companyView";
	$result=mysql_query($sql);

	
	
	
	
	
	
		while($row = mysql_fetch_assoc($result))
   {
	
	$name = $row['Company_Name'] ;
	
	

	
	
	
		echo '	<div id="jobBox"> ' ;
		echo ' <a href="company.php?company=' .  $name  . ' "  > ' ;
		echo '	<div id="jobItems"> ' ;
		echo '	<h2> ' . $name . '</h2> ' ;
		echo '<h3>  ' .$row['Website']    . ' </h3> ' ;
		echo '<h3>  ' .$row['City']    . ' </h3> ' ;
		echo  '</br>';
		echo  '</div> ' ;
		echo  '<img class="cmpLogoSmall" src="' . $row['Company_Logo']    .'" alt="Logo"/> ' ;
		echo  '</a>' ;
		echo '</div>' ;
	
	
	
	
	
	

	}
	
	
	
	
	mysql_close();
		
		
		?>
		
		
	
		
		
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









