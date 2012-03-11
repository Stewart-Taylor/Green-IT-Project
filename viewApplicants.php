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
						
						
		
						
						include "Functions/dbConnection.php";
						
					
						
					$sql = "SELECT * FROM staff_applicantview; ";
					
					
						
						$result=mysql_query($sql);
									mysql_close();
						
						$count =mysql_num_rows($result);

						
									if(isset($_GET['error']))
			{
				$error = $_GET['error'] ;
				
				if($error == 1)
				{
				echo "Error Deleting Applicant";
				}
			}
			
			
			if(isset($_GET['complete']))
			{
				$complete = $_GET['complete'] ;
				
				if($complete == 1)
				{
				echo "<h4> Applicant Deleted </h4>";
				}
			}
						
						
						echo "<h2> Applicants </h2>";
						
						
						
						echo "</br> </br> ";
						
												
						if( $count == 0 )
						{
							echo "<h2> No Applicants </h2>";
							//header("location:/2011-ac32004/staylor/postedjobs.php");
						}
						
						
						while($row = mysql_fetch_assoc($result))
					   {
										echo '	<div id="jobBox"> ' ;
										echo ' <a href="viewApplicant.php?id=' .   $row['Applicant_ID']  . ' "  > ' ;
										echo '	<div id="jobItems"> ' ;
										echo '	<h2> ' . $row['First_Name']  . " " . $row['Second_Name']     . '</h2> ' ;
										echo '<h3>Phone: ' . $row['Phone_Number']     . ' </h3> ' ;
										echo  '<h3>Email:   ' . $row['Email']     . ' </h3>' ;
										echo  '</div> ' ;
										echo  '<img class="cmpLogoSmall" src="' . $row['Image_Link']    .'" alt="Logo"/> ' ;
										echo  '</a>' ;
										echo '</div>' ;
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









