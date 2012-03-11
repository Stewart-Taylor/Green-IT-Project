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
			
			
			
			
			
			
			
			$sql="select * from company_profileview  ";
			$result=mysql_query($sql);
			
			
			$count =mysql_num_rows($result);
			
			
			if( $count == 0 )
			{
					header("location:/2011-ac32004/staylor");
			}
			
			
		while($row = mysql_fetch_assoc($result))
		  {
				$description = $row['Company_Description'] ;
				$website = $row['Website'] ;
				$phoneNumber = $row['Phone_Number'] ;
				$logo = $row['Company_Logo'] ;
				$house = $row['House'] ;
				$street = $row['Street'] ;
				$city = $row['City'] ;
				$postcode = $row['Postcode'] ;
		  }
			
			
			
			
			
			mysql_close();
			
			?>
			
			
			
			
			
			
			
			
			<div id="signUpBox" >
			
			<h2> Edit Company Profile</h2></br>
			
			
			<form name="input" action="Functions/updateCompanyProfile.php" method="post">
				

												<div id="signUpItem" >
				Company Description:</br> <textarea  name="description"  rows="5" cols="30"><?php     echo  $description ;     ?></textarea>
				</div>
				
				<div id="signUpItem" >
				Website: <input type="text" name="website"  value="<?php     echo  $website ;     ?>"/>
				</div>
				
				
								
																<div id="signUpItem" >
				Phone Number: <input type="text" name="phoneNumber"  value="<?php     echo  $phoneNumber ;     ?>"/>
				</div>
				
				
								<div id="signUpItem" >
				Logo: <input type="text" name="logo"  value="<?php     echo  $logo ;     ?>"/>
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









