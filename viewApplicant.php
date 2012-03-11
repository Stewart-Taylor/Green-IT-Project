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
							header("location:/2011-ac32004/staylor/viewApplicants.php.php");
						}
						
			

						$id = $_GET['id'];
						
						include "Functions/dbConnection.php";
						
					
						
						$sql=" select * from staff_applicantview where Applicant_ID = $id  " ;
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
							echo "<h3>Phone: " .  $row['Phone_Number'] .  "</h3> ";
							echo "<h3>Email: " .  $row['Email'] .  "</h3> ";
							echo "</div>";
							echo '<div id="profileContent">';
							echo "<p>Date Of Birth: " .  $row['Date_Of_Birth'] .  "</p> ";
							echo "<p>Gender: " .  $row['Gender'] .  "</p> ";
							echo "<p> Address </p>";
							echo   $row['House']  . "</br>";
							echo   $row['Street'] . "</br>";
							echo  $row['City'] . "</br>";
							echo  $row['Postcode'] . "</br>";
							echo "<p> " .  $row['House'] .  "</p> ";
							
							echo '<h2><a href="' .   $row['CV_Link'] . '"> CV  </a></h2> ';
							   echo "</div>";
					   
					   
					   echo "<h3>";
					   echo ' <a href="viewSubmittedApplications.php?id=' . $id .'"  class="btn1"> View Submitted Applications </a>';
					   echo ' <a href="applicantEditProfile.php?id=' . $id  . '"  class="btn1"> Edit  </a>';
					   echo ' <a href="Functions/deleteApplicant.php?id=' . $id  .'"  class="btn1"> Delete  </a>';
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









