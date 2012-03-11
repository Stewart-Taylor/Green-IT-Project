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
					
						if(!isset($_GET['id']))
						{
							header("location:/2011-ac32004/staylor/viewSubmittedApplications.php.php");
						}
						
						if(!isset($_GET['job_id']))
						{
							header("location:/2011-ac32004/staylor/viewSubmittedApplications.php.php");
						}
						
						
						
						
						$id = $_GET['id'];
						$job_id = $_GET['job_id'];
						
						include "Functions/dbConnection.php";
						
					
					if(isset($_SESSION['staff']))
					{
						$sql=" select * from staff_applicationview where Applicant = $id and Job_Vacancy_ID = $job_id " ;
					}
					else
					{
						$sql=" select * from company_applicationview where Applicant = $id and Job_Vacancy_ID = $job_id " ;
					}
						
						
						$result=mysql_query($sql);

						mysql_close();
					
						
						$count =mysql_num_rows($result);
						
						if( $count == 0 )
						{
							//header("location:/2011-ac32004/staylor/postedjobs.php");
						}
						
						
						while($row = mysql_fetch_assoc($result))
					   {
							echo '<div id="profileBox"> ';
							echo '	<div id="profileTitle">';
							echo "<h2>" .  $row['First_Name'] .  " " .  $row['Second_Name']   . "	 </h2> ";
							echo  '</br><img class="cmpLogoSmall" src="' . $row['Image_Link']    .'" alt="Logo"/> ' ;
						if(isset($_SESSION['staff']))
					{
						echo "<h3>" .  $row['Job_Title'] .  "</h3> ";
						echo "<h3>" .  $row['Company_Name'] .  "</h3> ";
					
					}
							echo "<h3>" .  $row['Status'] .  "</h3> ";
							echo "</div>";
							echo '<div id="profileContent">';
							echo "<p>Date Applied: " .  $row['Date_Applied'] .  "</p> ";
							echo "<p>Phone: " .  $row['Phone_Number'] .  "</p> ";
							echo "<p> Address </p>";
							echo   $row['House']  . "</br>";
							echo   $row['Street'] . "</br>";
							echo  $row['City'] . "</br>";
							echo  $row['Postcode'] . "</br>";
							echo "<p> " .  $row['House'] .  "</p> ";
							
							echo '<h2><a href="' .   $row['CV_Link'] . '"> CV  </a></h2> ';
							   echo "</div>";
					   
					   
					   echo "<h3>";
					   echo ' <a href="Functions/processApplication.php?id=' . $id  . "&job_id=" . $job_id .  '&status=approved"  class="btn1"> Approve </a>';
					   echo ' <a href="Functions/processApplication.php?id=' . $id  . "&job_id=" . $job_id . '&status=rejected"  class="btn1"> Reject </a>';
					   echo ' <a href="Functions/processApplication.php?id=' . $id  . "&job_id=" . $job_id .  '&status=read later"  class="btn1"> Read Later </a>';
					   echo "</h3>";
					   echo "</div>";
					   
					   
					   
								
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









