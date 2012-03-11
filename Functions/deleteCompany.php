<?php
ob_start();

include "dbConnection.php";

$name =$_GET['name']; 






		$query = "call deleteCompany('$name') ";




// echo $query;

mysql_query($query)  or die(header("location:/2011-ac32004/staylor/companys.php?error=1" ) );

mysql_close();

header("location:/2011-ac32004/staylor/companys.php?complete=1" );

ob_end_flush();
?>