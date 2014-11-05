<?php
function login()
{
	$con = mysqli_connect("localhost", "test", "test", "store") or die('couldnt connect to server');
	return $con;
}
?>