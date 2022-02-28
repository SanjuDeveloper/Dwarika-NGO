<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<title>NGO-demo - | Events Detail</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">

<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">

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
    <section class="page-title" style="background-image: url(images/background/5.jpg);">
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
                            <li><i class="fa fa-map-marker"></i><span>Address :</span> Thaba-Tseka, NGO-demo st,<br> Lesotho, South Africa.</li>
                            <li><i class="fa fa-phone"></i><span>Phone :</span> (+1) 234 6789 0001</li>
                            <li><i class="fa fa-envelope-o"></i><span>Email :</span><a href="#">mail@supporthere.com</a></li>
                            <li><i class="fa fa-globe"></i><span>Website :</span> <a href="#">www.NGO-demo.com</a></li>
                        </ul>
                    </div>
                </div>
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

<!--Scroll to top-->
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