<?php
session_start();

include("../mylibrary/login.php");
$con = login();
echo "Well";
$userid=$_POST['userid'];
$password=$_POST['password'];
echo $userid;
echo $password;

$query="SELECT userid,name FROM admins where userid='$userid' AND password = PASSWORD('$password')";
$result = mysqli_query($con, $query) or die(mysqli_error($con));

if (mysqli_num_rows($result) == 0)
{
	echo "<h2>Sorry your account was not validated.</h2><br>\n";
	echo "<a href=\"admin.php\">Try again</a><br>\n";
} else {
	$_SESSION['store_admin'] = $userid;
	header("Location: admin.php");
}
?>