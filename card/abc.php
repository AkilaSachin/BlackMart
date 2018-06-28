<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form action="" method="post">
<input type="submit" name="submit">

<?php
if(isset($_POST['submit']))
{
	$con = mysql_connect("localhost","root","");
	if(!$con)
	{ 
		die("Can not connect: " . mysql_error());
	}
	mysql_select_db("phpgurukulshopping",$con);
	$email='c@gmail.com';
	$sql = "INSERT INTO payment_history (email,product_description,quantity,price_total) VALUES ('$email','Sony',1,20000)";
	
	mysql_query($sql,$con);
	
	mysql_close($con);
}
?>

</body>
</html>