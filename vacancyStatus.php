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
							header("location:/2011-ac32004/staylor/jobs.php");
						}
						
						$vacancyID  = $_GET['job_id'] ; 
						
						include "Functions/dbConnection.php";
						
						$vacancyID = stripslashes($vacancyID);
						$vacancyID = mysql_real_escape_string($vacancyID);
						
						
						
						
						if(isset($_GET['showby']))
						{
							$showby = $_GET['showby'];
							
							
							$sql=" select * from application join applicant on applicant.Applicant_ID = application.Applicant where Job_Vacancy = $vacancyID and  application.Status = '$showby'" ;
						}
						else
						{
						$sql=" select * from application join applicant on applicant.Applicant_ID = application.Applicant where Job_Vacancy = $vacancyID " ;
						}
						
						$result=mysql_query($sql);

						$count =mysql_num_rows($result);

						
						
						echo "<h2>Submitted Applications </h2></br>";
						echo '<a href="vacancyStatus.php?job_id=' . $vacancyID . '"class="btn1" >Show all </a>';
						echo '<a href="vacancyStatus.php?showby=Not Read&job_id=' .   $vacancyID   . '  " class="btn1"> Unread </a>';
						echo '<a href="vacancyStatus.php?showby=Approved&job_id=' .   $vacancyID   . ' " class="btn1"> Approved</a>';
						echo '<a href="vacancyStatus.php?showby=Rejected&job_id=' .   $vacancyID   . ' " class="btn1"> Rejected</a>';
						
						
												
						if( $count == 0 )
						{
							echo "<h2> No Applications </h2>";
							//header("location:/2011-ac32004/staylor/postedjobs.php");
						}
						
						
						while($row = mysql_fetch_assoc($result))
					   {
								echo '	<div id="jobBox"> ' ;
								echo ' <a href="viewApplication.php?id=' . $row['Applicant_ID']  . "&job_id=" . $vacancyID . '">';
								echo "<h2>" .  $row['First_Name'] .  " " .  $row['Second_Name']   . "	</br></br>"  .  $row['Status']  .      " </h2> </br>" ;
								echo '</a>';
										echo  '</div> ' ;
						}
					
						
						mysql_close();
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









