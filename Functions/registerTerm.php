<?php
ob_start();


include "dbConnection.php";

// username and password sent from form 
$term = $_POST['term']; 
$definition = $_POST['definition']; 






//To protect MySQL injection 
$term = stripslashes($term);
$definition = stripslashes($definition);

$term = mysql_real_escape_string($term);
$definition = mysql_real_escape_string($definition);



echo $term . "</br>";
echo $definition . "</br>";



$query = " CALL createTerm( '$term' , '$definition' );";


echo $query;
mysql_query($query) or die(  header("location:/2011-ac32004/staylor/createTerm.php?error=1" ));



mysql_close();

header("location:/2011-ac32004/staylor/createTerm.php?complete=1" );


ob_end_flush();
?>