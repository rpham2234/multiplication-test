<!DOCTYPE html>
<html>
	<head>
		<title>Multiplication Test Result</title>
		<link rel="stylesheet" href="lab2.css">
	</head>
	<body>
		<h1>Multiplication Test Result!</h1>
		<h2><?php 
			$number1 = $_POST["number1"];
			$number2 = $_POST["number2"];
			$number3 = $_POST["number3"];

			if ($number1 * $number2 == $number3) {
				echo "Good job";
			} else {
				echo "Correct answer is ".$number1*$number2;
			}
		?></h2>
	
		<form method="POST" action="lab2.php">
			<input type="submit" value="Try Again" />
		</form>
	</body>
</html>
