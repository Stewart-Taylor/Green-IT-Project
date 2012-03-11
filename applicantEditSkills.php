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
	
	
	
	<div id="skillBox">
	
			<?php
			
			
			include "Functions/dbConnection.php";
			

			if(isset($_SESSION['applicant']))
			{
				if( $_SESSION['applicant'] == true)
				{
				
				$sql="select * from applicant_skillview  ";
				
				}
			}
			
			if(isset($_SESSION['staff']))
			{
				if( $_SESSION['staff'] == true)
				{
				
					if(isset($_GET['id']))
					{
						$id = $_GET['id'] ;
						$sql="select * from staff_skillview ";
				
						
						
					}
				}
			}
			
			

			$result=mysql_query($sql);
						mysql_close();
			
			$count =mysql_num_rows($result);
			
			
			if( $count == 0 )
			{
					header("location:/2011-ac32004/staylor");
			}
			
			
			
			echo "<h2> Edit Skills</h2></br>";
			
			
			
			
			
			
			
			?>
			
					 <table border="1" bordercolor="#000000" style="background-color:#FFFFCC" width="100" cellpadding="1" cellspacing="1">
					<tr>
										<td> <h3>Skill </h3></td>
					<td> <h3>Level </h3></td>
					<td> <h3>Description </h3></td>
					</tr>
			
			<?php
			
		while($row = mysql_fetch_assoc($result))
		  {
		  
		  
		  
		  ?>
				<tr>
					<form name="input" action="Functions/updateSkill.php" method="post">
					<input type="hidden" name="skill_id"  value="<?php echo $row['Skill_ID'] ; ?>" /> 
					<td> <input type="text" name="title"  value="<?php echo $row['Skill_Title'] ; ?>" /> </td>
					<td> <input type="text" name="level"  value="<?php echo $row['Level'] ; ?>"/> </td>
					<td><input type="text" name="description"  value="<?php echo $row['Description'] ; ?>"/> </td>
					<td> <input type="submit" class="btn1"   value="Edit" /> </td>
					</form>
				</tr>
			
			
			<?php
		  
		  
		  
		  }
			
			
			
			
			

			
			?>
			
							</tr>
			</table>
			
			
				
				
						<?php
		
			if(isset($_GET['error']))
			{
				$error = $_GET['error'] ;
				
				if($error == 1)
				{
				echo "Error Updating details";
				}
			}
			
			
			if(isset($_GET['complete']))
			{
				$complete = $_GET['complete'] ;
				
				if($complete == 1)
				{
				echo "<h4> Details Updated </h4>";
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









