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
	
	
	
	
		
	
			<div id="signUpBox" >
			
			<h2> Create New Application</h2></br>
			
			
			<form name="input" action="Functions/apply.php" method="GET">
				

				
				
				
												<div id="signUpItem" >
				Applicant </br>
				<select name="applicant">
						<option> - Applicant - </option>
				
				
				
							<?php
						
						
						
									include "Functions/dbConnection.php";
									$sql="select * from staff_applicantview ";
										$result=mysql_query($sql);
										mysql_close();
										
											while($row = mysql_fetch_assoc($result))
  {
	echo '<option value="'. $row['Applicant_ID']  . '">'  . $row['First_Name']  . " " . $row['Second_Name']  .  '</option> ';
  
  
  
  }
  
  
  
						
						
						?>
				
				
								</select>
				</div>
				
				
				
				
				
				
				
								<div id="signUpItem" >
				Job Vacancy </br>
				<select name="job_id">
						<option> - Company - </option>
				
			<?php
						
						
						
									include "Functions/dbConnection.php";
									$sql="select * from staff_vacancyview ";
										$result=mysql_query($sql);
										mysql_close();
										
											while($row = mysql_fetch_assoc($result))
  {
	echo '<option value="'. $row['Job_Vacancy_ID']  . '">'  . $row['Company_Name']  . " - " . $row['Job_Title'] .   '</option> ';
  
  
  
  }
  
  
  
						
						
						?>
						
						
											
				</select>
				</div>
				
		
						
			
				
				
				
						<?php
		
			if(isset($_GET['error']))
			{
				$error = $_GET['error'] ;
				
				if($error == 1)
				{
				echo "Error Registering Application";
				}
			}
			
			
			if(isset($_GET['complete']))
			{
				$complete = $_GET['complete'] ;
				
				if($complete == 1)
				{
				echo "<h4> Application Created </h4>";
				}
			}
		
		
		
		
		?>
				
				
				
				
				
				
					<div id="signUpItem" >
				<input type="submit" class="btn1"   value="Submit Application" />
				</div>
				
				

			</form>
			
			
			
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









