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
			
			<h2> Create New Vacancy</h2></br>
			
			
			<form name="input" action="Functions/registerVacancy.php" method="post">
				

				
								<div id="signUpItem" >
				Company </br>
				<select name="company">
						<option> - Company - </option>
				
			<?php
						
						
						
									include "Functions/dbConnection.php";
									$sql="select * from staff_companyview ";
										$result=mysql_query($sql);
										mysql_close();
										
											while($row = mysql_fetch_assoc($result))
  {
	echo '<option value="'. $row['Company_ID']  . '">'  . $row['Company_Name']  . '</option> ';
  
  
  
  }
  
  
  
						
						
						?>
						
						
											
				</select>
				</div>
				
				
				<div id="signUpItem" >
				Job Title: <input type="text" name="title"  value=""/>
				</div>
				
				<div id="signUpItem" >
				Job Description:</br> <textarea  name="description"  rows="5" cols="30"></textarea>
				</div>
				
				
				
								
				<div id="signUpItem" >
				Contract Length: <input type="text" name="contractLength"  />
				</div>
				
				
				<div id="signUpItem" >
				Hours: <input type="text" name="hours"  value=""/>
				</div>
				
												<div id="signUpItem" >
				Salary: <input type="text" name="salary"  value=""/>
				</div>
				
		
				
				<div = id="signUpItem" >
				Work Type: 
				<select name="workType">
				  <option>Full Time</option>
				  <option>Part Time</option>
				</select>
				
				</div>
				
				
				
				<div id="signUpItem" >
				Closing Date 
				<?php include "Parts/closingDate.php"; ?>
					</div>

						
			
				
				
				
						<?php
		
			if(isset($_GET['error']))
			{
				$error = $_GET['error'] ;
				
				if($error == 1)
				{
				echo "Error Creating Vacancy";
				}
			}
			
			
			if(isset($_GET['complete']))
			{
				$complete = $_GET['complete'] ;
				
				if($complete == 1)
				{
				echo "<h4> Vacancy Created </h4>";
				}
			}
		
		
		
		
		?>
				
				
				
				
				
				
					<div id="signUpItem" >
				<input type="submit" class="btn1"   value="Create Vacancy" />
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









