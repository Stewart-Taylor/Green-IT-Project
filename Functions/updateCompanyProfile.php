<?php
ob_start();

include "dbConnection.php";

$phone =$_POST['phoneNumber']; 
$website =$_POST['website'];
$description =$_POST['description'];
$imageLink =$_POST['logo'];

$house = $_POST['house']; 
$street = $_POST['street']; 
$city = $_POST['city']; 
$postcode = $_POST['postcode']; 

				if(isset($_POST['name']))
				{
					$name =  $_POST['name'];
					
					$query = "call updateCompanyProfile( '$name' ,'$phone'  , '$description' , '$imageLink'  , '$website'   ,  '$house'  ,   '$street' ,  '$city'  ,   '$postcode' ) ";
					
					mysql_query($query)  or die(header("location:/2011-ac32004/staylor/editCompany.php?error=1&name=" . $name   ) );

					mysql_close();

					
					header("location:/2011-ac32004/staylor/editCompany.php?complete=1&name=" . $name );
					
					
				}
				else
				{
				
					$query = "call company_updateProfile( '$phone'  , '$description' , '$imageLink'  , '$website'   ,  '$house'  ,   '$street' ,  '$city'  ,   '$postcode' ) ";
					
					
					
					mysql_query($query)  or die(header("location:/2011-ac32004/staylor/companyEditProfile.php?error=1" ) );

mysql_close();

header("location:/2011-ac32004/staylor/companyEditProfile.php?complete=1" );
				}









//$query =  " UPDATE company SET Phone_Number = '$phone' , Address ='$address' , Website ='$website' , Company_Description ='$description'  , Company_Logo ='$imageLink'  WHERE User = '$user' " ;

//$query = "call company_updateProfile( '$phone'  , '$description' , '$imageLink'  , '$website'   ,  '$house'  ,   '$street' ,  '$city'  ,   '$postcode' ) ";


// echo $query;



ob_end_flush();
?>