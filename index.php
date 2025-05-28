<!DOCTYPE html>
<html>
<head>
<title></title>
<link href="css/owl.carousel.css" rel='stylesheet' type='text/css'/>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css'/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript">
    function hideURLbar() {
        window.scrollTo(0, 1);
    }
    addEventListener("load", function() { 
        setTimeout(hideURLbar, 0); 
    }, false);
</script>

<style>
a {
    font-size: 100%;
    text-decoration: none;
    vertical-align: baseline;
    padding: 0;
    background: 0 0;
    color: #41b7d8;
}
lt a {
    display: inline-block;
    margin: 0 .625em .625em 0;
    background: #e95c33;
    border-radius: .25em;
    -webkit-transition: all .3s;
    transition: all .3s;
}
.lt a, .sot {
    padding: .25em .5em;
    color: #fff;
}
a:link, button {
    -webkit-tap-highlight-color: rgba(229,59,44,.4);
    -ms-touch-action: manipulation;
    touch-action: manipulation;
}
</style>
<script type="text/javascript">
</script>
<script src="js/jquery.min.js"></script>
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script><!-- Script for gallery Here-->
    <script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
    <script type="text/javascript">
        $(function () {
            var filterList = {
                init: function () {
// MixItUp plugin
// http://mixitup.io
                    $('#portfoliolist').mixitup({
                        targetSelector: '.portfolio',
                        filterSelector: '.filter',
                        effects: ['fade'],
                        easing: 'snap',
                        // call the hover effect
                        onMixEnd: filterList.hoverEffect()
                    });
                },
                hoverEffect: function () {
// Simple parallax effect
                    $('#portfoliolist .portfolio').hover(
                        function () {
                            $(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
                            $(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');
                        },
                        function () {
                            $(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
                            $(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');
                        }
                    );
                }
            };
// Run the show!
            filterList.init();
        });
    </script>
    <!--Gallery Script Ends-->


    <script>
 new WOW().init();
</script>
</head>

<body onload='document.form1.text1.focus()'>  

<?php include('function.php'); ?>
<?php include('top.php'); ?>

<?php include('slider.php'); ?>
     <div class="about section" id="section-2">
	  <div class="about-head text-center">
	  <h3>About Us</h3>
	  <span></span><img src="images/about-img.png" alt=""><span></span>
	  </div>
	   <div class="container">		  
		 <div class="col-md-4 about-grids">
			 <h4><span class="icon1"></span>Our Vision</h4>
			 <p>Tourism which is ethical, fair and a positive experience for both travellers and the people and places they visit</p>
		 </div>
		 <div class="col-md-4 about-grids grid2">
			 <h4><span class="icon2"></span>Our Mission</h4>
			 <p>To ensure tourism always benefits local people by challenging bad practice and promoting better tourism</p>
		 </div>
		 <div class="col-md-4 about-grids">
			 <h4><span class="icon3"></span>Package Information</h4>
			 <p>Vacation is a time to relax at beatiful places, unknown adventures and new experiences.For more details click on link below...
        <br><div class="lt"><a href="category.php" style="background: red; margin-top: 50px;margin-left: 55px;">Read More</a></div></p>
		 </div>
	 </div>
</div>

<!--top-tours-->	
<div  class="section" id="section-3">
<div id="portfolio" class="portfolio">
   <div class="top-tours-head text-center">
		  <h3>Gallery</h3>
		  <span></span><img src="images/star.png" alt=""><span></span>
		 
		  </div>
	      <ul id="filters" class="clearfix wow bounceIn" data-wow-delay="0.4s">
			<li><span class="filter active" data-filter="app card icon logo fun">ALL</span></li>
			<li><span class="filter" data-filter="app">Domestic Travel</span></li>
			<li><span class="filter" data-filter="card">Foreign Travel</span></li>
			<li><span class="filter" data-filter="icon">Short Date Tour</span></li>
			<li><span class="filter" data-filter="fun">Long Date Tour</span></li>
	        </ul>
	     <div id="portfoliolist">
					<div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="images/t1.jpg" class="img-responsive" alt=""/></a>
							</div>
					</div>				
					<div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="images/t2.jpg" class="img-responsive" alt=""/></a>
                             </div>
					</div>		
					<div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="images/t3.jpg" class="img-responsive" alt=""/></a>
							
					</div>
					</div>				
					<div class="portfolio icon mix_all" data-cat="icon" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="images/t4.jpg" class="img-responsive" alt=""/></a>
							 
						</div>
					</div>	
					<div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="images/t5.jpg" class="img-responsive" alt=""/></a>
							 
						</div>
					</div>			
					<div class="portfolio fun mix_all" data-cat="fun" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="images/t6.jpg" class="img-responsive" alt=""/></a>
							
						</div>
			      </div>
				  <div class="portfolio fun mix_all" data-cat="fun" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
							<img src="images/t7.jpg" class="img-responsive" alt=""/></a>
							
						</div>
			      </div>
				  <div class="portfolio icon mix_all" data-cat="fun" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="images/t8.jpg" class="img-responsive" alt=""/></a>
							 
					   </div>
			      </div>
		   <div class="clearfix"></div>	
	  </div>
</div>
</div>

<!--/top-tours-->

<div class="client-say">
    <div class="client-say-layer">
        <div class="client-say-head text-center">
            <h3>WHAT OUR CUSTOMERS SAY</h3>
            <span></span><img src="images/face.png" alt=""><span></span>
            <!-- requried-jsfiles-for owl -->
            <link href="css/owl.carousel.css" rel="stylesheet">
            <script src="js/owl.carousel.js"></script>
            <script>
                $(document).ready(function() {
                    $("#owl-demo1").owlCarousel({
                        items : 1,
                        lazyLoad : true,
                        autoPlay : true,
                        navigation : false,
                        navigationText :  false,
                        pagination : true,
                    });
                });
            </script>
            <!-- //requried-jsfiles-for owl -->
            <div id="owl-demo1" class="owl-carousel">
                <div class="item">
                    <div class="client-say-info">
                        <p><img src="images/dots1.png" alt="#">Travel with an open mind and make the most of opportunities - it adds to travel experience.<img src="images/dots2.png" alt="#"></p>
                        <h4>Elena</h4>
                        <h6><span></span></h6>
                    </div>
                </div>
                <div class="item">
                    <div class="client-say-info">
                        <p><img src="images/dots1.png" alt="#">To begin with, we had a really good time. The treatment we received from your side was simply genuine and unconditional. We did not have the slightest problem anywhere during our trip. We were provided with everything you promised us. All together we had a memorable trip. Looking forward to more holidays with travel tours.<img src="images/dots2.png" alt="#"></p>
                        <h4>Sokol</h4>
                        <h6><span></span></h6>
                    </div>
                </div>
                <div class="item">
                    <div class="client-say-info">
                        <p><img src="images/dots1.png" alt="#">Memorable trip ever life had. Looking forward to more holidays with travel tours contact you soon.<img src="images/dots2.png" alt="#"></p>
                        <h4>Linda</h4>
                        <h6><span></span></h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/client-say-->

<div id="section-4" class="contact section">
    <div class="contact-head1 text-center">
            <div style="color:#2196f3; margin-bottom: 16px;"><h2>Map your Route Here</h2></div>
        <div class="map">
			<iframe src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Tirana,Albania+&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" frameborder="0" style="border:0"></iframe>
            <span></span>
        </div>
    </div>
</div>


                <div class="owl-controls clickable"><div class="owl-pagination"><div class="owl-page"><span class=""></span></div><div class="owl-page"><span class=""></span></div><div class="owl-page"><span class=""></span></div><div class="owl-page active"><span class=""></span></div><div class="owl-page"><span class=""></span></div></div></div></div>
        </div>
    </div>
</div>

<div id="section-5" class="contact section">
	  <div class="contact-head text-center">
		  <h3>Contact Us</h3>
		  <span></span><img src="images/mail.png" alt=""><span></span><br/><br/>
          <h4 style="color:#000">Plan Your Trip
Our travel experts can help you book now!</h4>

		  <div class="contact-grids">
			  <div class="container">
				  <div class="col-md-4 address">
						<h4 style="color:#09F">Dream Voyage Co.</h4>
						<p style="color:#000">NEED HELP BOOKING YOUR PACKAGE<br/>
                        For suggestions you may also call our travel expert</p>
						<h5 style="color:#000"><span class="img1"></span>(+355) 692224422</h5>
						<h5 style="color:#000"><span class="img2"></span><a href="#">info@dreamvoyage.co<br />support@dreamvoyage.co</a></h5>
						<h5 style="color:#000"><span class="img3"></span>Tirana, 2001.</h5>
                        <br/>
                       <img src="images/contact.png" height="50%" width="50%" />
                      </div>
				  <div class="col-md-8 contact">
                  
                  
<?php
if (isset($_POST["sbmt"])) {
    $cn = makeconnection(); 
    $stmt = $cn->prepare("INSERT INTO contactus (Name, Phno, Email, Message) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $_POST["t1"], $_POST["t2"], $_POST["t3"], $_POST["t4"]);
    if ($stmt->execute()) {
        echo "<script>alert('Record Saved');</script>";
    } else {
        echo "<script>alert('Error saving record');</script>";
    }
    $stmt->close();
    mysqli_close($cn);
}
?>
					  <form name="form1" method="post">
                      <table border="0" width="700px" height="500px">
                      <tr><td align="left"> <input type="text" class="text" value=" Name"  name="t1" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Your Name';}" required pattern="[a-zA-z1 _]{1,50}" title="Please Enter Only Characters and numbers between 1 to 50 for Name"></td></tr>
                      <tr><td align="left"><input type="text" class="text" value=" Contact No" name="t2" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Your Contact NO';}" required pattern="[0-9]{10,12}" title="Please Enter Only  numbers between 10 to 12 for Contact no"></td></tr>
					 <tr><td align="left"> <input type="text" class="text" value="Email" name="t3" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Your mail';}" required></td></tr>
                     <tr><td><textarea onFocus="if(this.value == 'Enter Message Here') this.value='';" onBlur="if(this.value == '') this.value='Enter Message Here';" name="t4" required>Enter Message Here</textarea></td></tr>					  <tr><td><input type="submit" value="Send message" name="sbmt"/></td></tr></table>
					  <div class="clearfix"></div>
					   </form>
				   </div>
				  <div class="clearfix"></div>
			  </div>
		  </div>
	       



<?php include('bottom.php'); ?>
</body>
</html>

