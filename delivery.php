<?php session_start();?>

<!DOCTYPE html>

<html>

<head>

<title>BlackMart Shopping/Delivery</title>

<link href="themes/1/js-image-slider.css" rel="stylesheet" type="text/css" />

 <script src="themes/1/js-image-slider.js" type="text/javascript"></script>

 <link href="generic.css" rel="stylesheet" type="text/css" />

 <script type="text/javascript" src="clients.js"></script>

<link href="mynew/eCommerceAssets/styles/eCommerceStyle.css" rel="stylesheet" type="text/css">

</head>







<body>



<div style="width:100%; height:auto;">



   <header>

  <?php include ('headerNew.php'); ?>

   </div>
</header>
<div style="width:100%; height:200px; background-image:url(images/banner.jpg); background-repeat:no-repeat; background-position:center">
</div>
  <!--menu--> <div style="height:auto; width:100%; background-color:#269FB2; border:0px solid #269FB2;">

    <?php include ('menu.php'); ?>

   </div><!--menu close-->

  

  

  <!--cc--><div style="height:auto; width:100%;border:0px solid #269FB2;">

  

  <!--sliderall--> <div style="height:328px; margin:auto; width:1050px; border:0px solid #990000;  ">

       <?php include ('slider.php');?>

       

                  </div><!--sliderall close-->

 

  

  

 

<!--slider down data-->            

            <table style="height:auto; width:1050px; border-bottom:10px;  margin-top:20px; margin:auto; background-color:#FFFFFF; border:0px solid #000000; " align="center">

            <tr><td style=" width:460px;  border:#99CC00 0px solid; " align="center" >

	


<h4>
We have partnered with multiple courier companies to cater to our delivery needs. A professional courier company is less inclined to make any kinds of errors or mistakes, thus meeting our criteria of being a great experience for our customers.
</h4>

<h4>
Our deliveries usually complete within 1-2 working days but we have specified the delivery period as 2-4 working days to ensure that you do not get disappointed in case of unexpected external factors such as political rallies, bad weather conditions, seasonal traffic surges etc…
</h4>

<h4>
As mentioned in the checkout page, Delivery Is Available All Over Sri Lanka for a reasonable and nominal fee.
</h4>


        

      </td></tr></table><!--slider down close-->

            

         <div style="height:30px; width:1050px; margin:auto; border:0px solid #000000;">

         <?php include('marquee.php'); ?>

        

        </div>

         

       <!--footer--><div style="width:100%; background-color:#414040; height:150px; border:1px solid #000000; ">

         <?php include('footer.php'); ?>

         </div><!--footer close-->

     </div> <!--center close-->

           </div><!--main close-->

           





</body>

</html>





