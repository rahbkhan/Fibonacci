<!DOCTYPE html>
<html>

<head>
	<title>PHP Fibonacci Number Generator</title>
</head>

<body>
	
	<?php
		$n = $_POST["number"];
	
		$f_1 = 0;
		$f_2 = 1;
		$f_3 = $f_2 + $f_1;
		
		if($n <= 1) {
			
			echo "The Fibonacci number for $n is ". $f_1 . "!";
			echo '<script type="text/javascript">alert("Play Again!"); </script>';
			
		}
		else if($n == 2) {
			
			echo "The Fibonacci number for $n is ". $f_2 . "!";
			echo '<script type="text/javascript">alert("Play Again!"); </script>';
			
		}
		else if($n == 3) {
			
			echo "The Fibonacci number for $n is ". $f_3 . "!";
			echo '<script type="text/javascript">alert("Play Again!"); </script>';
		
		}
		else {
			echo $f_1 . "<br />";
			echo $f_2 . "<br />";
			echo $f_3 . "<br />";
			for($i = 3; $i < $n; ++$i) {
				$f_1 = $f_2;
				$f_2 = $f_3;
				$f_3 = $f_2 + $f_1;
				echo $f_3 . "<br />";
			}
			
			echo "The Fibonacci number for $n is ". $f_3 . "!";
			echo '<script type="text/javascript">alert("Play Again!"); </script>';
	
		}
	?>
	
	<HEAD>
		<META http-equiv="refresh" content="0; fibonacci.html">
	</HEAD>
</body>

</html>