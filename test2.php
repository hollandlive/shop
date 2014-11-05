<html>
<head>
<meta charset="ISO-8859-1">
<title>Insert title here</title>
</head>
<body>
<h2>This is a test of defining a function in a separate file</h2>
<?php
include("test1.php");
echo "The first test. The factorial of 3 is" . factorial(3). "<br>\n";
?>
<h2>Now another test</h2>
<?php
echo "The factorial of 5 is" . factorial(5). "<br>\n";
?>
<h3>The end of the test</h3>
</body>
</html>