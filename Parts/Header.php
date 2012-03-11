<div id="header">

	


	<a href="/2011-ac32004/staylor/" >
		<div id = "logobox">
			<img src="Images/Logo.png" alt="Logo" />
		</div>
		</a>

		
		<div id="tabMenu">	
		
	
			

			
		<?php 
				session_start();
			if(isset($_SESSION['user']))
			{
			
				?>
				
							<a href="/2011-ac32004/staylor/glossary.php">
				<div id="menuTab">	
				<h3>Glossary</h3>
				</div>
			</a>
				
				
							<a href="/2011-ac32004/staylor">
				<div id="menuTab">	
				<h3>Actions</h3>
				</div>
			</a>	
			
			<?php
			
			
				echo '<a href="logout.php" >  ';
				echo '<div id="menuTab">	';
				echo ' <h3> Logout </h3> ';
				echo '</div>';
				echo '</a>';
				

				
			}
		?>
		
		
		</div>
		
	
		
</div>


	