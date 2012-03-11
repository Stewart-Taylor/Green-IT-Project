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
			
			
			
			
			<div id="glossaryBox">
			
				<h2> Glossary </h2>
				
				
				<?php
				
					include "Functions/dbConnection.php";
					
					$sql="SELECT * FROM glossary_term";
					$result=mysql_query($sql);

					$count= mysql_num_rows($result);


					$aTermsL = array();
					$aTermsR = array();
					$i = 0;
					
					while($row = mysql_fetch_assoc($result))
					{
					
						if( $i < $count/2)
						{
							$aTermsL[$i] = $row['Term'];
						}
						else
						{
							$aTermsR[$i] = $row['Term'];
						}

						$i++;
					}
					
					
					if ($count > 2)
					{
						
					echo ' <div id="glossaryBoxLeft"> ' ;
				  
					foreach ($aTermsL as &$v) 
					{
						echo "<a href='term.php?term=$v'> " . $v . "</a>" .  "</br>";
					}
					
					echo "</div>";
					

					echo ' <div id="glossaryBoxRight"> ' ;
				  
					foreach ($aTermsR as &$v) 
					{
						echo "<a href='term.php?term=$v'> " . $v . "</a>" .  "</br>";
					}
					

					echo "</div>";
					
					
					}
				
				?>

			</div>
			
			
			
			<!--
			 <div id="glossarySearch">		
			 
			
					<form name="input" action="Functions/createTerm.php" method="post">

					<div id="loginbox_item" >
					New Term: <input type="text" name="term" /> </div>

					<div id="loginbox_item" >
					Definition: <input type="text" name="definition" /></div>
				

					<div id="loginbox_button">
					<input type="submit" value="Submit" /></div>
				</form>
			</div>
			
			-->
		  
				
				
			</div><!--end of middle content-->


			
			<div style="clear: both;">
			</div><!-- #content-->

		<footer id="footer">
			<p>Created By Stewart Taylor</p>
		</footer><!-- #footer -->



	</div><!-- #wrapper -->



</body>
</html>









