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
	
	 
	 
	
	
	<div id="glossaryBox">
	
	
	
	<?php
	
	
	
	if(!isset($_GET['term']))
	{
		header("location:/2011-ac32004/staylor/glossary.php");
	}
	else
	{
	
	
	
	$term = $_GET['term'] ;

	
	
	include "Functions/dbConnection.php";
	
	
	
	
	$term = stripslashes($term);
	$term = mysql_real_escape_string($term);
	
	

	$sql="SELECT * FROM glossary_term where Term = '$term'";
	$result=mysql_query($sql);
	mysql_close();
	
	$count =mysql_num_rows($result);
	
	if( $count == 0 )
	{
	header("location:/2011-ac32004/staylor/glossary.php");
	}
	
	
			while($row = mysql_fetch_assoc($result))
  {
	echo "<h2> " .  $row['Term'] . "</h2>" ;
	echo $row['Definition'];
  
  
  
  
  }
	
	

	

	
	
	
	
	}
	

	

	
	if(isset($_SESSION['staff']))
	{
		echo ' </br></br><a href="Functions/deleteTerm.php?term=' . $term .'"   class="btn1">  Delete </a>';
	
	
	}
	
	
	
	
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









