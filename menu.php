<?php

 	include('dbconnection.php');
	//if($_POST['search'] == '')
	//{
		//header('Location:index.php');
	//}
	$output = '';
	
	if(isset($_POST['search']))
	{
		$searchq = $_POST['search'];
		$searchq=preg_replace("#[^0-9a-z]#i","",$searchq);
		
		$query = mysql_query("SELECT * FROM product WHERE pro_cat LIKE '%$searchq%'") or die("Could not search!");
		$count = mysql_num_rows($query);
		if($count==0)
		{
			$output = 'There was no search results!';
		}
		else
		{
			while($row = mysql_fetch_array($query))
			{
				$product_name = $row['product_name'];
				$pro_cat = $row['pro_cat'];
				$brand = $row['brand'];
				
				if($pro_cat=='microsoft' or $pro_cat=='Microsoft')
					$output .= '<h3><a style="color: black;" href="microsoft.php"> '.$product_name.' </a></h3>';
				
				if($pro_cat=='htc' or $pro_cat=='HTC')
					$output .= '<h3><a style="color: black;" href="htc.php"> '.$product_name.' </a></h3>';
				
				if($pro_cat=='sony' or $pro_cat=='Sony')
					$output .= '<h3><a style="color: black;" href="sony.php"> '.$product_name.' </a></h3>';
					
				if($pro_cat=='samsung' or $pro_cat=='Samsung')
					$output .= '<h3><a style="color: black;" href="samsung.php"> '.$product_name.' </a></h3>';
					
				if($pro_cat=='apple' or $pro_cat=='Apple')
					$output .= '<h3><a style="color: black;" href="apple.php"> '.$product_name.' </a></h3>';
				
			}
		}
	}
 ?> 
<html>
<head>


<link rel="stylesheet" href="himanshu/vallenato.css" type="text/css" media="screen">

<link rel="stylesheet" href="himanshu/menu.css" type="text/css" media="screen">

</head>
<body>

 



<div class="topnav_main" style="border:0px solid #CC0000;">




<ul id="menu" style="width:1049px; border:0px solid #0000FF; margin-left:500px">

<li style="float:right; margin-right:40px" >


</li>

<li><a href="apple.php" class="drop">Apple</a><!-- Begin 4 columns Item -->
<div class="dropdown_5columns " style="width:200px;">
<img src="images/apple_logo.jpg" width="200" height="200">
</div>

        <!--div class="dropdown_5columns " style="width:553px;">

        

        <div class="menu_box3">

            

          

              <div class="col_1">  

                <h3><a href="entertainment.php">Televisions &amp; Projectors</a></h3>

                <ul>

                                

                            <li><a href="#">LED TV</a>            </li>

                           <li><a href="#">LCD TV</a>            </li>

                                 </li>

                </ul>   </div> 

                             <div class="col_1">  

                  </div> 

</div>

<div class="menu_add">

<a href="#"><img src="./himanshu/2670054.jpg" width="298" height="378" border="0"></a>

<!--<img src="images/01.png" width="225" height="345" />

</div>

        </div--><!-- End 4 columns container -->

    </li>

         

<li><a href="htc.php" class="drop">HTC</a><!-- Begin 4 columns Item -->
<div class="dropdown_5columns " style="width:200px;">
<img src="images/htc_logo.jpg" width="200" height="200">
</div>
    

        <!--div class="dropdown_5columns " style="width:553px;">

        

        <div class="menu_box3">

            

          

              <div class="col_1">  

                <h3><a href="laptops.php">Laptops</a></h3>

                <ul>

                </ul>   </div> 

                             <div class="col_1">  

                <h3><a href="#">Tablets/iPads</a></h3>

                <ul>

                </ul>   </div> 

                             <div class="col_1">  

                <h3><a href="#">Desktops</a></h3>

                <ul>

                </ul>   </div> 

                             <div class="col_1">  

                <h3><a href="#">Printers</a></h3>

                <ul>

                </ul>   </div> 

                             <div class="col_1">  

                <h3><a href="#">Accessories</a></h3>

                <ul>

                                

                            <li><a href="#">Headphones/Earphones</a>            </li>

                           <li><a href="#">Laptop Bags/Cover</a>            </li>

                           <li><a href="#">Peripherals</a>            </li>

                           <li><a href="#">Mouse</a>            </li>

                           <li><a href="#">Pendrives</a>            </li>

                </ul>   </div> 

</div>

<div class="menu_add">

<a href="#"><img src="./himanshu/5016220.jpg" width="298" height="378" border="0"></a>

<!--<img src="images/01.png" width="225" height="345" />>

</div>

        </div--><!-- End 4 columns container -->

    </li>

         

<li><a href="microsoft.php" class="drop">Microsoft</a><!-- Begin 4 columns Item -->
<div class="dropdown_5columns " style="width:200px;">
<img src="images/microsoft_logo.jpg" height="200" width="200">
</div>
    

        <!--div class="dropdown_5columns " style="width:553px;">

        

        <div class="menu_box3">

            

          

              <div class="col_1">  

                <h3><a href="cameras.php">Digital Cameras</a></h3>

                <ul>

                </ul>   </div> 

                             <div class="col_1">  

                <h3><a href="#">Digital SLR Cameras</a></h3>

                <ul>

                </ul>   </div> 

                             <div class="col_1">  

                <h3><a href="#">Handycams</a></h3>

                <ul>

                </ul>   </div> 

                             

</div>

<div class="menu_add">

<a href="#"><img src="./himanshu/8927258.jpg" width="298" height="378" border="0"></a>

<!--<img src="images/01.png" width="225" height="345" />>

</div>

        </div--><!-- End 4 columns container -->

    </li>

         

<li><a href="samsung.php" class="drop">Samsung</a><!-- Begin 4 columns Item -->

    <div class="dropdown_5columns align_right" style="width:200px;">
    <img src="images/samsung_logo.jpg" width="200" height="200">    
    </div>

        <!--div class="dropdown_5columns align_right" style="width:553px;">

        

        <div class="menu_box3">

            

          

              <div class="col_1">  

                <h3><a href="music.php">CD Cassette Recorder</a></h3>

                <ul>

                </ul>   </div> 

                             <div class="col_1">  

                <h3><a href="#">Hi-fis (Mini &amp; Micro)</a></h3>

                <ul>

                </ul>   </div> 

                             <div class="col_1">  

                <h3><a href="#">MP3 players/ iPods</a></h3>

                <ul>

                </ul>   </div> 

                             <div class="col_1">  

                <h3><a href="#">Speakers</a></h3>

                <ul>

                </ul>   </div> 

                             <div class="col_1">  

                <h3><a href="#">Accessories</a></h3>

                <ul>

                                    <li> <a href="#">Headphones/Earphones</a></li>

                </ul>   </div> 

</div>

<div class="menu_add">

<a href="#"><img src="./himanshu/8875285.jpg" width="298" height="378" border="0"></a>

<!--<img src="images/01.png" width="225" height="345" />>

</div>

        </div--><!-- End 4 columns container -->

    </li>

         

<li><a href="sony.php" class="drop">Sony</a><!-- Begin 4 columns Item -->

    <div class="dropdown_5columns align_right" style="width:200px;">
    <img src="images/sony_logo.jpg" width="200" height="200">
    </div>

        <!--div class="dropdown_5columns align_right" style="width:736px;">

        

        <div class="menu_box6">

            

          

              <div class="col_1">  

                <h3><a href="#">Health &amp; Beauty</a></h3>

                <ul>

                                

                            <li><a href="#">Hair Dryers</a>            </li>

                           <li><a href="#">Hair Styler</a>            </li>

                          </div> 

                             <div class="col_1">  

                <h3><a href="#">Ceiling Fans</a></h3>

                <ul>

                </ul>   </div> 

                             <div class="col_1">  

                <h3><a href="#">Laundry &amp; Dishwashers</a></h3>

                <ul>

                                

                            <li><a href="#">Tumble Dryers</a>            </li>

                           <li><a href="#">Washing Machines</a>

                        <ul>

                        <li style="margin-left:5px;"><a href="#"><!--<img src="images/arrow_pink.png" border="0" width="5" height="7" /> &nbsp;> Semi Automatic </a></li>

                        <li style="margin-left:5px;"><a href="#"><!--<img src="images/arrow_pink.png" border="0" width="5" height="7" /> &nbsp;> Front Loading Fully Automatic </a></li>

                        <li style="margin-left:5px;"><a href="#"><!--<img src="images/arrow_pink.png" border="0" width="5" height="7" /> &nbsp;> Top Loading Fully Automatic</a></li>

                        </ul>

            </li>

                           <li><a href="#">Dish Washer</a>            </li>

                </ul>   </div> 

                             <div class="col_1">  

                <h3><a href="#">Small Appliances</a></h3>

                <ul>

                                

                            <li><a href="#">Water Heaters</a>            </li>

                           <li><a href="#">Vacuum Cleaners</a>            </li>

                           <li><a href="#">Irons</a>

                        <ul>

                        <li style="margin-left:5px;"><a href="#"><!--<img src="images/arrow_pink.png" border="0" width="5" height="7" /> &nbsp;> Steam Irons</a></li>

                        <li style="margin-left:5px;"><a href="#"><!--<img src="images/arrow_pink.png" border="0" width="5" height="7" /> &nbsp;> Dry Irons</a></li>

                        </ul>

            </li>

                           <li><a href="#">Room Heater</a>            </li>

                </ul>   </div> 

                             <div class="col_1">  

                <h3><a href="#">Refrigeration</a></h3>

                <ul>

                                

                            <li><a href="#">Direct Cool Refrigerator</a>            </li>

                           <li><a href="#">Frost Free Refrigerator</a>            </li>

                           <li><a href="#">Side by Side Refrigerators</a>            </li>

                </ul>   </div> 

                             <div class="col_1">  

                <h3><a href="#">Air Conditioners</a></h3>

                <ul>

                                

                            <li><a href="#">Split ACs</a>            </li>

                           <li><a href="#">Window Acs</a>            </li>

                </ul>   </div> 

                             <div class="col_1">  

                <h3><a href="#">Cooler</a></h3>

                <ul>

                </ul>   </div> 

                             <div class="col_1">  

                <h3><a href="#">Sewing Machine</a></h3>

                <ul>

                </ul>   </div> 

</div>

<div class="menu_add">

<a href="#"><img src="./himanshu/4344304.jpg" width="298" height="378" border="0"></a>

<!--<img src="images/01.png" width="225" height="345" />>

</div>

        </div--><!-- End 4 columns container -->

    </li>

         

<!--li style="margin-right:0px;"><a href="#" class="drop">Kitchen Appliances</a><!-- Begin 4 columns Item >

    

        <div class="dropdown_5columns align_right" style="width:740px;">

        

        <div class="menu_box7">

            

          

              <div class="col_1">  

                <h3><a href="#">Food Preparation</a></h3>

                <ul>

                                

                            <li><a href="#">Food Processor</a>            </li>

                           <li><a href="#">Juicer Mixer Grinder</a>            </li>

                           <li><a href="#">Mixer Grinder</a>            </li>

                           <li><a href="#">Juicer</a>            </li>

                           <li><a href="#">Hand Blender/Chopper</a>            </li>

                </ul>   </div> 

                             <div class="col_1">  

                <h3><a href="#">Cooking &amp; Kitchen</a></h3>

                <ul>

                                

                            <li><a href="#">Free Standing Cooking/Cooking range</a>            </li>

                           <li><a href="#">Rice Cookers &amp; Induction Cookers</a>            </li>

                           <li><a href="#">OTG</a>            </li>

                           <li><a href="#">Cook Tops &amp; Chimneys</a>            </li>

                           <li><a href="#">Air Fryer</a>            </li>

                           <li><a href="#">Vegetable And Fruit Purifier</a>            </li>

                </ul>   </div> 

                             <div class="col_1">  

                <h3><a href="#">Water Purifiers</a></h3>

                <ul>

                                

                            <li><a href="#">RO</a>            </li>

                           <li><a href="#">Filters</a>            </li>

                           <li><a href="#">Storage Filter</a>            </li>

                </ul>   </div> 

                             <div class="col_1">  

                <h3><a href="#">Microwaves</a></h3>

                <ul>

                                

                            <li><a href="#">Solo</a>            </li>

                           <li><a href="#">Grill</a>            </li>

                          

                </ul>   </div> 

                             <div class="col_1">  

                <h3><a href="#">Coffee Makers/Tea Makers</a></h3>

                <ul>

                </ul>   </div> 

                             

                             <div class="col_1">  

                <h3><a href="#">Toasters &amp; Grillers</a></h3>

                <ul>

                </ul>   </div> 

                             <div class="col_1">  

                <h3><a href="#">Electric Jug(heater)/Travel Kettles</a></h3>

                <ul>

                </ul>   </div> 

</div>

<div class="menu_add">

<a href="#"><img src="./himanshu/6537495.jpg" width="298" height="378" border="0"></a>

<!--<img src="images/01.png" width="225" height="345" />>

</div>

        </div><!-- End 4 columns container >

    </li>

         

<li style=" width:80px;"><a href="#" class="drop">Gaming</a><!-- Begin 4 columns Item >

    

        <div class="dropdown_5columns align_right" style="width:553px;">

        

        <div class="menu_box3">

            

          

              <div class="col_1">  

                <h3><a href="game.php">Game Consoles</a></h3>

                <ul>

                </ul>   </div> 

                              

</div>

<div class="menu_add">

<a href="#"><img src="./himanshu/9736670.jpg" width="298" height="378" border="0"></a>

<!--<img src="images/01.png" width="225" height="345" />>

</div>

        </div><!-- End 4 columns container >

    </li-->

  

<li><a href="mobiles.php" class="drop">Accessories</a><!-- Begin 4 columns Item -->

    
		<div class="dropdown_5columns align_right" style="width:200px;">
        <!--div class="dropdown_5columns " style="width:200px;"-->

        

        <div class="menu_box3">

            

          

              <div class="col_1">  

                <h3><a href="mobiles.php">Headphones/Earphones</a></h3>

                <ul>

                </ul>   </div> 

                             <div class="col_1">  

                <h3><a href="#">Batteries &amp; Chargers</a></h3>

                <ul>

                </ul>   </div> 

                             <div class="col_1">  

                <h3><a href="#">Mobile Cover</a></h3>

                <ul>

                </ul>   </div> 

                             <div class="col_1">  

                <h3><a href="#">Memory Card</a></h3>

                <ul>

                </ul>   </div> 

                             <div class="col_1">  

                <h3><a href="#">Bluetooth</a></h3>

                <ul>

                </ul>   </div> 

                             <!--div class="col_1">  

                <h3><a href="#">Accessories</a></h3>

                <ul>

                                    <li> <a href="#">Headphones/Earphones</a></li>

                                    

                            <li><a href="#">Batteries &amp; Chargers</a>            </li>

                           <li><a href="#">Mobile Cover</a>            </li>

                           <li><a href="#">Memory Card</a>            </li>

                           <li><a href="#">Bluetooth</a>            </li>

                </ul>   </div> 

</div>

<!--div class="menu_add">

<a href="#"><img src="./himanshu/5606522.jpg" width="298" height="378" border="0"></a>

<!--<img src="images/01.png" width="225" height="345" />>

</div-->

        </div><!-- End 4 columns container -->

    </li>   
</ul>
  </div>
<div style="width:100%; background-color:#269FB2; height:auto; border:1px solid #000000; " align="center"> 
<form action="index.php" name="searchForm" method="post">
<input type="text" id="search" name="search" placeholder="search" >
<input type="submit" name="find" value="Search">
</form>
<?php
print("$output");
?>
  </div>
</body>
  </html>

  