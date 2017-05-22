
<div class=" col-md-offset-10 sidebar">
			DEBUG MENU: <br>
		
		
		<?php 
		  for ($i = 1; $i <= count($debug_mass); $i++) 
		  { 
		    echo $debug_mass[$i]."<br>"; 
		    
		  } 
		  echo "<hr>";
		  print_r($_POST) ;
		?>

		
		
</div>