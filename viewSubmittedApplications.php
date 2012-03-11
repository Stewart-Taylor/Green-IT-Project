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
						
						
						
						$show = false;	
						
						function addShowby($sql , $show)
						{
							if($show == true)
							{
								$sql .= "and Status = '" .$_GET['showby'] ."'";
								return $sql;
							}						
							else
							{
								return $sql;
							}
						}
						
						
						
						
						
						
						include "Functions/dbConnection.php";
						
						
						
						
				
						if(isset($_GET['showby']))
						{
	$showbyFull = " and Status = '" .$_GET['showby'] ."'";
	$showby = $_GET['showby'] ;
	$show = true;
						}
				
					
					
					
						if(isset($_SESSION['company']))
						{
								if(isset($_SESSION['company']))
								{
								
										if(isset($_GET['job_id']))
										{
														$vacancyID = $_GET['job_id'];
														$sql = "SELECT * FROM company_applicationview where Job_Vacancy_ID = $vacancyID " ;
														$sql = addShowby($sql ,$show);
										}
										else
										{
											if($show == true)
											{
												$sql = "SELECT * FROM company_applicationview where Status ='" . $showby  ."'";
											}
											else
											{
												$sql = "SELECT * FROM company_applicationview ";
											}
										}
								}
						}
					
					
						if(isset($_SESSION['staff']))
						{
								if(isset($_SESSION['staff']))
								{
										if(isset($_GET['job_id']))
										{
											$vacancyID = $_GET['job_id'];
											$sql = "SELECT * FROM staff_applicationview where Job_Vacancy_ID = $vacancyID " ;
											$sql = addShowby($sql ,$show);
										}
										else if (isset($_GET['id']))
										{
												$id = $_GET['id'];
												$sql = "SELECT * FROM staff_applicationview where Applicant = $id " ;
												$sql = addShowby($sql ,$show);
										}
										else
										{
											if($show == true)
											{
												$sql = "SELECT * FROM staff_applicationview where Status ='" . $showby  ."'";
											}
											else
											{
												$sql = "SELECT * FROM staff_applicationview ";
											}
										}
								}
						}
						
						
						if(isset($_SESSION['applicant']))
						{
								if(isset($_SESSION['applicant']))
								{
										
											if($show == true)
											{
												$sql = "SELECT * FROM applicant_applicationview where Status ='" . $showby  ."'";
											}
											else
											{
												$sql = "SELECT * FROM applicant_applicationview ";
											}
										
								}
						}
					
					
					//echo $sql . "</br>";
					
			
						
						$result=mysql_query($sql);
						$result2=mysql_query($sql);
									mysql_close();
						
						$count =mysql_num_rows($result);

						
						
						
						if(!isset($_SESSION['applicant']))
						{
						
							if(isset($_GET['job_id']))
							{
							
							echo "<h2>Submitted Applications For Job </h2></br>";
							echo '<a href="viewSubmittedApplications.php?job_id=' . $vacancyID . '"class="btn1" >Show all </a>	';
							echo '<a href="viewSubmittedApplications.php?showby=Not Read&job_id=' .   $vacancyID   . '  " class="btn1"> Unread </a>	';
							echo '<a href="viewSubmittedApplications.php?showby=Approved&job_id=' .   $vacancyID   . ' " class="btn1"> Approved</a>	';
							echo '<a href="viewSubmittedApplications.php?showby=Rejected&job_id=' .   $vacancyID   . ' " class="btn1"> Rejected</a>	';
							
							
							}
							else if(isset($_GET['id']))
							{
							
							echo "<h2>Submitted Applications For Job </h2></br>";
							echo '<a href="viewSubmittedApplications.php?id=' . $id . '"class="btn1" >Show all </a>	';
							echo '<a href="viewSubmittedApplications.php?showby=Not Read&id=' .   $id   . '  " class="btn1"> Unread </a>	';
							echo '<a href="viewSubmittedApplications.php?showby=Approved&id=' .   $id   . ' " class="btn1"> Approved</a>	';
							echo '<a href="viewSubmittedApplications.php?showby=Rejected&id=' .   $id   . ' " class="btn1"> Rejected</a>	';
													
							}
							else
							{
							
								echo "<h2>All Submitted Applications </h2></br>";
								echo '<a href="viewSubmittedApplications.php?"   class="btn1" >Show all </a>	';
								echo '<a href="viewSubmittedApplications.php?showby=Not Read" class="btn1"> Unread </a>	';
								echo '<a href="viewSubmittedApplications.php?showby=Approved" class="btn1"> Approved</a>	';
								echo '<a href="viewSubmittedApplications.php?showby=Rejected" class="btn1"> Rejected</a>	';
							
							}
							
							
							echo "</br> </br> ";
							
													
							if( $count == 0 )
							{
								echo "<h2> No Applications </h2>";
								//header("location:/2011-ac32004/staylor/postedjobs.php");
							}
							
							
							while($row = mysql_fetch_assoc($result))
						   {
									echo '	<div id="jobBox"> ' ;

									echo ' <a href="viewApplication.php?job_id=' . $row['Job_Vacancy_ID']  . "&id=" . $row['Applicant']  . '">';
									echo "<h2>" .  $row['First_Name'] . " " .  $row['Second_Name']  . "</h2> " ;
									
									if(!isset($_GET['job_id']))
									{
										echo "<h3>" .  $row['Job_Title']  . " </h3>";
									}
									
									if(isset($_SESSION['staff']))
									{
										echo "<h3>" .  $row['Company_Name']  . " </h3>";
									}
									
									
									echo "<p>" .  $row['Date_Applied'] . "</p>";
									echo "<h3>" .  $row['Status'] . "</h3> " ;
									echo '</a>';
									echo  '</div> ' ;
							}
						
						
						}
						else
						{
						
						echo " </br><h2> Submitted Applications</h2></br> " ;
						
							while($row = mysql_fetch_assoc($result))
						   {
									echo '	<div id="jobBox"> ' ;
									echo ' <a href="vacancy.php?job_id=' . $row['Job_Vacancy_ID']  .'">';
									echo "<h2>" .  $row['Job_Title'] . "</h2> " ;
									echo "<h2>" .  $row['Company_Name'] . "</h2> " ;
									echo "<p>" .  $row['Date_Applied'] . "</p>";
									echo '</a>';
									echo  '</div> ' ;
							}
						
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









