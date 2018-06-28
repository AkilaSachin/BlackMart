<?php 

session_start();

if(!isset($_SESSION['email'])) //||(!isset($_SESSION['pwd'])))

{ 

//header('location:login.php'); 

	}

	 $email=$_SESSION['email'];

	//$pwd=$_SESSION['pwd'];
	

 ?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<header>

  <?php include ('headerNew.php'); ?>

   </div>
</header>

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

	//if(!isset($_SESSION['email']) ||(!isset($_SESSION['pwd'])))
		$query="SELECT * FROM payment_history where email='".$email."'";
		$result=mysql_query($query);
		echo $result;
		
		$row=mysql_fetch_array($result);
		/*$price=$row['email'];
		echo $price;*/
}
?>
</body>
</html>