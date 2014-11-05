<?php
/*This is a version of Calculator 1.0 of Artem Aksenov
 * live example @ http://dutchnews.ru/phonebook/index.php?content=adcalc
 */
class ImageConverter//creates class ImageConverter
{
	private $_image;
	private $_x;//defines private property $_x of the class Calculator
	private $_y;//defines private property $_y of the class Calculator

	public function __construct($x, $y)
	{
		/*assigns properties $_x and $_y of the class Calculator
		 * to variables $x and $y relatively*/
		$this->_x = $x;
		$this->_y = $y;
	}
	
	public function plus()//A class method - sum of two fractions, defined by a user 
	{
		return $this->_x + $this->_y;
	}
	
	public function minus()//A class method - difference of two fractions, defined by a user 
	{
		return $this->_x - $this->_y;
	}
	
	public function divide()//A class method - quotient of two fractions, defined by a user 
	{
		return $this->_x / $this->_y;
	}
	
	public function multiple()//A class method - multiplication of two fractions, defined by a user
	{
		return $this->_x * $this->_y;
	}
}
//the procedure code
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	//cut the spaces at the left and right side of the input
	$x = trim($_POST['x']);
	$y = trim($_POST['y']);
}
	if(is_numeric($x))//check if the input X is a number
	{
		if(is_numeric($y))//check if the input Y is a number
		{
			$calculate = new Calculator($x,$y);
				echo "<p><h3>The sum is: </p></h3>
					<p>$x + $y = " .$calculate->plus(). "</p>";// calculating the sum of X and Y
				echo "<br>\n";
			$calculate2 = new Calculator($x,$y);
				echo "<p><h3>The difference is: </p></h3>
					<p>$x - $y = " .$calculate2->minus(). "</p>";// calculating the difference of X and Y
				echo "<br>\n";
			$calculate3 = new Calculator($x,$y);
				echo "<p><h3>The quotient is: </p></h3>
					<p>$x / $y = " .$calculate3->divide(). "</p>";// calculating the quotient of X and Y
				echo "<br>\n";
			$calculate4 = new Calculator($x,$y);
				echo "<p><h3>The multiplication is: </p></h3>
					<p>$x * $y = " .$calculate4->multiple(). "</p>";// calculating the multiplication of X and Y
				echo "<br>\n";
		} 
		else 
		{
			echo "<p><h3>Input $y must be a number</h3></p>\n";
			echo "<a href=\"calc.input.html\" target = \"self\">" ."Back to the input form". "</a>";//returning to the input form if Y is not numerical
		}
	} 
	else 
	{
		echo "<p><h3>Input $x must be a number</h3></p>\n";
			echo "<a href=\"calc.input.html\" target = \"self\">" ."Back to the input form". "</a>";//returning to the input form if X is not numerical
	}
?>