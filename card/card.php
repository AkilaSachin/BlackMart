<?php 

session_start();

if(!isset($_SESSION['email']) ||(!isset($_SESSION['pwd'])))

{ 

header('location:login.php'); 

	}

	 $email=$_SESSION['email'];

	$pwd=$_SESSION['pwd'];

 ?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Payment</title>
    
    
    
    
        <link rel="stylesheet" href="css/style.css">

    
    
    
  </head>

  <body>

    <body>
  <form action="../invoice.php" name="card" method="post">
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
    
      <input id="input-button" type="submit" value="Submit"/>
    </form>
  </div> <!-- end of form-container -->
  <?php 

		     include('dbconnection.php');

		

             $query="select * from shopping_cart where email='".$email."'";

			 $result=mysql_query($query);

			 $i=1;

            $amt=0;		

			while($row=mysql_fetch_array($result))

			{
			$pro=$row['product_name'];
			$price=$row['price']*$row['quantity'];
			$quan=$row['quantity'];
			$add="insert into payment_history(email, product-description, quantity, price_total) values('$email','$pro','$quan','$price')";
			//$result=mysqli_query($bd,$add);
	    
?>


            
 
   
<script src="js/index.js"></script>

    
    
    
  </body>
</html>
