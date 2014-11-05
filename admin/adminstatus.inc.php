<?php
if(isset($_SESSION['store_admin']))
{
	echo "<h2>Current Store Status:</h2>\n";
	echo "<table width=\"100%\" cellpadding=\"1\" border=\"1\">\n";
	$query = "SELECT * FROM products";
	$result = mysqli_query($con, $query);
	$totprods = mysqli_num_rows($result);
	echo "<tr><td>Products in store</td><td>$totprods</td></tr>\n";
	
	$query="SELECT * from products where quantity = 0";
	$result = mysqli_query($con, $query);
	$totout = mysqli_num_rows($result);
	
	echo "<tr><td>Products out of stock</td><td>$totout</td></tr>\n";
	
	$query = "SELECT * FROM orders WHERE status = 'pending'";
	$result = mysqli_query($con, $query);
	$totpending = mysqli_num_rows($result);
	echo "<tr><td>Orders Pending</td><td>$totpending</td></tr>\n";
	echo "</table>\n";	
}
?>