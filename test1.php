<?php
function factorial($value1)
{
	$factorial = 1;
	$count = 1;
	while($count<=$value1)
	{
		$factorial = $factorial*$count;
		$count = $count+1;
	}
	return $factorial;
}
echo "The factorial of 8 is " .factorial(8). "<br>\n";
echo "The factorial of 4 is " .factorial(4). "<br>\n";
?>