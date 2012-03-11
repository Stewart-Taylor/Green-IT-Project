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
			
			
			
			if(isset($_GET['job_id']))
			{
				$id = $_GET['job_id'] ;
			}
			else
			{
				header("location:/2011-ac32004/staylor/viewPersonnel.php");
			}
			
			
			if(isset($_SESSION['staff']))
			{
					$sql = "select * from staff_vacancyview where Job_Vacancy_ID = $id  ";
			}
			else
			{
					$sql = "select * from company_vacancyview where Job_Vacancy_ID = $id  ";
			}
			
			
			
			$result=mysql_query($sql);
			
				
			mysql_close();
			$count =mysql_num_rows($result);
			
			
			if( $count == 0 )
			{
					header("location:/2011-ac32004/staylor");
			}
			
			
		while($row = mysql_fetch_assoc($result))
		  {
				$title = $row['Job_Title'] ;
				$description = $row['Job_Description'] ;
				$contractLength = $row['Contract_Length'] ;
				$hours = $row['Hours'] ;
				$salary = $row['Salary'] ;
				$workType = $row['Work_Type'] ;
		  }
			
			
			
			
			
			
			?>
			
	
		
	
			<div id="signUpBox" >
			
			<h2> Update Vacancy</h2></br>
			
			
			<form name="input" action="Functions/updateVacancy.php" method="post">
				

				<input type="hidden" name="job_id"  value="<?php echo $id ;?>"/>
				
				<div id="signUpItem" >
				Job Title: <input type="text" name="title"  value="<?php echo $title ;?>"/>
				</div>
				
				<div id="signUpItem" >
				Job Description:</br> <textarea  name="description"  rows="5" cols="30" ><?php echo $description ;?></textarea>
				</div>
				
				
				
								
				<div id="signUpItem" >
				Contract Length: <input type="text" name="contractLength"  value="<?php echo $contractLength ; ?>" />
				</div>
				
				
				<div id="signUpItem" >
				Hours: <input type="text" name="hours"  value="<?php echo $hours ; ?>"/>
				</div>
				
												<div id="signUpItem" >
				Salary: <input type="text" name="salary"  value="<?php echo $salary ; ?>"/>
				</div>
				
																<div id="signUpItem" >
				Work Type: <input type="text" name="workType"  value="<?php echo $workType  ;?>"/>
				</div>
				
				
				

						
			
				
				
				
						<?php
		
			if(isset($_GET['error']))
			{
				$error = $_GET['error'] ;
				
				if($error == 1)
				{
				echo "Error Updating Vacancy";
				}
			}
			
			
			if(isset($_GET['complete']))
			{
				$complete = $_GET['complete'] ;
				
				if($complete == 1)
				{
				echo "<h4> Vacancy Updated </h4>";
				}
			}
		
		
		
		
		?>
				
				
				
				
				
				
					<div id="signUpItem" >
				<input type="submit" class="btn1"   value="Update Vacancy" />
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









