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
				<h2>Post New Vacancy</h2></br>

				<form name="register" method="post" action="Functions/createVacancy.php" >
					
					<div id="signUpItem" >
					<p>Select A Job</p>
						<select name="job_id">
						
						
						
						<?php
						
						
									include "Functions/dbConnection.php";

			$sql="select * from job";

	
		$result=mysql_query($sql);
	
	$count= mysql_num_rows($result);
	
	
	if( $count == 0 )
	{
		  header("location:/2011-ac32004/staylor/postJob.php");
	}
		
		while($row = mysql_fetch_assoc($result))
	{
		echo '<option value="' . $row['Job_ID']   . '" >' .    $row['Job_Title']  . '</option>' ;
	}

	mysql_close();
						
						?>


					</select>
					




					</br></br><a href="postJob.php"> Or add a new job </a>
					</div>
					</br>
					
					<div id="signUpItem" >
						Work Type: <input type="text" name="work_type" /> 
					</div>
					
					<div id="signUpItem" >
						Salary: <input type="text" name="salary" />
					</div>
					
					<div id="signUpItem" >
						Hours (weekly): <input type="text" name="hours" />
					</div>
					
					<div id="signUpItem" >
						Contract Length: <input type="text" name="contract_length" />
					</div>
					
			
					<p>Closing Date</p>
					<div id="signUpItem" >
							<?php include "Parts/date.php" ?>
					</div>
					
			
					
					
					<?php
					
						if(isset($_GET['error']))
				{
				
				
				
				$error = $_GET['error'] ;
				
				if($error == 1)
				{
				echo "Error : passwords don't match";
				}
				
				
				
				}
					
					
					
					
					?>
					
					
					<div id="signUpItem" >
						<input type="submit" class="btn1" value="Submit" />
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









