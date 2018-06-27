<!DOCTYPE html>
<html>
<head>
<title>Register to get more deals for your business | Signup as Seller - TrandHub</title>
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script type="text/javascript">$(function () {
        $("#txtPassword").bind("keyup", function () {
            //TextBox left blank.
            if ($(this).val().length == 0) {
                $("#password_strength").html("");
                return;
            }
 
            //Regular Expressions.
            var regex = new Array();
            regex.push("[A-Z]"); //Uppercase Alphabet.
            regex.push("[a-z]"); //Lowercase Alphabet.
            regex.push("[0-9]"); //Digit.
            regex.push("[$@$!%*#?&]"); //Special Character.
 
            var passed = 0;
 
            //Validate for each Regular Expression.
            for (var i = 0; i < regex.length; i++) {
                if (new RegExp(regex[i]).test($(this).val())) {
                    passed++;
                }
            }
 
 
            //Validate for length of Password.
            if (passed > 2 && $(this).val().length > 8) {
                passed++;
            }
 
            //Display status.
            var color = "";
            var strength = "";
            switch (passed) {
                case 0:
                case 1:
                    strength = "Weak";
                    color = "red";
                    break;
                case 2:
                    strength = "Good";
                    color = "darkorange";
                    break;
                case 3:
                case 4:
                    strength = "Strong";
                    color = "green";
                    break;
                case 5:
                    strength = "Very Strong";
                    color = "darkgreen";
                    break;
            }
            $("#password_strength").html(strength);
            $("#password_strength").css("color", color);
        });
    });
</script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--Pop linking to terms and codition-->
<link rel="stylesheet" type="text/css" href="css/popupt.css">	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="importers, exporters, buyer, seller, importers in india, +exporters +data +india, +importers +data +india, india export data, importers form india, +india +export statistics, export data india, indian export data, products exported from india, products export from india, export data of india, buy in bulk, Hand made items, hand made items manufacturers" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='//fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
<!-- start menu -->
<script src="js/bootstrap.min.js"></script>
<script src="js/simpleCart.min.js"> </script>
<!-- slide -->
<script src="js/responsiveslides.min.js"></script>
   <script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: false,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
  <!-- animation-effect -->
<link href="css/animate.min.css" rel="stylesheet"> 
<script src="js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<!-- //animation-effect -->
</head>

<body>
<!--header-->
<div class="header">
	<div class="header-top">
		<div class="container">
				<div class="col-sm-4 logo">
					<h1><a href="index.php"><img src="images/logo.jpg"></h1>
				</div>
			<div class="col-sm-4 world">
					<div class="cart box_1">
						<a href="checkout.html">
						<h3> <div class="total">
							<span class="simpleCart_total"></span></div>
							<img src="images/cart.png" alt=""/></h3>
						</a>
						<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>

					</div>
			</div>
			<div class="col-sm-2 number">
					<span><i class="glyphicon glyphicon-phone"></i>+91 767 846 6992</span>
					<p><a href="choose_register.html">Register</a></p>
				</div>
			<div class="col-sm-2 search">		
				<a class="play-icon popup-with-zoom-anim" href="#small-dialog"><i class="glyphicon glyphicon-search"> </i> </a>
			</div>
				<div class="clearfix"> </div>
		</div>
	</div>
		<div class="container">
			<div class="head-top">
			<div class="n-avigation">
			
				<nav class="navbar nav_bottom" role="navigation">
				
				 <!-- Brand and toggle get grouped for better mobile display -->
				  <div class="navbar-header nav_2">
					  <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					  </button>
					  <a class="navbar-brand" href="#"></a>
				   </div> 
				   <!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
						<ul class="nav navbar-nav nav_1">
							<li class="dropdown mega-dropdown active">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Metal And wooden Items<span class="caret"></span></a>				
								<div class="dropdown-menu mega-dropdown-menu">
									<div class="container-fluid">
										<!-- Tab panes -->
										<div class="tab-content">
										  <div class="tab-pane active" id="men">
											<ul class="nav-list list-inline">
												<li><a href="products.php"><img src="images/items/1.jpg" width="150px" height="132px" class="img-responsive" alt=""/></a></li>
												<li><a href="products.php"><img src="images/items/3.jpg" width="150px" height="132px" class="img-responsive" alt=""/></a></li>
												<li><a href="products.php"><img src="images/items/4.jpg" width="150px" height="132px"width="150px" height="132px" class="img-responsive" alt=""/></a></li>
												<li><a href="products.php"><img src="images/items/5.jpg" width="150px" height="132px" class="img-responsive" alt=""/></a></li>
												<li><a href="products.php"><img src="images/items/6.jpg" width="150px" height="132px" class="img-responsive" alt=""/></a></li>
												<li><a href="products.php"><img src="images/items/2.jpg" width="150px" height="132px" class="img-responsive" alt=""/></a></li>
											</ul>
										  </div>
									   </div>
									</div>
									<!-- Nav tabs -->
									                
								</div>				
							</li>
							<li class="dropdown mega-dropdown active">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Fashion Wears<span class="caret"></span></a>				
								<div class="dropdown-menu mega-dropdown-menu">
									<div class="container-fluid">
										<!-- Tab panes -->
										<div class="tab-content">
										  <div class="tab-pane active" id="men">
											<ul class="nav-list list-inline">
												<li><a href="products.php"><img src="images/t10.jpg" class="img-responsive" alt=""/></a></li>
												<li><a href="products.php"><img src="images/t2.jpg" class="img-responsive" alt=""/></a></li>
												<li><a href="products.php"><img src="images/t3.jpg" class="img-responsive" alt=""/></a></li>
												<li><a href="products.php"><img src="images/t4.jpg" class="img-responsive" alt=""/></a></li>
												<li><a href="products.php"><img src="images/t5.jpg" class="img-responsive" alt=""/></a></li>
												<li><a href="products.php"><img src="images/t6.jpg" class="img-responsive" alt=""/></a></li>
											</ul>
										  </div>
										 
									   </div>
									</div>
									<!-- Nav tabs -->
									                   
								</div>				
							</li>
							<li><a href="products.html">Exclusive Products</a></li>
							<li><a href="account.php">Sign In</a></li>
							<li><a href="aboutus.html">About Us</a></li>
							<li class="last"><a href="contact.html">Contact</a></li>
						</ul>
					 </div><!-- /.navbar-collapse -->
				  
				</nav>
			</div>
			
				
		<div class="clearfix"> </div>
			<!---pop-up-box---->   
					<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
					<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
					<!---//pop-up-box---->
				<div id="small-dialog" class="mfp-hide">
				<div class="search-top">
						<div class="login">
							<form action="#" method="post">
								<input type="submit" value="">
								<input type="text" name="search" value="Type something..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">		
							
							</form>
						</div>
						<p>	Shopping</p>
					</div>				
				</div>
				 <script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});
																						
						});
				</script>			
	<!---->		
		</div>
	</div>
</div>
<!--//header-->
<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Register Buyer</li>
			</ol>
		</div>
	</div>
<div class="container">
	<div class="register">
		<h2>Register Buyer</h2>
		  	  <form action="script/register_buyer_script.php" method="post">
				 <div class="col-md-6  register-top-grid">
					
					<div class="mation">
						<span><font size="4" color="black">First Name</span></font>
						<input type="text" name="firstname" required="" style="width: 300px;border-radius: 4px;"> 
					
						<span><font size="4" color="black">Last Name</span></font>
						<input type="text" name="lastname" required="" style="width: 300px;border-radius: 4px;"> 
					 
						 <span><font size="4" color="black">Email Address</span></font>
						 <input type="email" name="email" required="" style="width: 300px;border-radius: 4px;"> 
					</div>
					 <div class="clearfix"> </div>
					   <a class="news-letter" href="#">
						 <label class="checkbox"><input type="checkbox" name="checkbox" checked="" required=""><i> </i>I agree to all the <a id="myBtn">terms and conditions.</a></label>
							 <!-- The Modal -->
								<div id="myModal" class="modal">

								  <!-- Modal content -->
								  <div class="modal-content">
								    <font size="6"><span class="close">&times;</span></font>
								    <p><strong>Terms & Conditions</strong></p><br/>
								    <strong>Introduction</strong>
								    <p>These terms and conditions govern your use of TrandHub website; by using this website, you accept these terms and conditions in full. If you disagree with these terms and conditions or any part of these terms and conditions, you must not use this website.</p>
								    <p>You must be at least 18 years of age to use this website.  By using this website and by agreeing to these terms and conditions you warrant and represent that you are at least 18 years of age.</p>
								    <p>This website uses cookies. By using this website and agreeing to these terms and conditions, you consent to our TrandHub's use of cookies in accordance with the terms of TrandHub's privacy policy / cookies policy.</p>
								    <p><strong>License to use website</strong>
										Unless otherwise stated, TrandHub and/or its licensors own the intellectual property rights in the website and material on the website. Subject to the license below, all these intellectual property rights are reserved.</p>
										<p>You may view, download for caching purposes only, and print pages or images from the website for your own personal use, subject to the restrictions set out below and elsewhere in these terms and conditions.
									</p>
									<p>You must not:</p>
								    <ul>
								    	<li>Republish material from this website (including republication on another website).</li>
								    	<li>Sell, rent or sub-license material from the website.</li>
								    	<li>Show any material from the website in public</li>
								    	<li>Reproduce, duplicate, copy or otherwise exploit material on this website for a commercial purpose.</li>
								    	<li>Edit or otherwise modify any material on the website</li>
								    	<li>Redistribute material from this website except for content specifically and expressly made available for redistribution.</li>
								    </ul>
								    <p>Where content is specifically made available for redistribution, it may only be redistributed within our organisation.</p>
								    <p><strong>Acceptable use</strong></p>
								    <p>You must not use this website in any way that causes, or may cause, damage to the website or impairment of the availability or accessibility of the website; or in any way which is unlawful, illegal, fraudulent or harmful, or in connection with any unlawful, illegal, fraudulent or harmful purpose or activity.</p>
								    <p>You must not use this website to copy, store, host, transmit, send, use, publish or distribute any material which consists of (or is linked to) any spyware, computer virus, Trojan horse, worm, keystroke logger, rootkit or other malicious computer software.</p>
								    <p>You must not conduct any systematic or automated data collection activities (including without limitation scraping, data mining, data extraction and data harvesting) on or in relation to this website without [NAME'S] express written consent. You must not use this website to transmit or send unsolicited commercial communications.</p>
								    <p>You must not use this website for any purposes related to marketing without [NAME'S] express written consent.</p>
								    <p>TrandHub reserves the right to restrict access to Sellers areas of this website, or indeed this entire website, at TrandHub discretion.</p>
								    <p>If Email provides you with a user ID and password to enable you to access restricted areas of this website or other content or services, you must ensure that the user ID and password are kept confidential.</p>
								    <p>Email may disable your user ID and password in TrandHub sole discretion without notice or explanation.</p>
								    <p><strong>User content</strong></p>
								    <p>In these terms and conditions, “your user content” means material (including without limitation text, images, audio material, video material and audio-visual material) that you submit to this website, for whatever purpose.</p>
								    <p>You grant to TrandHub a worldwide, irrevocable, non-exclusive, royalty-free license to use, reproduce, adapt, publish, translate and distribute your user content in any existing or future media.  You also grant to TrandHub the right to sub-license these rights, and the right to bring an action for infringement of these rights.</p>
								    <p>Your user content must not be illegal or unlawful, must not infringe any third party's legal rights, and must not be capable of giving rise to legal action whether against you or Trandhub or a third party (in each case under any applicable law).</p>
								    <p>You must not submit any user content to the website that is or has ever been the subject of any threatened or actual legal proceedings or other similar complaint.</p>
								    <p>TrandHub reserves the right to edit or remove any material submitted to this website, or stored on Godaddy servers, or hosted or published upon this website.</p>
								    <p><strong>No warranties</strong></p>
								    <p>We are not giving any Warranty that we are cracking deals for you. We are only providing the details of the buyers who are interested in your product. Once you will get the contact details for your product seller then you are responsible for your deal. We are not giving any Guarantee for your deal. All the information of products and details are provided by sellers. We are not responsible for any kind of products.</p>
								    <p><strong>TrandHub Details</strong></p>
								    <p>Abhishek Raj</p>
								    <p>C.E.O. & co-founder</p>
								    <p>By clicking or making tick to check box this states that:</p>
								    <p><strong>I Accept the Terms & Conditions, as detailed above.</strong></p>
								  </div>

								</div>

					   </a>
					 </div>
				     <div class=" col-md-6 register-bottom-grid">
						   
							<div class="mation">
								<span><font size="4" color="black">Password</span></font>
								<input type="password" name="password" required="" style="width: 300px;border-radius: 4px;" id="txtPassword" ><span id="password_strength"></span>
								<span><font size="4" color="black" >Confirm Password</span></font>
								<input type="password" name="cpassword" required="" id="txtPassword"  style="width: 300px;border-radius: 4px;"><span id="password_strength"></span>
								<span><font size="4" color="black">Phone Number</span></font>
								<input type="text" name="number" required="" style="width: 300px;border-radius: 4px;">
							</div>
					 </div>
					 <div class="clearfix"> </div>
				
				<div class="register-but">
					   <input type="submit" value="Submit" name="submit" style="background-color: #581845;
    																	border: none;
    																	color: white;
    																	border-radius: 10px;
    																	padding: 15px;
    																	text-align: center;
    																	text-decoration: none;
    																	display: inline-block;
    																	font-size: 16px;
    																	margin: 4px 2px ">
					   <div class="clearfix"> </div>
				   </form>
				</div>
		   </div>
</div>

<!--footer-->
<div class="footer">
	<div class="container">
		<div class="footer-top">
			<div class="col-md-6 top-footer animated wow fadeInLeft" data-wow-delay=".5s">
				<h3>Follow Us On</h3>
				<div class="social-icons">
					<ul class="social">
						<li><a href="#"><i></i></a> </li>
						<li><a href="#"><i class="facebook"></i></a></li>	
						<li><a href="#"><i class="google"></i> </a></li>
						<li><a href="#"><i class="linked"></i> </a></li>						
					</ul>
						<div class="clearfix"></div>
				 </div>
			</div>
			<div class="col-md-6 top-footer1 animated wow fadeInRight" data-wow-delay=".5s">
				<h3>Newsletter</h3>
					<form action="script/submit_newsletter.php" method="post">
						<input type="text" name="email" value="" onfocus="this.value='';" required="" onblur="if (this.value == '') {this.value ='';}">
						<input type="submit" value="SUBSCRIBE" name="submit">
					</form>
			</div>
			<div class="clearfix"> </div>	
		</div>	
	</div>
		<div class="footer-bottom">
		<div class="container">
				<div class="col-md-3 footer-bottom-cate animated wow fadeInLeft" data-wow-delay=".5s">
					<h6>Categories</h6>
					<ul>
						<li><a href="products.html">Metal Clocks</a></li>
						<li><a href="single.html">Metal Glasses</a></li>
						<li><a href="products.php">Metal Bowls</a></li>
						<li><a href="products.html">Fashion Wears</a></li>
						<li><a href="single.html">Metals Jug & Glasses</a></li>
						
					</ul>
				</div>
				<div class="col-md-3 footer-bottom-cate animated wow fadeInLeft" data-wow-delay=".5s">
					<h6>Services</h6>
					<ul>
						<li><a href="products.html">Get Deals</a></li>
						<li><a href="products.php">Sell in Retail</a></li>
						<li><a href="single.html">Sell in Bulk</a></li>
						<li><a href="products.php">Buy in Bulk</a></li>
						<li><a href="products.html">Sell Out of India</a></li>
					</ul>
				</div>
				<div class="col-md-3 footer-bottom-cate animated wow fadeInRight" data-wow-delay=".5s">
					<h6>HightLights</h6>
					<ul>
						<li><a href="products.html">How It Works?</a></li>
						<li><a href="products.php">Privacy And Policy</a></li>
						<li><a href="single.html">FAQs</a></li>
						<li><a href="aboutus.html">About Us</a></li>
						<li><a href="contact.html">Contact</a></li>
					</ul>
				</div>
				<div class="col-md-3 footer-bottom-cate cate-bottom animated wow fadeInRight" data-wow-delay=".5s">
					<h6>Our Address</h6>
					<ul>
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Address : Ghanta Ghar Chowk, Ganj, Aonla (243301), Dist. Bareilly, <span>India.</span></li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>Email : <a href="mailto:info@example.com">info@trandhub.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>Phone : +91 767 846 6992</li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>Phone : +91 945 699 0633</li>
					</ul>
				</div>
				<div class="clearfix"> </div>
				<p class="footer-class animated wow fadeInUp animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;"> © 2018 TrandHub . All Rights Reserved | Design by <a href="http://trabdhub.com/" target="_blank">TrandHub Team</a> </p>
			</div>
	</div>
</div>
<!--footer-->
</body>
<script>
	// Get the modal
	var modal = document.getElementById('myModal');

	// Get the button that opens the modal
	var btn = document.getElementById("myBtn");

	// Get the <span> element that closes the modal
	var span = document.getElementsByClassName("close")[0];

	// When the user clicks the button, open the modal 
	btn.onclick = function() {
	    modal.style.display = "block";
	}

	// When the user clicks on <span> (x), close the modal
	span.onclick = function() {
	    modal.style.display = "none";
	}

	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
	    if (event.target == modal) {
	        modal.style.display = "none";
	    }
	}
</script>
</html>