	
	<?php
	
	include "Functions/dbConnection.php";
	
	
	
	
	$user = $_SESSION['email'];
	
	
	$sql="select * from company where User =  '$user' ";
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
	 $website = $row['Website'] ;
	 $description = $row['Company_Description'] ;
	 $image = $row['Company_Logo'] ;
  }
	
	
	
	
	
	mysql_close();
	
	?>
	
	
	
	
	
	
	
	
	<div id="signUpBox" >
	
	<h2> Edit Company Profile</h2></br>
	
	
	<form name="input" action="Functions/updateCompanyProfile.php" method="post">
		

												<div id="signUpItem" >
		Website: <input type="text" name="website" value="<?php     echo  $website ;     ?>"/>
		</div>
		
		
						<div id="signUpItem" >
		Phone number: <input type="text" name="phoneNumber"  value="<?php     echo  $phonenumber ;     ?>"/>
		</div>
		
				<div id="signUpItem" >
		Company Logo (Link): <input type="text" name="imageLink"  value="<?php     echo  $image ;     ?>"/>
		</div>
		
								<div id="signUpItem" >
		Address: </br> <textarea  name="address"  cols="30" rows="5"><?php     echo  $address ;     ?> </textarea> 
		
		</div>
		

												<div id="signUpItem" >
		description:</br> <textarea  name="description"  cols="30" rows="5"><?php     echo  $description ;     ?> </textarea>   
		</div>
		
		
			<div id="signUpItem" >
		<input type="submit" class="btn1" value="Update Profile" />
		</div>
		
		

	</form>
	
	
	
	</div>

	