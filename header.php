<div id="headerLinksOri">
	<a href="index.php"><img src="images/LOGO.PNG" height="100px" width="150px"></a>
	<a href="index.php" title="Home">
    &nbsp; Home</a>
    
    <a href="login.php" title="Login"><img src="mynew/eCommerceAssets/images/login.png">
    &nbsp; Login</a>
    
    <a href="signup.php" title="Register">
    &nbsp; Signup</a>
    
    <a href="myaccount.php" title="My Account">
    <img src="mynew/eCommerceAssets/images/admin.png"> &nbsp; My Account</a>
    
    <a href="#" title="Checkout">Checkout</a>
    
    <a href="delivery.php" title="Delivery">
    <img src="mynew/eCommerceAssets/images/delivery.png"> &nbsp; Delivery</a>
    
    <a href="cartdetails.php" title="Cart">
    <img src="mynew/eCommerceAssets/images/cart.png"> &nbsp; Cart &nbsp;</a>
    </div>



<?php


if(isset($_SESSION['email'])&&isset($_SESSION['pwd']))
{
	?>


 <a href="logout.php" style="text-decoration:none;">
 <input type="button" name="signin" value="SIGN OUT" style="border-radius:5px;  color:#FFFFFF; border:0px solid #FFFFFF; background-color:#269FB2;;; font-family:'Monotype Corsiva';height:25px; box-shadow: 0px 0px 10px #CCCCCC;float:right;"></a>


 <?php
}
else
{
	?>
    <!--a href="login.php" style="text-decoration:none;">
    <input type="button" name="signin" value="SIGN IN" style="border-radius:5px; background-color:#269FB2;; border:0px solid #FFFFFF; font-family:'Monotype Corsiva'; height:25px; color:#FFFFFF; box-shadow: 0px 0px 10px #CCCCCC;"></a-->
   <?php
    }
?>


 
</div><!--menu close-->
<div style="height:80px; width:490px; border:0px solid #FF0000; float:left;" align="center">
  <strong style="color:#FFFFFF; font-size:32px; font-family:"Courier New", Courier, monospace; margin-top:0px;" align="center"><b></b></strong>

</div>


<div style="border:0px solid #FF0000; width:400px; margin-top:30px; height:50px; float:right;" align="right">

<?php
include 'dbconnection.php';

if(isset($_SESSION['email'] )&& isset($_SESSION['pwd']))
{

$email=$_SESSION['email'];
    $query="select * from user_details where email='$email'";
			 $result=mysql_query($query);
			while($row=mysql_fetch_array($result))

	      {
		  ?>
		  <p style=" color:rgba(88,239,44,1.00); font-family:'Monotype Corsiva'; font-size:40px;"><b>Welcome: <font style=" font-size:30px;"> &nbsp; <?php echo $row['name'];?></font></b></p>


          <?php
}
}
?>
</div>


</div><!--right close-->

</div><!--main close-->