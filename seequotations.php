<?php
	session_start();
	$_SESSION['uid'];
	if(isset($_SESSION['uid']))
	{
?>
<!DOCTYPE html>
<html>
<head>
<title>Complete Your Profile to get more deals for your Business | Profile - TrandHub</title>
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
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
  <script>
</script>
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
					<h1><a href="index.html"><img src="images/logo.jpg"></h1>
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
				<div class="col-sm-2 number"><?php include('script/profile_fetch_buyer.php'); ?>
					<span><i class="glyphicon glyphicon-phone"></i> <?php echo $phone;?></span>
					<p><a href="profile.php"><?php echo $fname; echo " ";echo $lname; ?></a></p>
					<p><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="label label-pill label-danger count" style="border-radius:10px;"></span> <img src="images/msg.png" style="width: 50px; height: 50px;"></a></font></p>
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
												<li><a href="women.html"><img src="images/items/1.jpg" width="150px" height="132px" class="img-responsive" alt=""/></a></li>
												<li><a href="women.html"><img src="images/items/3.jpg" width="150px" height="132px" class="img-responsive" alt=""/></a></li>
												<li><a href="women.html"><img src="images/items/4.jpg" width="150px" height="132px"width="150px" height="132px" class="img-responsive" alt=""/></a></li>
												<li><a href="women.html"><img src="images/items/5.jpg" width="150px" height="132px" class="img-responsive" alt=""/></a></li>
												<li><a href="women.html"><img src="images/items/6.jpg" width="150px" height="132px" class="img-responsive" alt=""/></a></li>
												<li><a href="women.html"><img src="images/items/2.jpg" width="150px" height="132px" class="img-responsive" alt=""/></a></li>
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
												<li><a href="men.html"><img src="images/t10.jpg" class="img-responsive" alt=""/></a></li>
												<li><a href="men.html"><img src="images/t2.jpg" class="img-responsive" alt=""/></a></li>
												<li><a href="men.html"><img src="images/t3.jpg" class="img-responsive" alt=""/></a></li>
												<li><a href="men.html"><img src="images/t4.jpg" class="img-responsive" alt=""/></a></li>
												<li><a href="men.html"><img src="images/t5.jpg" class="img-responsive" alt=""/></a></li>
												<li><a href="men.html"><img src="images/t6.jpg" class="img-responsive" alt=""/></a></li>
											</ul>
										  </div>
										 
									   </div>
									</div>
									<!-- Nav tabs -->
									                   
								</div>				
							</li>
							<li><a href="products.html">Exclusive Products</a></li>
							<li><a href="script/signout.php">Sign out</a></li>
							<li><a href="account.html">About Us</a></li>
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
				<li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Your Welcomed Enquiries</li>
			</ol>
		</div>
	</div>
<!---->
<div class="container">
	<div class="check-out">
		<h2>Your Welcomed Enquiries</h2>
    	    <table >
		  <tr>
			<th>Product</th>
			<th>Date(YYYY-MM-DD) & Time</th>		
			<th>Number of Quotations Received</th>
			<th>Status</th>
			<th>Finish Deal</th>
		  </tr>
		  <?php 
		  		$uid_buyer = $_SESSION['uid_buyer'];
				$query = "SELECT * FROM `quotation` WHERE uid_buyer = '$uid_buyer' GROUP BY uid_product";
				$result = mysqli_query($con, $query);
				if(mysqli_num_rows($result) > 0)
				{
 					while($row = mysqli_fetch_array($result))
 					{
   						$uid_product = $row['uid_product'];
   						$date_time = $row['date_time']; 
   						$query1 = "SELECT * FROM `products` WHERE uid_product = '$uid_product' ";
						$result1 = mysqli_query($con, $query1);
						if(mysqli_num_rows($result1) > 0)
						{
 							while($row1 = mysqli_fetch_array($result1))
 							{
   								$Product_Name = $row1['name_product'];
   								$description = $row1['description']; 
   								$query2 = "SELECT * FROM `item_images` WHERE uid_product = '$uid_product' GROUP BY uid_product ";
								$result2 = mysqli_query($con, $query2);
								if(mysqli_num_rows($result2) > 0)
								{
 									while($row2 = mysqli_fetch_array($result2))
 									{
   										$link = $row2['link'];

   					?>
		  <tr>
			<td class="ring-in"><a href="single.html" class="at-in"><img src="script/<?php echo $link;?>" class="img-responsive" alt=""></a>
			<div class="sed">
				<h5><?php echo $Product_Name;?></h5>
				<p><?php echo $description;?> </p>
			
			</div>
			<div class="clearfix"> </div></td>
			<td><?php echo $date_time;?></td>		
			<td></td>
			<td></td>
			<td><button style="background-color: #581845;
    						border: none;
    						color: white;
    						border-radius: 10px;
    						padding: 5px;
    						text-align: center;
    						text-decoration: none;
    						display: inline-block;
    						font-size: 16px;
    						margin: 4px 2px ">See Quotations</button></td>
		  </tr>
		  	<?php				
		  							}
		  						}
		  					}
		  				}
		  			}
		  		}
		  		else{
		  			echo "No record found";
		  		}
   		  ?>
	</table>
	<a href="#" class=" to-buy">PROCEED TO BUY</a>
	<div class="clearfix"> </div>
    </div>
</div>
<!--footer-->
<div class="footer">
	<div class="container">
		<div class="footer-top">
			<div class="col-md-6 top-footer">
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
			<div class="col-md-6 top-footer1">
				<h3>Newsletter</h3>
					<form action="#" method="post">
						<input type="text" name="email" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
						<input type="submit" value="SUBSCRIBE">
					</form>
			</div>
			<div class="clearfix"> </div>	
		</div>	
	</div>
		<div class="footer-bottom">
		<div class="container">
				<div class="col-md-3 footer-bottom-cate">
					<h6>Categories</h6>
					<ul>
						<li><a href="products.html">Curabitur sapien</a></li>
						<li><a href="single.html">Dignissim purus</a></li>
						<li><a href="men.html">Tempus pretium</a></li>
						<li><a href="products.html">Dignissim neque</a></li>
						<li><a href="single.html">Ornared id aliquet</a></li>
						
					</ul>
				</div>
				<div class="col-md-3 footer-bottom-cate">
					<h6>Feature Projects</h6>
					<ul>
						<li><a href="products.html">Dignissim purus</a></li>
						<li><a href="men.html">Curabitur sapien</a></li>
						<li><a href="single.html">Tempus pretium</a></li>
						<li><a href="men.html">Dignissim neque</a></li>
						<li><a href="products.html">Ornared id aliquet</a></li>
					</ul>
				</div>
				<div class="col-md-3 footer-bottom-cate">
					<h6>Top Brands</h6>
					<ul>
						<li><a href="products.html">Tempus pretium</a></li>
						<li><a href="single.html">Curabitur sapien</a></li>
						<li><a href="men.html">Dignissim purus</a></li>
						<li><a href="single.html">Dignissim neque</a></li>
						<li><a href="men.html">Ornared id aliquet</a></li>
						
						
					</ul>
				</div>
				<div class="col-md-3 footer-bottom-cate cate-bottom">
					<h6>Our Address</h6>
					<ul>
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Address : 12th Avenue, 5th block, <span>Sydney.</span></li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>Email : <a href="mailto:info@example.com">info@example.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>Phone : +1234 567 567</li>
					</ul>
				</div>
				<div class="clearfix"> </div>
				<p class="footer-class"> © 2016 Youth Fashion . All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
			</div>
	</div>
</div>
<!--footer-->
</body>
</html>
<?php
	}
	else
	{
		header('location : account.html');
	}
?>
<script>
$(document).ready(function(){
 
 function load_unseen_notification(view = '')
 {
  $.ajax({
   url:"script/fetchmsg.php",
   method:"POST",
   data:{view:view},
   dataType:"json",
   success:function(data)
   {
    $('.dropdown-menu').html(data.notification);
    if(data.unseen_notification > 0)
    {
     $('.count').html(data.unseen_notification);
    }
   }
  });
 }
 
 load_unseen_notification();
 
 $(document).on('click', '.dropdown-toggle', function(){
  $('.count').html('');
  load_unseen_notification('yes');
 });
 
 setInterval(function(){ 
  load_unseen_notification();; 
 }, 5000);
 
});
</script>