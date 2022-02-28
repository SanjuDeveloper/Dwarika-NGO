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
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
							<?php  
								/*session_start();
								
							if(isset($_SESSION['adminlogin']))

								{
									$link = "admin-page.php";
								}else
								{
									$link = "login.php";
								}	*/							
							?>
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
                        <div class="logo"><a href="<?php echo  base_url();?>welcome"><img src="<?= base_url("Assets/images/logo.png") ?>" alt="" title=""></a></div>
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
                                    <li><a href="<?= base_url("") ?>welcome">Home</a></li>

                                    <li class="dropdown"><a href="<?= base_url("") ?>welcome/about">About us</a>
                                        <ul>
                                            <li><a href="<?= base_url()?>welcome/vision">Director's Vision</a></li>
                                            <li><a href="<?= base_url()?>welcome/rule">Rules</a></li>
                                            <li><a href="<?= base_url()?>welcome/about#team">Our Team</a></li>
                                            
                                        </ul>
                                    </li>
                                    
                                    <li ><a href="<?= base_url() ?>welcome/Galllery">Gallery</a></li>
                                  
                                    <li><a href="<?= base_url()?>welcome/event">Event</a></li>
                                    
                                    <li><a href="<?= base_url() ?>welcome/contact">Contact us</a></li>

                                    <li><a href="<?= base_url() ?>welcome/Login">Login</a></li>
                                </ul>
                            </div>
                        </nav>
                        <!-- Main Menu End-->

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
            	<div class="nav-logo"><a href="index.php"><img src="<?= base_url("Assets/images/nav-logo.png") ?>" alt="" title=""></a></div>
                
                <ul class="navigation clearfix"><!--Keep This Empty / Menu will come through Javascript--></ul>
            </nav>
        </div><!-- End Mobile Menu -->

    </header>