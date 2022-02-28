<?php 
/*require 'ngo_db.php';
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

<link href="<?= base_url("Assets/css/bootstrap.css") ?>" rel="stylesheet">
<link href="<?= base_url("Assets/css/style.css") ?>" rel="stylesheet">
<link href="<?= base_url("Assets/css/responsive.css") ?>" rel="stylesheet">

<link rel="shortcut icon" href="<?= base_url("Assets/images/favicon.png") ?>" type="image/x-icon">
<link rel="icon" href="<?= base_url("Assets/images/favicon.png") ?>" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">
    <!-- Preloader -->
    
    <?php include("header.php") ?>
    <!-- End Main Header -->

    <!--Page Title-->
    <section class="page-title" style="background-image: url(<?= base_url("Assets/images/background/5.jpg") ?>);">
        <div class="auto-container">
            <h1>Gallery</h1>
            <ul class="page-breadcrumb">
                <li><a href="<?= base_url() ?>welcome/"><i class="fa fa-home"></i> Home</a></li>
                <li><a href="<?= base_url() ?>welcome/Gallery">Gallery</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->


    <!-- Contact Section -->
     <section class="gallery-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h2>Our Gallery (PHOTOS & VIDEOS)</h2>
            </div>
            <div class="row py-5">
                <iframe width="100%" height="409" src="https://www.youtube.com/embed/yN969ajeVbs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                
            </div>

            <div class="row">
                <!-- Gallery Block -->
				<?php 
               //$photos = $db->Get_Gllery();
              // echo "<pre>"; print_r($images);
				foreach($images as $photo)
				{ 
				?>
				
					<div class="gallery-block col-lg-4 col-md-6 col-sm-12 wow fadeIn">
						<div class="image-box">
							<figure class="image"><a href="<?php  echo $photo->image_one; ?>" class="lightbox-image" data-fancybox="gallery">
							<img src="<?php echo $photo->image_one; ?>" alt=""></a></figure>
						</div>
					</div>
                <!-- Gallery Block -->
               <div class="gallery-block col-lg-4 col-md-6 col-sm-12 wow fadeIn" data-wow-delay="400ms">
                    <div class="image-box">
                        <figure class="image"><a href="<?php  echo $photo->image_two; ?>" class="lightbox-image" data-fancybox="gallery"
                        ><img src="<?php  echo $photo->image_two; ?>" alt=""></a></figure>
                    </div>
                </div>

                <!-- Gallery Block -->
                <div class="gallery-block col-lg-4 col-md-6 col-sm-12 wow fadeIn" data-wow-delay="800ms">
                    <div class="image-box">
                        <figure class="image"><a href="<?php  echo $photo->image_three; ?>" class="lightbox-image" data-fancybox="gallery">
                        <img src="<?php  echo $photo->image_three; ?>" alt=""></a></figure>
                    </div>
                </div>
			  <?php	
                }
				?>

            </div>
        </div>
    </section>
    <!--End Contact Page Section -->
    
    <!-- Main Footer -->
     <?php include("footer.php"); ?>
    <!-- End Main Footer -->

</div> 
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-double-up"></span></div>

<script src="<?= base_url("Assets/js/jquery.js")?>"></script>
<script src="<?= base_url("Assets/js/popper.min.js")?>"></script>
<script src="<?= base_url("Assets/js/jquery-ui.js")?>"></script>
<script src="<?= base_url("Assets/js/bootstrap.min.js")?>"></script>
<script src="<?= base_url("Assets/js/jquery.fancybox.js")?>"></script>
<script src="<?= base_url("Assets/js/owl.js")?>"></script>
<script src="<?= base_url("Assets/js/wow.js")?>"></script>
<script src="<?= base_url("Assets/js/appear.js")?>"></script>
<script src="<?= base_url("Assets/js/script.js")?>"></script>

<!--Scroll to top--
<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/appear.js"></script>

<!--End Google Map APi-->
<script src="js/script.js"></script>
</body>

</html>