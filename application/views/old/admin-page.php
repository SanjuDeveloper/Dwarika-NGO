<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<title>NGO-demo - | Events Detail</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/custom.css" rel="stylesheet">
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
    
      <header class="main-header">
        <!--Header Top-->
        <div class="header-top">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <div class="top-left">
                        <div class="text"><i class="icon fa fa-heart"></i> We rise by lifting the poor childrens</div>
                    </div>
                    <div class="top-right clearfix">
                   
                        <ul class="social-icon-one clearfix">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-vine"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Top -->

        <!-- Header Upper -->
        <div class="header-upper">
            <div class="inner-container">
                <div class="auto-container clearfix">
                    <div class="logo-outer">
                        <div class="logo"><a href="index.php"><img src="images/logo.png" alt="" title=""></a></div>
                    </div>

                    <div class="nav-outer clearfix">
                        <!--Mobile Navigation Toggler For Mobile--><div class="mobile-nav-toggler"><span class="icon flaticon-menu-1"></span></div>
                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="navbar-header">
                                <!-- Togg le Button -->      
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="icon flaticon-menu-1"></span>
                                </button>
                            </div>
                            
                            <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li><a href="index.php">HOME</a></li>
                                    <li><a href="javascript:void(0)" id="upload-btn">UPLOAD PHOTO</a></li>
                                    <li><a href="javascript:void(0)" id="post-btn">POST EVENT</a></li>
                                    
                                </ul>
                            </div>
                        </nav>
                        <!-- Main Menu End-->

                         <!-- Main Menu End-->
                        <div class="outer-box clearfix">
                            <!--Search Box-->
                            <div class="search-box-outer">
                                <div class="dropdown">
                                    <button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-user"></span></button>
                                    <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
                                        <li class="panel-outer">
                                            <div class="form-container">
                                                <form method="post" action="http://t.commonsupport.com/NGO-demo/blog.html">
                                                    <div class="form-group">
                                                        <input type="search" name="field-name" readonly="" value="Admin Panel" required>
                                                        <button type="submit" class="search-btn"><span class="fa fa-user"></span></button>
                                                    </div>
                                                </form>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon flaticon-cancel"></span></div>
            
            <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            <nav class="menu-box">
                <div class="nav-logo"><a href="index.php"><img src="images/nav-logo.png" alt="" title=""></a></div>
                
                <ul class="navigation clearfix"><!--Keep This Empty / Menu will come through Javascript--></ul>
            </nav>
        </div><!-- End Mobile Menu -->

    </header>
    <!-- End Main Header -->

    <!--Page Title-->
    <section class="page-title" style="background-image: url(images/background/5.jpg);">
        <div class="auto-container">
            <h1>Admin Panel</h1>
            <ul class="page-breadcrumb">
                <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
                <li>Admin Panel</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->


    <!-- Contact Section -->
    <section class="gallery-section ">
        <div class="container border-1">

            <div class="auto-container p-5"  id="image-upload">
                <div class="sec-title text-center">
                    <h2>Upload Gallery Images</h2>
                </div>

                <div class="row">
                    <div class="col-sm-4">
                        <label for="file1">
                            <input type="file" id="file1" class="form-control" name="">
                        </label>
                    </div>

                    <div class="col-sm-4">
                        <label for="file1">
                            <input type="file" id="file1" class="form-control" name="">
                        </label>
                    </div>

                    <div class="col-sm-4">
                        <label for="file1">
                            <input type="file" id="file1" class="form-control" name="">
                        </label>
                    </div>

                    <hr>

                    <div class="col-sm-6 mt-5 d-block mx-auto">
                        <input type="submit" class="btn theme-btn btn-style-one btn-block border-warning" value="UPLOAD IMAGES" name="">
                        
                    </div>


                    
                </div>

                
            </div>


            <div class="auto-container p-5"  id="event-upload">
                <div class="sec-title text-center">
                    <h2>Post Event</h2>
                </div>

                <div class="row">
                    <div class="col-sm-12 mb-3">
                        <label>Event Title</label>
                        <input type="text" class="form-control" placeholder="Enter Event Title" name="">
                    </div>


                    <div class="col-sm-12 mb-3">
                        <label>Event Description</label>
                        <textarea class="form-control" placeholder="Enter Event Details" rows="8"></textarea>
                    </div>

                    <div class="col-sm-3">
                        <label>Event Picture</label>
                        <label for="file1">
                            <input type="file" id="file1" class="form-control" name="">
                        </label>
                    </div>



                    <div class="col-sm-3 mb-3">
                        <label>Event Location</label>
                        <input type="text" class="form-control" placeholder="Enter Event City" name="">
                    </div>

                    <div class="col-sm-3 mb-3">
                        <label>Event Date</label>
                        <input type="date" class="form-control" placeholder="Enter Date" name="">
                    </div>

                    <div class="col-sm-3 mb-3">
                        <label>Event Time</label>
                        <input type="time" class="form-control" placeholder="Enter Time" name="">
                    </div>


                    <hr>

                    <div class="col-sm-6 mt-5 d-block mx-auto">
                        <input type="submit" class="btn theme-btn btn-style-one btn-block border-warning" value="POST EVENT" name="">
                        
                    </div>


                    
                </div>
  
              
            </div>
            <div class="auto-container">
                <div class="sec-title text-center">
                    <h2>DELETE EVENT</h2>
                </div>
                <table class="table table-dark">
                    <thead class="bg-warning">
                      <tr>
                        <th>Event Title</th>
                        <th>Date</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim ven.</td>
                        <td>12/12/2019</td>
                        <td><a href="#" class="btn btn-danger">Delete</a> </td>
                      </tr>
                   
                    </tbody>
                </table>
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

<script type="text/javascript">

</script>
</body>

</html>