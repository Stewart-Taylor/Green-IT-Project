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
				
				

			<div id="jobs">
	<h2>Company Personnel</h2>
	
	
	
							<?php
		
			if(isset($_GET['error']))
			{
				$error = $_GET['error'] ;
				
				if($error == 1)
				{
				echo "Error Deleting Personnel";
				}
			}
			
			
			if(isset($_GET['complete']))
			{
				$complete = $_GET['complete'] ;
				
				if($complete == 1)
				{
				echo "<h4> Personnel Deleted </h4>";
				}
			}
	
	?>
	
			
	
		<?php
		
		
			include "Functions/dbConnection.php";
	
	
	
	
	if(isset($_SESSION['company']))
	{
		if( $_SESSION['company'] == true)
		{
				$sql="select * from company_personnelview ";
		
		}
	}
	
	
	if(isset($_SESSION['staff']))
	{
		if( $_SESSION['staff'] == true)
		{
				$sql="select * from staff_personnelview ";
		
		}
	}
	
	
	
	if(isset($_SESSION['applicant']))
	{
		if( $_SESSION['applicant'] == true)
		{
		
	
		
			$sql="select * from (job_vacancy join company on job_vacancy.Company_ID = company.company_id) join address on company.Address = address.Address_ID ORDER BY job_vacancy.Job_Vacancy_ID DESC";
		
		}
	}
	
	
	
	$result=mysql_query($sql);
	
	mysql_close();
	
	$count= mysql_num_rows($result);
	
	


	
	
	
	if( $count == 0 )
	{
		  header("location:/2011-ac32004/staylor/jobs.php");
	}
	
	
	while($row = mysql_fetch_assoc($result))
  {
	


		echo '	<div id="jobBox"> ' ;
		echo '	<div id="jobItems"> ' ;
		echo '	<h2> ' . $row['First_Name']    ." " .  $row['Second_Name']   . '</h2> ' ;
		
		
		if(isset($_SESSION['staff']))
		{
		
		echo '<h3>' . $row['Company_Name'] .  			'	|		Role:  ' . $row['Role']     . ' </h3> ' ;
		
		}
		else
		{
			echo '<h3>	Role:  ' . $row['Role']     . ' </h3> ' ;
		}
		
		
		echo  '<p> Phone: '. $row['Contact_Number'] . '</p>' ;
		echo  '<p> Email: '. $row['Email'] . '</p>' ;
		echo  '</div> ' ;
		echo  '<img class="cmpLogoSmall" src="' . $row['Image_Link']    .'" alt="Logo"/> ' ;
		echo "<center>";
		echo '<a href="editPersonnel.php?id=' .   $row['Personnel_ID']  . '" > Edit </a>';
		echo "|";
		echo '<a href="Functions/deletePersonnel.php?id=' .   $row['Personnel_ID']  . ' " > Delete </a>';
		echo "</center>";
		echo '</div>' ;
	//	echo '<a href="editPersonnel
	
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









