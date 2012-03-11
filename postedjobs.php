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
	<h2>Your Posted Vacancys</h2>
			
	
		<?php
		
		
			include "Functions/dbConnection.php";
	
	
	
		if(isset($_SESSION['Company_ID']))
	{
	
		   $cID = $_SESSION['Company_ID'] ;
	
			$sql="select * from (job_vacancy join job on job_vacancy.Job_ID = job.job_id) join company on job_vacancy.Company_ID = company.company_id where company.company_id = $cID ";
	}
	else
	{
	
		// header("location:/2011-ac32004/staylor/");
	}
	
	
		$result=mysql_query($sql);
	
	
	
	$count= mysql_num_rows($result);
	
	


	
	
	
	if( $count == 0 )
	{
		  // header("location:/2011-ac32004/staylor/");
	}
	
	
		while($row = mysql_fetch_assoc($result))
  {
	

		echo '	<div id="jobBox"> ' ;
		echo ' <a href="vacancyStatus.php?job_id=' .   $row['Job_Vacancy_ID']  . ' "  > ' ;
		echo '	<div id="jobItems"> ' ;
		echo '	<h2> ' . $row['Job_Title']      . '</h2> ' ;
		echo '<h3> Closing Date: ' . $row['Closing_Date']     . ' </h3> ' ;
		echo  '</div> ' ;
		
		echo  '</a>' ;
		echo '</div>' ;
	
	
	
	}
	
	
	
	
	mysql_close();
		
		
		?>
		
	
	
	
	
	</div>
	
	
	
	
	
	
	
	<?php
	
		// <div id="jobs">
	// <h2>Latest Vacancies</h2>
		
		
		// <div id="jobBox">
		// <a href="vacancy.php" >
			// <div id="jobItems">
				// <h2> Software Engineer </h2>
				// <h3> $20,000</h3>
				// <p> Dundee</p>
			// </div>
			// <img class="cmpLogoSmall" src="http://www.scotlandis.com/assets/images/members/IBM.png" alt="IBM Logo"/>
		// </a>
		// </div>
		
		
				// <div id="jobBox">
			// <div id="jobItems">
				// <h2> Software Engineer </h2>
				// <h3> $20,000</h3>
				// <p> Dundee</p>
			// </div>
			// <img class="cmpLogoSmall" src="http://www.scotlandis.com/assets/images/members/IBM.png" alt="IBM Logo"/>
		// </div>
		
		
				// <div id="jobBox">
			// <div id="jobItems">
				// <h2> Janitorial Director & CEO of mops</h2>
				// <h3> $20,000</h3>
				// <p> Dundee</p>
			// </div>
		// <img class="cmpLogoSmall" src="http://www.scotlandis.com/assets/images/members/IBM.png" alt="IBM Logo"/>
		// </div>
		
		
		
	// </div>
	
 ?>
	
	
	
     
        
 
    
        
    </div><!--end of middle content-->



	</div>

	
	<div style="clear: both;">
	</div><!-- #content-->



	<footer id="footer">
		<p>Created By Stewart Taylor</p>
	</footer><!-- #footer -->



</div><!-- #wrapper -->



</body>

</html>









