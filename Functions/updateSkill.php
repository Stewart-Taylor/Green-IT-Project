<?php
ob_start();

include "dbConnection.php";

$id = $_POST['skill_id']; 
$title = $_POST['title']; 
$level = $_POST['level'];
$description = $_POST['description']; 







if(isset($_SESSION['staff']))
{
		$query = "call updateVacancy( $id , '$title'  ,  '$description ' , '$contractLength'  ,  $hours  , $salary  , '$workType'    ) ";
}
else
{
		$query = "call applicant_UpdateSkill( $id , '$title'  ,  '$level ' , '$description'   ) ";
		
		echo $query;
		
		mysql_query($query)  or die(header("location:/2011-ac32004/staylor/applicantEditSkills.php?error=1"  )  );

		mysql_close();

header("location:/2011-ac32004/staylor/applicantEditSkills.php?complete=1"    );
		
}



//$query =  " UPDATE company SET Phone_Number = '$phone' , Address ='$address' , Website ='$website' , Company_Description ='$description'  , Company_Logo ='$imageLink'  WHERE User = '$user' " ;

//$query = "call company_updateVacancy( $id , '$title'  ,  '$description ' , '$contractLength'  ,  $hours  , $salary  , '$workType'    ) ";


//echo $query;

// mysql_query($query)  or die(header("location:/2011-ac32004/staylor/editVacancy.php?error=1&job_id=" . $id  )  );

// mysql_close();

// header("location:/2011-ac32004/staylor/editVacancy.php?complete=1&job_id=" . $id    );

ob_end_flush();
?>