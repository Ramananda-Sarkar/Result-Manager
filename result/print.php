<?php

	$rama=$_POST['roll'];
	$y=$_POST['yer'];
	$bo=$_POST['boad'];
	
	include("connect.php");
	
		
		if($rama!=$result['Roll'] or $y!=$result['Year'] or $bo!=$result['Board'])
		{ 
			include("match.php");
		}

		else
		{
			include("result.php");
		}
?>

