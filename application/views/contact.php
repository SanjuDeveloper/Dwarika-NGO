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
    <section class="page-title" style="background-image: url(<?= base_url("images/background/5.jpg") ?>)">
        <div class="auto-container">
            <h1>Contact Us</h1>
            <ul class="page-breadcrumb">
                <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
                <li>Contact Us</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->


    <!-- Contact Section -->
    <section class="contact-section">
        <div class="auto-container">
            <div class="row">
                <div class="form-column col-lg-7 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <!--Contact Form-->
                        <div class="contact-form">
                            <div class="sec-title">
                                <h2>Leave a Message</h2>
                            </div>
                            <form method="post" action="http://t.commonsupport.com/NGO-demo/sendemail.php" id="contact-form"> 
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                        <input type="text" name="username" placeholder="Name" required="">
                                    </div>
                                    
                                    <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                        <input type="email" name="email" placeholder="Email" required="">
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <input type="text" name="subject" placeholder="Subject" required="">
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <textarea name="message" placeholder="Message"></textarea>
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <button class="theme-btn btn-style-three" type="submit" name="submit-form">Send Message <i class="fa fa-angle-right"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Info Column -->
                <div class="info-column col-lg-5 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="sec-title">
                            <h2>Get in Touch</h2>
                        </div>
                        <div class="text">A dream and we just know now we're gonna make oursel dream come true the first mate and his Skipper too willon do their very comforts able in their tropic too island nest they were four men living all hey rady the all became the wanted by the government they survive.</div>
                        <ul class="contact-info-list">
                            <li><i class="fa fa-map-marker"></i><span>Address :</span> 49 POCKET-6 SECTOR-12<br> DWARKA NEW DELHI.<br>110078</li>
                            <li><i class="fa fa-phone"></i><span>Phone :</span> (+1) +91 98991 94428</li>
                            <li><i class="fa fa-envelope-o"></i><span>Email :</span><a href="#">contact@dwarkaclubfedration.com</a></li>
                            <li><i class="fa fa-globe"></i><span>Website :</span> <a href="#">www.NGO-demo.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="container">
       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3503.160011762498!2d77.04098881440626!3d28.594976142531998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d1ac56179de23%3A0xac975909bfa75ad1!2sPocket%206%2C%20Sector%2012%20Dwarka%2C%20Dwarka%2C%20Delhi%2C%20110075!5e0!3m2!1sen!2sin!4v1575818818840!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>
    <!--End Contact Page Section -->
    
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
<script src="<?= base_url("Assets/js/script.js")?>"></script>
</body>

</html>