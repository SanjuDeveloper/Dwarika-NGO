<?php 
/*
require 'ngo_db.php';
		$db = new ngo();
		$db->Connect();

*/
?>									
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<title>Dwarka Club Fedration | Events Detail</title>
<!-- Stylesheets -->
<link href="<?= base_url("Assets/css/bootstrap.css"); ?>" rel="stylesheet">
<link href="<?= base_url("Assets/css/style.css");?>" rel="stylesheet">
<link href="<?= base_url("Assets/css/responsive.css"); ?>" rel="stylesheet">

<link rel="shortcut icon" href="<?= base_url("Assets/images/favicon.png"); ?>" type="image/x-icon">
<link rel="icon" href="<?= base_url("Assets/images/favicon.png"); ?>" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">
    <!-- Preloader -->
    <div class="preloader"></div>
    
    <?php include('header.php'); ?>
    <!-- End Main Header -->

    <!--Page Title-->
    <section class="page-title" style="background-image: url(<?= base_url("Assets/images/background/5.jpg")?>);">
        <div class="auto-container">
            <h1>EVENTS</h1>
            <ul class="page-breadcrumb">
                <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
                <li>Events Details</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Event Detail -->
	<?php 
		/*$event-s = $db->Get_Event("WHERE event_id=".$_GET['event_id']); */
		foreach($events as $event)
		{
				$event_id = $event['event_id'];
				?>
			<section class="event-detail">
				<div class="auto-container">
					<div class="image-box wow fadeIn">
						<figure  width="100%" height="409" allowfullscreen><img style="width:50%; height:5%;"src="<?php echo $event['event_image'];?>" alt=""></figure>
					</div>

					<!-- Lower Content -->
					<div class="lower-content">
						<h2><?php echo $event['event_title']; ?></h2>
						 <div class="btn-box">
							<a class="theme-btn btn-style-three text-white"><?php echo $event['event_date']; ?><i class="fa fa-calendar"></i></a>
							<a class="theme-btn btn-style-three text-white"><?php echo $event['event_time']; ?><i class="fa fa-clock-o"></i></a>
							<a class="theme-btn btn-style-three text-white"><?php echo $event['event_location']; ?><i class="fa fa-map-marker"></i></a>
						</div>
						<p><?php echo $event['event_description']; ?>.</p>
						
					   
					</div>

				  
				</div>
			</section>
				<?php 
		} ?>
							
    <!--End Event Detail -->

    <!-- Main Footer -->
    <?php include("footer.php"); ?>
    <!-- End Main Footer -->

</div>  
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-double-up"></span></div>

<!--Scroll to top-->
<script src="<?= base_url("Assets/js/jquery.js")?>"></script>
<script src="<?= base_url("Assets/js/popper.min.js")?>"></script>
<script src="<?= base_url("Assets/js/jquery-ui.js")?>"></script>
<script src="<?= base_url("Assets/js/bootstrap.min.js")?>"></script>
<script src="<?= base_url("Assets/js/jquery.fancybox.js")?>"></script>
<script src="<?= base_url("Assets/js/owl.js")?>"></script>
<script src="<?= base_url("Assets/js/wow.js")?>"></script>
<script src="<?= base_url("Assets/js/appear.js")?>"></script>
<script src="<?= base_url("Assets/js/script.js")?>"></script>
<!--End Google Map APi-->
<script src="js/script.js"></script>
</body>

</html>