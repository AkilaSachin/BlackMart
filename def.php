<?php 

session_start();

if(!isset($_SESSION['email']) ||(!isset($_SESSION['pwd'])))

{ 

header('location:login.php'); 

	}

	 $email=$_SESSION['email'];

	$pwd=$_SESSION['pwd'];

 ?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Payment</title>
<link rel="stylesheet" type="text/css" href="cardstyle.css">
<script type="text/javascript" src="index.js">
</script>
</head>

<body>
<!--form action="" method="post">
<input type="submit" name="submit"-->

<form action="" name="card" method="post">
    <div class="form-container">
      <div class="personal-information">
        <h1>Payment Information</h1>
      </div> <!-- end of personal-information -->
      <input id="input-field" type="text" name="streetaddress" required="required" autocomplete="on" maxlength="45" placeholder="Streed Address"/>

      <input id="column-left" type="text" name="city" required="required" autocomplete="on" maxlength="20" placeholder="City"/>

      <input id="column-right" type="text" name="zipcode" required="required" autocomplete="on" pattern="[0-9]*" maxlength="5" placeholder="ZIP code"/>
      
      <input id="input-field" type="email" name="email" required="required" autocomplete="on" maxlength="40" placeholder="Email"/>
    
    <div class="card-wrapper"></div>
      <input id="column-left" type="text" name="first-name" placeholder="First Name"/>
      
      <input id="column-right" type="text" name="last-name" placeholder="Surname"/>
      
      <input id="input-field" type="text" name="number" placeholder="Card Number" maxlength="16"/>
     
      <input id="column-left" type="text" name="expiry" placeholder="MM / YY"/>
        
      <input id="column-right" type="text" name="cvc" placeholder="CCV" maxlength="3"/>
    
      <input name="input-button" id="input-button" type="submit" value="Submit"/>
    </form>
  </div> <!-- end of form-container -->
<?php
include ('headerNew.php'); 
if(isset($_POST['input-button']))
{
	/*$con = mysql_connect("localhost","root","");
	if(!$con)
	{ 
		die("Can not connect: " . mysql_error());
	}
	mysql_select_db("phpgurukulshopping",$con);*/
	
	include('dbconnection.php');

	
		$query="SELECT * FROM shopping_cart where email='".$email."'";
		$result=mysql_query($query);
		
		while($row=mysql_fetch_array($result))

			{
				$sno=$row['ser_no'];
				$mail=$row['email'];
				$product=$row['product_name'];
				$quan=$row['quantity'];

				$price=$row['price']*$row['quantity'];
			}
		
		
		
		
		
		echo $sno;
		echo $mail;
		echo $product;
		echo $quan;
		echo $price;
		
		$con = mysql_connect("localhost","root","");
	if(!$con)
	{ 
		die("Can not connect: " . mysql_error());
	}
	mysql_select_db("phpgurukulshopping",$con);

	//$email='c@gmail.com';
	$sql = "INSERT INTO payment_history (ser_no,email,product_description,quantity,price_total) VALUES ('$sno','$mail','$product','$quan','$price')";
	
	mysql_query($sql,$con);
	
	mysql_close($con);


}

?>
</body>
</html>