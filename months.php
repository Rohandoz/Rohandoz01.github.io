<!DOCTYPE html>
<html>
<head>
	<title>Months</title>
</head>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
<body>
	
<?php 

	$Months = ["January"=> 31,"February(leap year)"=>28,"February(Not leap year)"=>29,"March" => 31,"April" => 30,"May" =>31,"June" =>30,"July" =>31,"August"=>31,"September"=>30,"October"=>31,"November"=>30,"December"=>31];
	print_r($Months);
	function month(){
		$month = array_map("strtoupper",$months);

	
	}

	?>


	<form action="months.php" method="post">
		<p>Please choose a month</p>
		<select name="month" id="Months">
			<option value=""></option>
			<option value="January">January</option>
			<option value="February(leap year)">February</option>
			<option value="February(Not leap year)">February</option>
			<option value="March">March</option>
			<option value="April">April</option>
			<option value="May">May</option>
			<option value="June">June</option>
			<option value="July">July</option>
			<option value="August">August</option>
			<option value="September">September</option>
			<option value="October">October</option>
			<option value="November">November</option>
			<option value="December">December</option>
		</select>

		<input type="submit" name="submit" value="submit">
	</form>

	<?php 
	foreach ($month as $m => $n) {
		echo '<option value="'.$n .'">'.$m.'</option>'
			}

	 ?>

	

	<?php 

	 if (isset($_POST["submit"])) {
		print_r($_POST);
		$days =$_POST["month"];
		echo "<br>";
		echo "The month of.has $days number of days";
	}

	?>
</body>
</html>