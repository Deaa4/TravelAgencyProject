<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>My-tour</title>
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
<link href="stylecss.css" rel='stylesheet' type='text/css'/>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css'/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--js--> 
<script src="js/jquery.min.js"></script>

<!--/js-->
<!--animated-css-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
</head>

<body>
<?php include('function.php'); ?>
<?php include('top.php'); ?>
<!--/sticky-->
<?php include('slider.php'); ?>
<div style="height:0"></div>
<div class=category-content>
    <div class=category-sidebar>
        <table cellpadding="0" cellspacing="0">
            <tr><td><div style="background: #4169E1;box-shadow: 0 2px 5px 0 rgba(0,0,0,.26);padding: 7px;margin-left: 2px; font-size: 20px;">Category</div></td></tr>
<div style="width:1000px; margin:auto" >

<div style="width:200px; float:left">


<?php


$s="select * from category";
$cn=makeconnection();
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;

while($data=mysqli_fetch_array($result))
{
	
		echo "<tr><td style=' padding:5px;'><a href='subcat.php?catid=$data[0]'>$data[1]</a></td></tr>";

}
mysqli_close($cn);
?>

</table>

</div>

<div style="width:800px; float:left">
<table cellpadding="0px" cellspacing="0" width="1000px" style="margin-bottom:11px;">
<tr><td class="headingText">Welcome to My Tours & Travel</td></tr>
<tr><td class="paraText" width="900px">Plan and Book Your Perfect Trip.Create your dream holiday.
Experience the best of My Tour, where awe-inspiring natural beauty meets thrilling adventures and vibrant culture. 
Explore the dramatic red rock landscapes of the Colorado National Monument, hike or ski the majestic Grand Mesa, and 
conquer world-class mountain biking trails like the Kokopelli Trail. Dive into exhilarating whitewater rafting on the Colorado River or
 tee off on stunning golf courses surrounded by rugged desert vistas. Find peace and serenity in Colorado's Western Slope, then immerse 
 yourself in the charm of a bustling downtown filled with unique shops, delicious restaurants, and captivating art galleries. My Tour is 
 your perfect escape to unforgettable moments and breathtaking 
 destinations.</td><td style="background-image:url(images/13.jpg); background-repeat:no-repeat; color:#FFF; font-family:Lucida Sans Unicode, Lucida Grande, sans-serif; font-size:24px; " width="700px" height="250px" ><div style="background:linear-gradient(#09F,#096,#09F); vertical-align:text-top; padding-left:5%;  width:100%;">HAVE A GOOD TIME &nbsp;&nbsp;&nbsp; without spending a dime</div	></td></tr></table>

</div>

</div>

<div style="clear:both"></div>

<?php include('bottom.php'); ?>
</body>
</html>