<center>
	<h2>Even or Odd Calculator</h2>

	<p>
		<form method="post">
			<label>Input Value :</label><br>
			<input type="text" name="input"><br><br>
			<input type="submit" name="even" value="Even">
			<input type="submit" name="odd" value="Odd">
			
		</form>
	</p>
	<?php

	error_reporting(0);

	if($_POST['even']){
		$even = $_POST['input'];

		for($i = 0; $i <= $even; $i+=2){
			echo $i." : is Even Number<br>";
		}
	}
	elseif($_POST['odd']){
		$odd = $_POST['input'];

		for($i = 1; $i <= $odd; $i=$i+2){
			echo $i." : is Odd Number<br>";
		}
	}




	?>

</center>
