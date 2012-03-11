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
			
			
			
			if(isset($_GET['id']))
			{
				$id = $_GET['id'] ;
			}
			else
			{
				header("location:/2011-ac32004/staylor/viewPersonnel.php");
			}
			
			
		if(isset($_SESSION['staff']))
		{
				$sql="select * from staff_personnelview where Personnel_ID = $id  ";
		}
		else 
		{
				$sql="select * from company_personnelview where Personnel_ID = $id  ";
		}
			
			
			
			//$sql="select * from company_personnelview where Personnel_ID = $id  ";
			$result=mysql_query($sql);
			
				
			mysql_close();
			$count =mysql_num_rows($result);
			
			
			if( $count == 0 )
			{
					header("location:/2011-ac32004/staylor");
			}
			
			
		while($row = mysql_fetch_assoc($result))
		  {
				$firstname = $row['First_Name'] ;
				$surname = $row['Second_Name'] ;
				$role = $row['Role'] ;
				$phone = $row['Contact_Number'] ;
				$email = $row['Email'] ;
				$imageLink = $row['Image_Link'] ;
		  }
			
			
			
			
			
			
			
			?>
			
			
			
			
			
			
			
			
			<div id="signUpBox" >
			
			<h2> Edit Personel Profile</h2></br>
			
			
			<form name="input" action="Functions/updatePersonnel.php" method="post">
				

			
				
				<div id="signUpItem" >
				First Name: <input type="text" name="firstName"  value="<?php     echo  $firstname ;     ?>"/>
				</div>
				
				<div id="signUpItem" >
				Surname: <input type="text" name="surname"  value="<?php     echo  $surname ;     ?>"/>
				</div>
				
				
				
								
				<div id="signUpItem" >
				Role: <input type="text" name="role"   value="<?php     echo  $role ;     ?>"/>
				</div>
				
				
				<div id="signUpItem" >
				Phone Number: <input type="text" name="phoneNumber"  value="<?php     echo  $phone ;     ?>"/>
				</div>
				
												<div id="signUpItem" >
				Email: <input type="text" name="email"  value="<?php     echo  $email ;     ?>"/>
				</div>
				
																<div id="signUpItem" >
				Image Link: <input type="text" name="imageLink"  value="<?php     echo  $imageLink ;     ?>"/>
				</div>
				
				
				
				<input type="hidden" name="id"  value="<?php     echo  $id ;     ?>"/>
				
	
						<?php
		
			if(isset($_GET['error']))
			{
				$error = $_GET['error'] ;
				
				if($error == 1)
				{
				echo "Error Updating Personnel";
				}
			}
			
			
			if(isset($_GET['complete']))
			{
				$complete = $_GET['complete'] ;
				
				if($complete == 1)
				{
				echo "<h4> Personnel Updated </h4>";
				}
			}
		
		
		
		
		?>
				
				

				
				<div id="signUpItem" >
				<input type="submit" class="btn1"   value="Update Profile" />
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









