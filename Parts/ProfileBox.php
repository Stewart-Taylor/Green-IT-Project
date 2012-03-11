		<?php 

		echo '	<div id="profileBoxMini">	';
		
		if(isset($_SESSION['Company_ID']))
		{
			echo '<h3>Company	</h3>';
		}
		else
		{
		   echo '<h3>Applicant</h3>';
		}
		
		
		
	echo " 	<a href='EditProfile.php '     >	<h3> My Account </h3> </a> ";
		echo '		<a href="Logout.php">Logout</a> ';
		echo "		</div> ";




?>



	