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
	
	
	
		if(!isset($_GET['job_id']))
	{
		header("location:/2011-ac32004/staylor/viewJobs.php");
	}
	
	
	
	$complete = 0;
	
	if(isset($_GET['complete']))
	{
		$complete = $_GET['complete'] ;
	}
	
	
	
	$vacancyID  = $_GET['job_id'] ; 
	
	
	if(isset($_GET['complete'] ))
	{
	

	}
	else	
	{
	if(isset($_SESSION['applicant']))
	{

			if ($_SESSION['applicant'] == true)
			{

				include "Functions/dbConnection.php";
				$sql=" select * from applicant_applicationview  where Job_Vacancy_ID = $vacancyID " ;
				$result=mysql_query($sql);
				mysql_close();
				
		
				
				$count = mysql_num_rows($result);
				if($count != 0)
				{
					header("location:/2011-ac32004/staylor/vacancy.php?job_id=" . $vacancyID  . "&complete=2");
				}
			}
		}
		}
	
	
	include "Functions/dbConnection.php";
	
	
	
	
	$vacancyID = stripslashes($vacancyID);
	$vacancyID = mysql_real_escape_string($vacancyID);
	
	
	$isCompany = false;
	
		if(isset($_SESSION['company']))
	{
		if( $_SESSION['company'] == true)
		{
			$isCompany = true;
				//$sql="select * from (job_vacancy join job on job_vacancy.Job_ID = job.job_id) join company on job_vacancy.Company_ID = company.company_id where company.Company_Name = '$cName'  ORDER BY job_vacancy.Job_Vacancy_ID DESC";
		$sql=" select * from company_vacancyview where Job_Vacancy_id = $vacancyID  " ;
		
		}
	}
	
	
	
	
	
	if(isset($_SESSION['applicant']))
	{
		if( $_SESSION['applicant'] == true)
		{
		 

		
			// $sql="select * from (job_vacancy join company on job_vacancy.Company_ID = company.company_id) join address on company.Address = address.Address_ID ORDER BY job_vacancy.Job_Vacancy_ID DESC";
		$sql=" select * from applicant_vacancyview where Job_Vacancy_id = $vacancyID  " ;
		}
	}
	
	
	
	
		
	if(isset($_SESSION['staff']))
	{
		if( $_SESSION['staff'] == true)
		{
		 

		
			// $sql="select * from (job_vacancy join company on job_vacancy.Company_ID = company.company_id) join address on company.Address = address.Address_ID ORDER BY job_vacancy.Job_Vacancy_ID DESC";
		$sql=" select * from staff_vacancyview where Job_Vacancy_id = $vacancyID  " ;
		
		$isCompany = true; // staff have same actions as comapny
		}
	}
	
	
	
	
	
	

	//$sql=" select * from applicant_vacancyview where Job_Vacancy_id = $vacancyID  " ;
	$result=mysql_query($sql);
	
	mysql_close();
	
	$count =mysql_num_rows($result);
	
	if( $count == 0 )
	{
	header("location:/2011-ac32004/staylor/jobs.php");
	}
	
	
	while($row = mysql_fetch_assoc($result))
  {
		echo ' <div id="profileBox"> ' ;
		echo ' <div id="profileTitle"> ';
		


			echo "<h2> " .  $row['Job_Title'] . "</h2>" ;
			if( $isCompany == false)
			{
					if(!isset($_SESSION['applicant']))
					{
						echo  '<h2> <a href="company.php?company=' .$row['Company_Name'] . ' " > ' . $row['Company_Name'] . '</a> </h2>';
					}
			
				
			}
			
			
			if(isset($_SESSION['applicant']))
			{
				echo '<h2>  ' . $row['Company_Name'] .  '</h2>';
			}
			
			echo  "<h3>Closing Date: " . $row['Closing_Date'] . " </h3>";
			echo  "<h3>Salary: &pound;" .  $row['Salary'] . " </h3>";
			echo  "<h3>Hours: " . $row['Hours'] . " </h3>";
			echo  "<h3>Contract Length: " . $row['Contract_Length'] . " </h3>";
			
			echo '</div>';
			
			echo ' <div id="profileContent"> ' ;
			echo '<h3> Job Description </h3> ';
			echo $row['Job_Description'] ;
			echo ' </div>' ;
			
	
			
		
			//	echo '<p>' . company address  . ' </p> ';
			echo ' <div id="profileContent"> ' ;
			echo '<p>Date Posted: ' . $row['Date_Posted']  . ' </p> ';
			echo ' </div>' ;
			
			
			if(!isset($_SESSION['company']))
			{
				echo ' <div id="profileContent"> ' ;
				echo '<h3> Address </h3> ';
				echo '<p> ' . $row['House']  . ' </p> ';
				echo '<p> ' . $row['Street']  . ' </p> ';
				echo '<p> ' . $row['Postcode']  . ' </p> ';
				echo '<p> ' . $row['City']  . ' </p> ';
				echo ' </div>' ;
			
			
			}
			
	
  
	
		if(isset($_GET['error']))
		{
			echo "<h3> There was an error processing the application </h3>";
		
		}

	
		if(isset($_SESSION['applicant']))
		{
			if($_SESSION['applicant'] ==true)
			{
			
				if( $complete == 1)
				{
					?>
						<div id="profileContent">
						<h2> Position Applied For </h2>
						</div>
					<?php
				}
				else if ( $complete ==2)
				{
					?>
						<div id="profileContent">
						<h2> Position Already Applied For </h2>
						</div>
					<?php
				}
				else
				{
					echo ' <div id="profileContent"> ';
					echo '<a href="Functions/apply.php?job_id='  . $row['Job_Vacancy_ID']   . '"  class="btn1">' ;
					echo "<h2> Apply For Position </h2> ";
					echo "</a>";
					echo ' </div>';
				}
		}
		
		}
		
		
		
		
		if($isCompany == true)
		{
					echo ' <div id="profileContent"> ';
					echo '<a href="viewSubmittedApplications.php?job_id='  . $row['Job_Vacancy_ID']   . '"  class="btn1">' ;
					echo "<h2> View Applications </h2> ";
					echo "</a>";
					echo "			";
					
					
					echo '<a href="editVacancy.php?job_id='  . $row['Job_Vacancy_ID']   . '"  class="btn1">' ;
					echo "<h2> Edit  </h2> ";
					echo "</a>";
					echo "			";
					
				
					echo '<a href="Functions/deleteVacancy.php?job_id='  . $row['Job_Vacancy_ID']   . '"  class="btn1">' ;
					echo "<h2> Delete </h2> ";
					echo "</a>";
					echo ' </div>';
		
		
		}
		
		
		
	
		
		
		
		
		
	echo '</div>';
	
	}

	
	
	
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









