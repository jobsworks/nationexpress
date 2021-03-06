<?php
	include("check.php");
	include("orders_check.php");	
?>
<!DOCTYPE html>
<html lang="en">
	
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="author" content="Alicktish Web Designs">
		<meta name="description" content="NationExpress24 Delivery is a Made-in-Nigeria Courier company created to deliver the ecommerce industry from the challenges it faces regarding pickup and delivery of parcels in Lagos and other parts of Nigeria">
		<meta name="keywords" content="NationExpress24, Nation Express 24, Nation Express, NationExpress, NationalExpress, National Express NationalExpress24, Ship, Deliver, Quick Delivery, Fast Delivery, Same day, Next Day, Courier, Express Delivery, National Delivery, Nation Delivery, Nigeria Delivery, Lagos Delivery, Logistics, Ecommerce, Abuja, Ibadan, Port Harcourt, Maiduguri, DHL, UPS, ACE, Courier Service, Delivery Service, Pickup, Delivery, Pickup and Delivery, Fast Delivery, Express Pickup, Pick-up, Ikeja">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="resources/img/nationexpress24.ico" />
		<title>Orders - NationExpress24 Delivery</title>
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
		<link href="resources/fonts/stylesheet.css" rel="stylesheet">
		<link href="resources/css/jquery.mb.YTPlayer.min.css" rel="stylesheet">
		<link rel="stylesheet" href="resources/css/meanmenu.css">
		<link href="resources/css/owl.carousel.css" rel="stylesheet">
		<link href="resources/css/style.css" rel="stylesheet">
		<link href="resources/css/reset.css" rel="stylesheet">
		<link href="resources/css/responsive.css" rel="stylesheet">
		<link href="resources/css/custom.css" rel="stylesheet">
		<!-- TABLE STYLES-->
		<link href="resources/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
		
		<!--[if lt IE 9]>
			<script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		
	</head>
	
	<body class="js">
		<div class="tel_header"><i class="fa fa-envelope" aria-hidden="true"></i> <font color="red">info@nationexpress24.com</font>  &nbsp;&nbsp;<i class="fa fa-phone" aria-hidden="true"></i> Call our hotline 0805-773-2873 or <i class="fa fa-whatsapp" aria-hidden="true"></i> WhatsApp 0817-033-3258</div>
		<div id="preloader"></div>
		
		<section class="about-us">
			<div class="logo_menu" id="sticker1">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-lg-4 col-sm-8 col-xs-10">
							<div class="logo">
								<a href="../index.html"><img src="resources/img/logo_1.png" alt="logo"  height="90px" ></a>
							</div>
						</div>
						<div class="col-md-6 col-xs-10 col-md-offset-1  col-lg-offset-1 col-lg-7 mobMenuCol">
							<nav class="navbar">
								<!-- Collect the nav links, forms, and other content for toggling -->
                                <ul class="nav navbar-nav navbar-right menu">
									<li class="current-menu-item"><a href="./" title="Go to My Portal" >Welcome, <? echo $first_name; ?></a>
									</li>
                                    <li><a href="../service.php">services</a></li>
									<li><a href="../pricing.php">pricing</a></li>
                                    <li><a href="../contact.php">contact</a></li>
									<li class="signup1"><a href="logout">logout</a></li>
								</ul>
								<!-- /.navbar-collapse -->
							</nav>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<!--    start pricing area-->
		<!-- Pricing Area -->
		<section class="pricing-area version-6" id="pricing">
			<div class="container">
				<div class="row page-title">
					<div class="col-md-5 col-sm-6">
						<div class="pricing-desc section-padding-two">
							<div class="pricing-desc-title">
								<div class="title">
									<h2>Orders</h2>
									<p>Here is where you will view all orders 
										<?php if($status){ ?> 
										with the status <font color="blue">"<?php echo $mystatus; ?>"</font>
										<?php  }?>
									</p>
								</div>
							</div>
						</div>
					</div>					
				</div>
				<div class="row">
					<div class="col-md-4 col-lg-12 col-sm-4 col-xs-12 text-center">
						<div class="panel-body">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#recent" data-toggle="tab">
									<?php 
									if($status){ 
										 echo $mystatus;
										}?>
									</a>
								</li>
								
							</ul>
							
							<div class="tab-content">
								<div class="tab-pane fade active in" id="recent">
									<p id="statusnotice">&nbsp;</p>
									<div class="table-responsive">
										<table class=" display table table-striped table-bordered table-hover" id="recent_orders_table" >
											<thead>
												<tr>
													<th>Date</th>
													<th>Customer Name</th>
													<th>Status</th>
													<th>Tracking Number</th>
													<th>Delivery Name</th>
													<th>Update Status</th>
													<th>More Info</th>
													<th>Edit Order</th>
												</tr>
												</thead>
												<tfoot>
												<tr>
													<th>Date</th>
													<th>Customer Name</th>
													<th>Status</th>
													<th>Tracking Number</th>
													<th>Delivery Name</th>
													<th>Update Status</th>
													<th>More Info</th>
													<th>Edit Order</th>
												</tr>
												</tfoot>
												<tbody>
													<?php do {
															

															$sql_b_reg = mysqli_query($connect,"SELECT * FROM `register` WHERE `email` != '' AND `account_id`='$myaccount_id' AND `status`='Enabled' ORDER BY id DESC");
															$row_b_reg = mysqli_num_rows($sql_b_reg);
															$val_b_reg = mysqli_fetch_assoc($sql_b_reg);	
															
															$sql_b_deli = mysqli_query($connect,"SELECT * FROM `delivery_details` WHERE `account_id`='$myaccount_id' ORDER BY id DESC");
															$row_b_deli = mysqli_num_rows($sql_b_deli);
															$val_b_deli = mysqli_fetch_assoc($sql_b_deli);	
															
															$b_date = $val_tr_orders['date'];
															$b_booking_no = $val_tr_orders['booking_no'];
															$reg_firstname = $val_b_reg['first_name'];
															$reg_surname = $val_b_reg['last_name'];
															
															$deli_fullname = $val_b_deli['full_name'];
															
														
													if($myaccount_id){ ?>
															<tr>
																<td><?php echo $b_date; ?></td>
																<td><?php echo $reg_firstname; ?> <? echo $reg_surname; ?></td>
																<td><?php echo $mystatus; ?></td>
																<td><?php echo $b_booking_no; ?></td>
																<td><?php echo $deli_fullname; ?></td>
																<td><a href="update_order?booking_no=<? echo $b_booking_no; ?>" target="_blank"><button class="btn btn-default" title="Click here to update the order status">Update Status</button></a></td>
																<td><a href="orders_info?booking_no=<? echo $b_booking_no; ?>" target="_blank"><button class="btn btn-default" title="Click for more details">More info</button></a></td>
																<td><a href="edit_order?booking_no=<? echo $b_booking_no; ?>" target="_blank"><button class="btn btn-default" title="Click here to edit the order">Edit Order</button></a></td>
															</tr>
														<?php } 
													 }while($val_tr_orders = mysqli_fetch_array($sql_tr_orders)) ?>	
												</tbody>
										</table>
									</div>
								</div>
							</div>
							
							
						</div>	
					</div>	
				</div>
			</div>
		</section>
		<!-- /.End Of Pricing Area -->
		
		<section class="footer-area" id="contact">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-3 col-xs-12 col-lg-4">
						<div class="single-footer">
							<h2>ABOUT US</h2>
							<p>NationExpress24 Delivery is a Made-in-Nigeria Courier company created to deliver the ecommerce industry from the challenges it faces regarding pickup and delivery of parcels in Lagos and other parts of Nigeria.</p>
							<p><a href="../about.html">Read More...</a></p>
						</div>
					</div>
					<div class="col-md-2 col-sm-3 col-xs-12 col-lg-2">
						<div class="single-footer">
							<h2>More links</h2>
							<ul class="list">
								<li><a href="../schedule-a-pickup.html">Schedule a Pickup</a></li>
								<li><a href="../faq.html">FAQ</a></li>
								<li><a href="../terms.html">Terms and Conditions</a></li>
								<li><a href="../privacy-policy.html">Privacy Policy</a></li>
								<li><a href="../shipping-policy.html">Shipping Policy</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-3 col-sm-3 col-xs-12 col-lg-3">
						<div class="single-footer">
							<h2>We Accept</h2>
							<a href=""><img src="resources/img/cards_credt_1.png"></a>
						</div>
					</div>
					<div class="col-md-3 col-sm-3 col-xs-12 col-lg-3">
						<div class="single-footer clearfix">
							<h2>Contact Us</h2>
							<p>Phone numbers: 08170333258 and 08057732873</p>
							<p>WhatsApp: 08057732873</p>
							<p>Email address: info@nationexpress24.com</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--end of footer area-->
		
		<!--   start copyright text area-->
		<div class="copyright-area">
			<div class="container">
				<div class="col-xs-12 col-sm-6 col-md-6 text-left">
					<div class="footer-text">
						<p>&copy; Copyright 2017, NationExpress24 Delivery ~ All Rights Reserved</p>
					</div>
				</div>
				<div class="col-xs-12  col-sm-6 col-md-6 text-right">
					<div class="footer-text">
						<a href="#" class="fa fa-facebook"></a>
						<a href="#" class="fa fa-twitter"></a>
						<a href="#" class="fa fa-instagram"></a>	
					</div>	
				</div>
			</div>
		</div>
		<!--    end of copyright text area-->
		
		
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
		
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
		<script src="resources/js/jquery.counterup.min.js"></script>
		<script src="resources/js/jquery.sticky.js"></script>
		<script src="resources/js/owl.carousel.min.js"></script>
		<script src="resources/js/jquery.meanmenu.js"></script>
		<script src="resources/js/slick.min.js"></script>
		<script src="resources/js/jquery.nav.js"></script>
		<script src="resources/js/jquery.mb.YTPlayer.min.js"></script>
		<script src="resources/js/main.js"></script>
		<!-- DATA TABLE SCRIPTS -->
		<script src="resources/js/dataTables/jquery.dataTables.js"></script>
		<script src="resources/js/dataTables/dataTables.bootstrap.js"></script>
		<script>
			$(document).ready(function () {
				$('#recent_orders_table').dataTable({
					"autoWidth": true
				});
			});
		</script>
		<!--Start of Live Chat Script-->
		<script src="resources/js/chat.js"></script>
		<!--End of Live Chat Script-->
	</body>
	
</html>	