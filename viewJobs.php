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
	
			
	
		<?php
		
		
			include "Functions/dbConnection.php";
	
	
	$isCompany = false;
	
	if(isset($_SESSION['company']))
	{
		if( $_SESSION['company'] == true)
		{
			$isCompany = true;
				//$sql="select * from (job_vacancy join job on job_vacancy.Job_ID = job.job_id) join company on job_vacancy.Company_ID = company.company_id where company.Company_Name = '$cName'  ORDER BY job_vacancy.Job_Vacancy_ID DESC";
		$sql=" select * from company_vacancyView  ";
		
		echo "<h2>Posted Vacancies</h2> ";
		}
	}
	
	
	
	
	
	if(isset($_SESSION['applicant']))
	{
		if( $_SESSION['applicant'] == true)
		{
		 
	echo "<h2>Available Vacancies</h2> ";
		
			// $sql="select * from (job_vacancy join company on job_vacancy.Company_ID = company.company_id) join address on company.Address = address.Address_ID ORDER BY job_vacancy.Job_Vacancy_ID DESC";
			$sql="select * from applicant_vacancyView ORDER BY Job_Vacancy_ID DESC";
		}
	}
	
	
	$isStaff = false;
	
		if(isset($_SESSION['staff']))
	{
		if( $_SESSION['staff'] == true)
		{
			$isStaff = true;
				//$sql="select * from (job_vacancy join job on job_vacancy.Job_ID = job.job_id) join company on job_vacancy.Company_ID = company.company_id where company.Company_Name = '$cName'  ORDER BY job_vacancy.Job_Vacancy_ID DESC";
	
	
	
			if(isset($_GET['company']))
			{
				$company =  $_GET['company'];
				$sql=" select * from staff_vacancyView where Company_Name ='$company' ";
			}
			else
			{
				$sql=" select * from staff_vacancyView  ";
			}

	
		
		echo "<h2>All Vacancies</h2> ";
		}
	}
	
	
							
		
			if(isset($_GET['error']))
			{
				$error = $_GET['error'] ;
				
				if($error == 1)
				{
				echo "Error Deleting Vacancy";
				}
			}
			
			
			if(isset($_GET['complete']))
			{
				$complete = $_GET['complete'] ;
				
				if($complete == 1)
				{
				echo "<h4> Vacancy Deleted </h4>";
				}
			}
	
	
	
	
	
	
	//echo $sql;
	
	$result=mysql_query($sql);
	
	
	$count= mysql_num_rows($result);
	
	
mysql_close();

	
	
	
	if( $count == 0 )
	{
		  header("location:/2011-ac32004/staylor/");
	}
	
	
	

	
	while($row = mysql_fetch_assoc($result))
  {
	

	if($isCompany == true)
	{
		
		echo '	<div id="jobBox"> ' ;
		echo ' <a href="vacancy.php?job_id=' .   $row['Job_Vacancy_ID']  . ' "  > ' ;
		echo '	<div id="jobItems"> ' ;
		echo '	<h2> ' . $row['Job_Title']      . '</h2> ' ;
		echo '<h3>Salary:   &pound;' . $row['Salary']     . ' </h3> ' ;
		echo  '<p>Closing Date:  '. $row['Closing_Date'] . '</p>' ;
		
		echo  '</div> ' ;
		
		echo  '</a>' ;
		echo '</div>' ;
	
	
	}
	else if ($isStaff == true)
	{

		echo '	<div id="jobBox"> ' ;
		echo ' <a href="vacancy.php?job_id=' .   $row['Job_Vacancy_ID']  . ' "  > ' ;
		echo '	<div id="jobItems"> ' ;
		echo '	<h2> ' . $row['Job_Title']      . '</h2> ' ;
		echo '<h3>  &pound;' . $row['Salary']     . ' </h3> ' ;
		echo  '<h3>  ' . $row['Company_Name']     . ' </h3>' ;
		echo  '<p>Closing Date:  '. $row['Closing_Date'] . '</p>' ;
		echo  '</div> ' ;
		echo  '<img class="cmpLogoSmall" src="' . $row['Company_Logo']    .'" alt="Logo"/> ' ;
		echo  '</a>' ;
		echo '</div>' ;
		
		}
	else
	{

		echo '	<div id="jobBox"> ' ;
		echo ' <a href="vacancy.php?job_id=' .   $row['Job_Vacancy_ID']  . ' "  > ' ;
		echo '	<div id="jobItems"> ' ;
		echo '	<h2> ' . $row['Job_Title']      . '</h2> ' ;
		echo '<h3>  &pound;' . $row['Salary']     . ' </h3> ' ;
		echo  '<p> '. $row['City'] . '</p>' ;
		echo  '<h3>  ' . $row['Company_Name']     . ' </h3>' ;
		echo  '</div> ' ;
		echo  '<img class="cmpLogoSmall" src="' . $row['Company_Logo']    .'" alt="Logo"/> ' ;
		echo  '</a>' ;
		echo '</div>' ;
		
		}
	
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









