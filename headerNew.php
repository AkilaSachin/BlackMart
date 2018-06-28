<div id="headerLinksOri" style="padding:10px; font-family:Arial Black;" align="center">
    <!--input type="text"  id="search" placeholder="Search" style="float:left"-->
    <a style="font-size:24px" href="index.php" title="Home">Home</a>
    <a style="font-size:24px" href="login.php" title="Login"><img src="mynew/eCommerceAssets/images/login.png">
    Login</a>
    <a style="font-size:24px" href="signup.php" title="Register">
    Signup</a>
    <a style="font-size:24px" href="myaccount.php" title="My Account">
    <img src="mynew/eCommerceAssets/images/admin.png">My Account</a>
    <a style="font-size:24px" href="cartdetails.php" title="Cart">
    <img src="mynew/eCommerceAssets/images/cart.png">Cart &nbsp; &nbsp;</a>
    </div>
   
    <?php


if(isset($_SESSION['email'])&&isset($_SESSION['pwd']))
{
	?>


 <a href="logout.php" style="text-decoration:none;">
 <input type="button" name="signin" value="SIGN OUT" style="border-radius:5px;  color:#FFFFFF; border:0px solid #FFFFFF; background-color:#269FB2;;; font-family:'Monotype Corsiva';height:40px; box-shadow: 0px 0px 10px #CCCCCC;float:right;"></a>


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
		  <p style=" color:white;  font-family:'Monotype Corsiva'; font-size:30px; "><b>Welcome: <font style=" font-size:25px;"> &nbsp; <?php echo $row['name'];?></font></b></p>


          <?php
}
}
?>
</div>
    
    	
       

    	<!--a href="index.php" title="Home">Home</a>
    	<a href="#" title="Cart">News</a>
        <div class="dropdown">
  		<a href="#"><span>Brands</span></a>
        <div class="dropdown-content">
    			<a href="#"><img src="mynew/eCommerceAssets/images/apple.png">&nbsp; Apple</a>
    			<a href="#"><img src="mynew/eCommerceAssets/images/samsung-xxl.png">Samsung</a>
    			<a href="#"><img src="mynew/eCommerceAssets/images/htc.png">&nbsp; HTC</a>
                <a href="#"><img src="mynew/eCommerceAssets/images/sony.png">&nbsp; Sony</a>
                <a href="#"><img src="mynew/eCommerceAssets/images/microsoft.png">&nbsp; Microsoft</a>
                
  		</div>
	</div>
        <a href="#" title="Contact">Contact</a>
        <a href="about_us.php" title="About">About &nbsp;</a></div-->
        