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
            <h1>EVENTS</h1>
            <ul class="page-breadcrumb">
                <li><a href="<?= base_url() ?>welcome/index"><i class="fa fa-home"></i> Home</a></li>
                <li>Events</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Sidebar Page Container -->
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Content Side-->
                <div class="content-side col-xl-9 col-lg-8 col-md-12 col-sm-12">
                    <div class="events">
                        <!-- Event Block -->
						
						<?php  
					/*if(count($event)): 
                    $count = $this->uri->segment(3);
                    */
                    foreach($event as $art): 
                        
								?>   
                                
								<div class="event-block style-two wow fadeInUp">
									<div class="inner-box">
										<div class="image-box">
											<figure class="image"><a href="<?= base_url() ?>welcome/event_detail/<?php echo $art->event_id;?>">
                                            <img src="<?php echo $art->event_image; ?>" alt="" width="20" hieght="20"></a></figure>
										</div>
										<div class="content-box">
											<span class="date"><i class="fa fa-calendar"></i>Date 
                                             <?php echo $art->event_date; ?>

                                            </span>
											<h3><a href="<?= base_url() ?>welcome/event_detail/<?php echo $art->event_id;?>">
                                            <?php 
                                           ///echo $art->event_id; 
                                            
                                          $date2 =  $art->event_date;
                                            $date1 = date("Y-m-d");
                                            //echo "<br>" . $date1 . "<br>";
                                            $today = strtotime($date1);
                                            $expiration_date = strtotime($date2);
                                            if($expiration_date>$today)
                                            {
                                                $type="UPCOMMING";
                                            }else
                                            {
                                                
                                                $type="PAST";
                                            }                                             
                                                echo $art->event_title."(".$type.")";
                                            
                                            ?> </a></h3>
											<div class="info"><i class="fa fa-clock-o"></i><?php echo $art->event_time; ?>@<?php echo $art->event_location; ?></div>
											<div class="text"><?php echo $art->event_description; ?>.</div>
										</div>
									</div>
								</div>
                        <?php  endforeach;  ?>
					<?php //endif   ?>
                   
                        <!-- Styled Pagination -->
                      
                    </div>
                </div>
                <div class="sidebar-side col-xl-3 col-lg-4 col-md-12 col-sm-12">
                    <div class="sidebar">
                

                        <!-- Popular Posts -->
                        <div class="sidebar-widget popular-posts">
                            <div class="sidebar-title"><h4>Popular Events</h4></div>
                            <!-- Post -->
                            <?php 
                            $i=1;
                            foreach($event as $art): 
                            if($i<=2)
                            {  ?>
                           
                            <article class="post">
                                <div class="thumb">
                                <img src="<?php echo $art->event_image; ?>" style="border-radius:30%; height:30%; width:30%;" alt=""></div>
                                <div class="text">
                                <a href="causes-detail.html"><?php echo $art->event_title; ?>"</a></div>
                              
                            </article>
                            <?php } $i++; ?>
                            <?php  endforeach;  ?>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    
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
<script src="<?= base_url("Assets/js/script.js")?>"></script>

<script src="js/script.js"></script>
</body>

</html>