	
	<?php
	
	include "Functions/dbConnection.php";
	
	
	
	
	$user = $_SESSION['email'];
	
	
	$sql="select * from applicant where User =  '$user' ";
	$result=mysql_query($sql);
	
	
	$count =mysql_num_rows($result);
	
	
	if( $count == 0 )
	{
			header("location:/2011-ac32004/staylor");
	}
	
	
while($row = mysql_fetch_assoc($result))
  {
	 $phonenumber = $row['Phone_Number'] ;
	 $address = $row['Address'] ;
	 $imagelink = $row['Image_Link'] ;
	 $cvlink = $row['CV_Link'] ;
  }
	
	
	
	
	
	mysql_close();
	
	?>
	
	
	
	
	
	
	
	
	<div id="signUpBox" >
	
	<h2> Edit Profile</h2></br>
	
	
	<form name="input" action="Functions/updateApplicantProfile.php" method="post">
		

						<div id="signUpItem" >
		Phone number: <input type="text" name="phoneNumber"  value="<?php     echo  $phonenumber ;     ?>"/>
		</div>
		
								<div id="signUpItem" >
		Address: <input type="text" name="address" value="<?php     echo  $address ;     ?>"/>
		</div>
		
		
										<div id="signUpItem" >
		Image Link: <input type="text" name="image" value="<?php     echo  $imagelink ;     ?>"/>
		</div>
		
		
												<div id="signUpItem" >
		CV Link: <input type="text" name="cv" value="<?php     echo  $cvlink ;     ?>"/>
		</div>
		
		
			<div id="signUpItem" >
		<input type="submit" class="btn1"   value="Update Profile" />
		</div>
		
		

	</form>
	
	
	
	</div>

	