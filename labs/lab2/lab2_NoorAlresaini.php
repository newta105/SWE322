<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php

	echo"<h1>Basics of a Calculator</h1>";
	
	function add($x, $y) {
		return($x + $y);
	}
	function substract($x, $y) {
		return($x - $y);
	}
	function divide($x, $y) {
		return($x / $y);
	}
	function multiply($x, $y) {
		return($x * $y);
	}
	
	echo "5 + 10 = " . add(5,10) . "<br>";
	echo "13 - 7 = " . substract(13,7) . "<br>";
	echo "4 * 2 = " . multiply(4,2) . "<br>";
	echo "8 / 2 = " . divide(8,2) . "<br>";
?>
</body>
</html>
