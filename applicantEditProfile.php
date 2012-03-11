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
			
			
			
			
			if(isset($_SESSION['applicant']))
			{
				if( $_SESSION['applicant'] == true)
				{
				
				$sql="select * from applicant_profileview  ";
				
				}
			}
			
			if(isset($_SESSION['staff']))
			{
				if( $_SESSION['staff'] == true)
				{
				
					if(isset($_GET['id']))
					{
						$id = $_GET['id'] ;
						$sql="select * from staff_applicantview where Applicant_ID = $id  ";
				
						
						
					}
					else
					{
					
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
			
			
		while($row = mysql_fetch_assoc($result))
		  {
				$firstName = $row['First_Name'] ;
				$surname = $row['Second_Name'] ;
				$phoneNumber = $row['Phone_Number'] ;
				$email = $row['Email'] ;
				$house = $row['House'] ;
				$street = $row['Street'] ;
				$city = $row['City'] ;
				$postcode = $row['Postcode'] ;
				$imagelink = $row['Image_Link'] ;
				$cvlink = $row['CV_Link'] ;
		  }
			
			
			
			
			

			
			?>
			
			
			
			
			
			
			
			
			<div id="signUpBox" >
			
			<h2> Edit Profile</h2></br>
			
			
			<form name="input" action="Functions/updateApplicantProfile.php" method="post">
				
				
				<?php
					if(isset($_GET['id']))
					{ 
						echo ' <input type="hidden" name="id"  value="' .$id . '"/>';
					}
				?>
				
				
				<div id="signUpItem" >
				First Name: <input type="text" name="firstname"  value="<?php     echo  $firstName ;     ?>"/>
				</div>
				
				<div id="signUpItem" >
				Surname: <input type="text" name="surname"  value="<?php     echo  $surname ;     ?>"/>
				</div>
				
				
								
																<div id="signUpItem" >
				Email: <input type="text" name="email"  value="<?php     echo  $email ;     ?>"/>
				</div>
				
				
								<div id="signUpItem" >
				Phone number: <input type="text" name="phoneNumber"  value="<?php     echo  $phoneNumber ;     ?>"/>
				</div>
				
												<div id="signUpItem" >
				House: <input type="text" name="house"  value="<?php     echo  $house ;     ?>"/>
				</div>
				
																<div id="signUpItem" >
				Street: <input type="text" name="street"  value="<?php     echo  $street ;     ?>"/>
				</div>
				
																<div id="signUpItem" >
				City: <input type="text" name="city"  value="<?php     echo  $city ;     ?>"/>
				</div>
				
																<div id="signUpItem" >
				Postcode: <input type="text" name="postcode"  value="<?php     echo  $postcode ;     ?>"/>
				</div>

						
				
				
												<div id="signUpItem" >
				Image Link: <input type="text" name="image" value="<?php     echo  $imagelink ;     ?>"/>
				</div>
				
				
														<div id="signUpItem" >
				CV Link: <input type="text" name="cv" value="<?php     echo  $cvlink ;     ?>"/>
				</div>
				
				
				
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









