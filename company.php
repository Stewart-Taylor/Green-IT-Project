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
	
	
	if (!isset($_GET["company"])) 
	{
	 	header("location:/2011-ac32004/staylor/companys.php");
		
		
		
	}
	
	
	include "Functions/dbConnection.php";
	
	
	$name = $_GET["company"];
	
	
	$sql = "SELECT * FROM staff_companyView WHERE Company_Name= '$name' ";
	$result=mysql_query($sql);
	
		$count =mysql_num_rows($result);
	
		if( $count == 0 )
	{
		header("location:/2011-ac32004/staylor/companys.php");
	}
	
	
	while($row = mysql_fetch_assoc($result))
  {
  
		echo ' <div id="companyProfileBox" > ';
		echo '<center>';
		echo " <h2> " .  $row['Company_Name'] . "</h2>" ;
		echo '<img src="' . $row['Company_Logo']    .  '" alt="Logo" class="cmpLogoProfile"> ' ;
		echo '<h3>Phone: ' . $row['Phone_Number'] . '</h3>';
		echo '<h3> ' . $row['Website'] . '</h3>';
		echo '</center>';
		echo ' <div id="profileContent" > ';
		echo "<p> " .  $row['Company_Description'] . "</p>" ;
		echo '</br>';
		echo '<h3> Address </h3>';
		echo "<p> " .  $row['House'] . "</p> " ;
		echo "<p> " .  $row['Street'] . "</p> " ;
		echo "<p> " .  $row['City'] . "</p> " ;
		echo "<p> " .  $row['Postcode'] . "</p> " ;
		echo '</div>' ;
		
		
		
		
		echo '</div>';
  }
	
	
	
	
	mysql_close();
	
	
	?>
	
	</br>
<?php 


echo  ' <a class="btn1" href="viewJobs.php?company=' .  $name .  '">'.  $name . ' Vacancies </a>' ;
echo  ' <a class="btn1" href="editCompany.php?name=' . $name . '"> Edit  </a>' ;
echo  ' <a class="btn1" href="Functions/deleteCompany.php?name=' . $name . '"> Delete  </a>' ;

 ?>
	

	
	
     
        </br>
		</br>
 
    
        
    </div><!--end of middle content-->





	
	<div style="clear: both;">
	</div><!-- #content-->



	<footer id="footer">
		<p>Created By Stewart Taylor</p>
	</footer><!-- #footer -->



</div><!-- #wrapper -->



</body>

</html>









