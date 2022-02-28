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
<title>Dwarka Club Fedration | Home </title>
<!-- Stylesheets -->

<link href="<?= base_url("Assets/css/bootstrap.css") ?>" rel="stylesheet">
<link href="<?= base_url("Assets/css/style.css") ?>" rel="stylesheet">
<link href="<?= base_url("Assets/css/responsive.css") ?>" rel="stylesheet">

<link rel="shortcut icon" href="<?= base_url("Assets/images/favicon.png") ?>" type="image/x-icon">
<link rel="icon" href="<?= base_url("Assets/images/favicon.png") ?>" type="image/x-icon">


<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
</head> 

<body>

<div class="page-wrapper">
    <!-- Preloader -->
    
        
    <!-- Header Span -->
    <span class="header-span"></span>
    <?php include ('header.php'); ?>
    <!-- End Main Header -->
    

    <!-- Bnner Section -->
    <section class="banner-section">
        <div class="banner-carousel owl-carousel owl-theme">
            <!-- Slide Item -->
            <div class="item">
                <img src="<?= base_url("Assets/images/main-slider/1.jpg")?>">
            </div>
            <div class="item">
                <img src="<?= base_url("Assets/images/main-slider/2.jpg")?>">
            </div>

            <div class="item">
                <img src="<?= base_url("Assets/images/main-slider/3.jpg")?>">
            </div>
            
            <div class="item">
               <img src="<?= base_url("Assets/images/main-slider/4.jpg")?>">
            </div>
           
        </div>
    </section>
    <!-- End Bnner Section -->

    <!-- Promo Section -->
    <section class="promo-section">
        <div class="auto-container">
            <div class="row no-gutters">
                <!-- Promo BLock -->
                <div class="promo-block col-lg-4 col-md-6 col-sm-12 wow fadeIn">
                    <div class="inner-box" style="background-image: url(<img src="<?= base_url("Assets/images/resource/promo-1.jpg")?>">);">
                        <span class="icon flaticon-donate"></span>
                        <h3><a href="about.php">Donation</a></h3>
                        <div class="text">The first mate and his Skipper too will do  in their tropic island nest.</div>
                        <div class="link-box">
                            <a href="contact.php" class="theme-btn btn-style-one">Donate now <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Promo BLock -->
                <div class="promo-block col-lg-4 col-md-6 col-sm-12 wow fadeIn" data-wow-delay="400ms">
                    <div class="inner-box" style="background-image: url(<?= base_url("Assets/images/resource/promo-2.jpg")?>);">
                        <span class="icon flaticon-heart-7"></span>
                        <h3><a href="about.php">Volunteers</a></h3>
                        <div class="text">The first mate and his Skipper too will do  in their tropic island nest.</div>
                        <div class="link-box">
                            <a href="contact.php" class="theme-btn btn-style-one">Join us <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Promo BLock -->
                <div class="promo-block col-lg-4 col-md-6 col-sm-12 wow fadeIn" data-wow-delay="800ms">
                    <div class="inner-box" style="background-image: url(<?= base_url("Assets/images/resource/promo-3.jpg")?>);">
                        <span class="icon flaticon-planet-earth"></span>
                        <h3><a href="about.php">Save Planet</a></h3>
                        <div class="text">The first mate and his Skipper too will do  in their tropic island nest.</div>
                        <div class="link-box">
                            <a href="contact.php" class="theme-btn btn-style-one">Contact us<i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Promo Section -->

    <!-- About Section -->
    <section class="about-section">
        <div class="auto-container">
            <div class="row">
                <!-- Content Column -->
                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="sec-title">
                            <h2>About Us</h2>
                        </div>
                        <div class="text">
						The Dwarka Club Federation was founded in the year 2019 by a social entrepreneur who brought the group forward to contribute to the betterment of society with a focus on child education, Indian arts promotion and women empowerment. We share a common dream - a world where every child is bathed lovingly and given opportunities for their bright future; A world where no child's innocence is revealed due to the horrors of child labor, and a world where women's wellbeing is taken care of and empowered to sustain themselves and their families.</div> <div class="link-box"><a href="about.php">Read more <i class="fa fa-angle-right"></i></a></div>

                    </div>
                </div>

                <!-- Image Column -->
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="image-box wow fadeIn">
                        <figure class="image"><a href="<?= base_url("Assets/images/resource/image-1.jpg")?>" class="lightbox-image" data-fancybox="images"><img src="<?= base_url("Assets/images/resource/image-1.jpg")?>" alt=""></a></figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End About Section -->

    <!-- Causes Section -->
    <section class="causes-section" style="background-image: url(<?= base_url("Assets/images/background/1.jpg")?>);">
        <div class="auto-container">
            <div class="sec-title text-center light">
                <h2>Popular Events</h2>
            </div>

            <div class="row">
                <!-- Cause Block -->
                <div class="cause-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure><img src="<?= base_url("Assets/images/resource/cause-1.jpg")?>" alt=""></figure>
                            <div class="overlay-box"><a href="event.php" class="theme-btn btn-style-two">Donate Now <i class="fa fa-angle-right"></i></a></div>
                        </div>
                     
                    </div>
                </div>
                
                <!-- Cause Block -->
                <div class="cause-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure><img src="<?= base_url("Assets/images/resource/cause-2.jpg")?>" alt=""></figure>
                            <div class="overlay-box"><a href="event.php" class="theme-btn btn-style-two">Donate Now <i class="fa fa-angle-right"></i></a></div>
                        </div>
                  
                    </div>
                </div>

                <!-- Cause Block -->
                <div class="cause-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure><img src="<?= base_url("Assets/images/resource/cause-3.jpg")?>" alt=""></figure>
                            <div class="overlay-box"><a href="event.php" class="theme-btn btn-style-two">Donate Now <i class="fa fa-angle-right"></i></a></div>
                        </div>
                   
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Causes Section -->

    <!-- Events and Donation -->
    <section class="events-and-donation">
        <div class="auto-container">
            <div class="row">
                <!-- Events Column -->
                
                <div class="events-column col-lg-8 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="sec-title">
                            <h2>Upcoming Events</h2>
                        </div>
                                <?php 
                        $i=1;
                        foreach($event as $art){
                        if($i<=2)
                        {  ?>
                        <div class="event-block wow fadeIn">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><a href="<?= base_url() ?>welcome/event_detail/<?php echo $art->event_id;?>"><img src="<?php echo $art->event_image; ?>" alt=""></a></figure>
                                </div>
                                <div class="content-box">
                                    <span class="date"><i class="fa fa-calendar"></i> <?php echo $art->event_date; ?></span>
                                    <h3><a href="<?= base_url() ?>welcome/event_detail/<?php echo $art->event_id;?>"><?php echo $art->event_title; ?></a></h3>
                                    <div class="info"><i class="fa fa-clock-o"></i> <?php echo $art->event_time; ?>@ <?php echo $art->event_location;?></div>
                                    <div class="text"><?php echo $art->event_description;?>.</div>
                                </div>
                            </div>
                        </div>
                <?php } $i++; }  ?>
                <!----------- end event block ------------>
                  </div>
                </div>

                <!-- Form Column -->
                <div class="form-column col-lg-4 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="sec-title">
                            <h2>Make Donation</h2>
                        </div>

                        <!-- Donation Form -->
                        <div class="donation-form wow fadeInRight">
                            <form method="post" action="http://t.commonsupport.com/NGO-demo/index.php">
                                <div class="form-group">
                                    <input type="text" name="name" placeholder="Name*" required="">
                                </div>

                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Email *" required="">
                                </div>
                                
                                <div class="form-group">
                                    <input type="text" name="email" placeholder="Number *" required="">
                                </div>
                                
                                <div class="form-group">
                                    <textarea class="form-control" rows="5" placeholder="Message"></textarea>
                                </div>

                               

                                <div class="form-group">
                                    <button type="submit" class="theme-btn btn-style-one">Donate Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Events and Donation -->

    <!-- Call To Action -->
    <section class="call-to-action" style="background-image: url(<?= base_url("Assets/images/background/2.jpg") ?>images/background/2.jpg);">
        <div class="auto-container">
            <div class="content-box">
                <div class="text">We rise by lifting the poor childrens</div>
                <h2>Become the part of World</h2>
                <div class="btn-box"><a href="contact.php" class="theme-btn btn-style-two">Join now <i class="fa fa-angle-right"></i></a></div>
            </div>
        </div>
    </section>
    <!-- End Call To Action -->

    <!-- Gallery Section -->
    <section class="gallery-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h2>Our Gallery</h2>
            </div>

            <div class="row">
                <div class="gallery-block col-lg-6 col-md-6 col-sm-12 wow fadeIn" data-wow-delay="600ms">
                    <div class="image-box">
                        <figure class="image"><a href="<?= base_url("Assets/images/main-slider/g33.jpg") ?>" class="lightbox-image" data-fancybox="gallery"> <img src="<?= base_url("Assets/images/main-slider/g33.jpg") ?>" alt=""></a></figure>
                    </div>
                </div>

                <!-- Gallery Block -->
                <div class="gallery-block col-lg-6 col-md-6 col-sm-12 wow fadeIn" data-wow-delay="400ms">
                    <div class="image-box">
                        <figure class="image"><a href="<?= base_url("Assets/images/main-slider/g33.jpg") ?>" class="lightbox-image" data-fancybox="gallery"><img src="<?= base_url("Assets/images/main-slider/g33.jpg") ?>" alt=""></a></figure>
                    </div>
                </div>

              
            </div>

            <a href="<?= base_url()?>Welcome/Galllery" class="float-right">View More Pics</a>
        </div>
    </section>
    <!--End Gallery Section -->


    <!--End Testimonial Section -->

    <!-- News Section --------->
    <section class="news-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h2>Latest News</h2>
            </div>

            <div class="row">
                <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="blog-single-1.php"><img src="<?= base_url("Assets/images/resource/news-1.jpg")?>" alt=""></a></figure>
                            <span class="date">24 Jun 2019</span>
                        </div>
                        <div class="lower-content">
                            <ul class="info">
                                <li><a href="blog-single-1.php"><i class="fa fa-folder-o"></i>Health Care</a></li>
                                <li><a href="blog-single-1.php"><i class="fa fa-comment-o"></i>10 comments</a></li>
                            </ul>
                            <h3><a href="blog-single-1.php">Directly and its program direct cash to very poor individual</a></h3>
                        </div>
                    </div>
                </div>

                <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="blog-single-1.php"><img src="<?= base_url("Assets/images/resource/news-2.jpg")?>" alt=""></a></figure>
                            <span class="date">24 Jun 2019</span>
                        </div>
                        <div class="lower-content">
                            <ul class="info">
                                <li><a href="blog-single-1.php"><i class="fa fa-folder-o"></i>Health Care</a></li>
                                <li><a href="blog-single-1.php"><i class="fa fa-comment-o"></i>10 comments</a></li>
                            </ul>
                            <h3><a href="blog-single-1.php">Lead to overpopulation and long-run of the damage</a></h3>
                        </div>
                    </div>
                </div>

                <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="blog-single-1.php"><img src="<?= base_url("Assets/images/resource/news-11.jpg")?>"alt=""></a></figure>
                            <span class="date">24 Jun 2019</span>
                        </div>
                        <div class="lower-content">
                            <ul class="info">
                                <li><a href="blog-single-1.php"><i class="fa fa-folder-o"></i>Health Care</a></li>
                                <li><a href="blog-single-1.php"><i class="fa fa-comment-o"></i>10 comments</a></li>
                            </ul>
                            <h3><a href="blog-single-1.php">The people whose lives are saved just tie the next year</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>  

   

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
<!--Scroll to top----
<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/appear.js"></script>
<script src="js/script.js"></script>---->
</body>

</html>