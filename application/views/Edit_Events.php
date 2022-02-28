<?php 
		/*require 'ngo_db.php';
		$db = new ngo();
		$db->Connect();
		$timestamp = time();
		$uname="";
		$password="";
		$id="";
		$user_login="";
		$name="";
		$error="vv";
		$user_name="";
		if(isset($_POST['submit']))
		{
						$store=null;
					

			$F_name = $_FILES['image_url']['name'];				

			$F_tmp = $_FILES['image_url']['tmp_name'];
			$store = "event_images/".$F_name;
			//$store = "event_images/".time().$F_name;
			move_uploaded_file($F_tmp,$store);
			
			
			$event_title = $_POST['event_title'];
			$event_description = $_POST['event_description'];
			$event_location = $_POST['location'];
			$event_date = $_POST['event_date'];
			$event_time = $_POST['event_time'];
			
			$event_type = $_POST['event_type'];
			
			$event = $db->Create_Event($event_title,$event_description,$event_location,$event_date,$event_time,$event_type,$store,$timestamp);
			if(is_numeric($event))
			{
				echo '<script language="javascript">'; 
				echo 'alert("Addedded Event Successfully")';
				echo '</script>'; 
			}else
			{
				echo "failed".$events->getMessage();
			}
			
		}
		if($_GET['id'])
		{
			$id= $_GET['id'];
			$db->Delete_Event("WHERE event_id='$id'");
			echo '<script language="javascript">'; 
				echo 'alert("Delete Event Successfully")';
				echo '</script>'; 
			//header("location:admin-page.php");
		}
		if(isset($_POST['image_submit']))  
		{
			$image_one=null;
			$image_two=null;
			$image_three=null;
			
		
			
			$F_name = $_FILES['image_one']['name'];
			$F_tmp = $_FILES['image_one']['tmp_name'];
			$image_one = "Gallery/".time().$F_name;
			
			move_uploaded_file($F_tmp,$image_one);
			
			$FF_name = $_FILES['image_two']['name'];
			$FF_tmp = $_FILES['image_two']['tmp_name'];
			$image_two = "Gallery/".time().$FF_name;
			move_uploaded_file($FF_tmp,$image_two);
			
			$FFF_name = $_FILES['image_three']['name'];
			$FFF_tmp = $_FILES['image_three']['tmp_name'];
			//$image_three = "Gallery/".time().$FFF_name;
			$image_three = "Gallery/".$FFF_name;
			move_uploaded_file($FFF_tmp,$image_three);
			
			$Gallery = $db->Create_Gallery($image_one,$image_two,$image_three,$timestamp);
			if(is_numeric($Gallery))
			{
				echo '<script language="javascript">'; 
				echo 'alert("Upload Successfully")';
				echo '</script>'; 
				
			}else{
				echo '<script language="javascript">'; 
				echo 'alert("Upload failed")';
				echo '</script>'; 
			}
		}
		*/
		?>
		
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<title>Dwarka Club Fedration | Events Detail</title>
<!-- Stylesheets -->
<link href="<?= base_url("Assets/css/bootstrap.css")?>" rel="stylesheet">
<link href="<?= base_url("Assets/css/style.css")?>" rel="stylesheet">
<link href="<?= base_url("Assets/css/custom.css")?>" rel="stylesheet">
<link href="<?= base_url("Assets/css/responsive.css")?>" rel="stylesheet">

<link rel="shortcut icon" href="<?= base_url("Assets/images/favicon.png")?>" type="image/x-icon">
<link rel="icon" href="<?= base_url("Assets/images/favicon.png")?>" type="image/x-icon">

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
                        <div class="logo"><a href="index.php"><img src="<?= base_url("Assets/images/logo.png")?>" alt="" title=""></a></div>
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
                                    <li><a href="<?= base_url("")?>welcome">HOME</a></li>
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
                <div class="nav-logo"><a href="index.php"><img src="<?= base_url("Assets/images/nav-logo.png")?>" alt="" title=""></a></div>
                
                <ul class="navigation clearfix"><!--Keep This Empty / Menu will come through Javascript--></ul>
            </nav>
        </div><!-- End Mobile Menu -->

    </header>
    <!-- End Main Header -->

    <!--Page Title-->
    <section class="page-title" style="background-image: url(<?= base_url("Assets/images/background/5.jpg")?>);">
        <div class="auto-container">
            <h1>Admin Panel</h1>
            <ul class="page-breadcrumb">
                <li><a href="<?= base_url()?>welcome"><i class="fa fa-home"></i> Home</a></li>
                <li>Admin Panel</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->


    <!-- Contact Section -->
    <section class="gallery-section ">
        <div class="container border-1">

		<?php echo form_open_multipart('Welcome/Edit_Event'); ?>
		<input type="hidden" name="timestamp" id="timestamp" value="<?php echo time(); ?>">
				<div class="auto-container p-5"  id="event-upload">
					<div class="sec-title text-center">
						<h2>Edit Event</h2>
					</div>

					<div class="row">
						<div class="col-sm-12 mb-3">
						    <?php if($error =$this->session->flashdata('sms')):  $class =$this->session->flashdata('class')?>
						    
							<div class="alert <?= $class ?>">
							  <?php echo $error; ?>
							</div>
						</div>
						<?php endif; ?>
                        <?php 
                       
						//$events = $db->Get_Event();

						foreach($events as $event)
						{
							//print_r($events);  
							?>
							<input type="hidden" name="event_id" value="<?php echo $event['event_id']; ?>">

					</div>
						<div class="row">
						<div class="col-sm-12 mb-3">
							<label>Event Title</label>
							<input type="text" class="form-control" id="event_title" value="<?php echo $event['event_title']; ?>" name="event_title">
						</div>


						<div class="col-sm-12 mb-3">
							<label>Event Description</label>
							<?php  echo form_textarea(['class'=>'form-control','placeholder'=>'Article Body','name'=>'event_description','rows'=>'8','value'=>set_value('artical_body',$event['event_description'])]); ?>
								</div>

						<div class="col-sm-3">
							<label>Event Picture</label>
							<label for="file1">
							<?php echo form_upload(['name'=>'event_image', 'id'=>'event_image','class'=>'form-control']); ?>
							<?php if(isset($upload_error))
								{
								  echo $upload_error;
								} ?>
							</label>    
						</div>



						<div class="col-sm-3 mb-3">
							<label>Event Location</label>
							<input type="text" class="form-control" placeholder="Enter Event City" value="<?php echo $event['event_location']; ?>" name="event_location">
						</div>

						<div class="col-sm-2 mb-3">
							<label>Event Date</label>
							<input type="date" class="form-control" placeholder="Enter Date" value="<?php echo $event['event_date']; ?>" name="event_date">
						</div>

						<div class="col-sm-2 mb-3">
							<label>Event Time</label>
							<input type="time" class="form-control" placeholder="Enter Time" value="<?php echo $event['event_time']; ?>" name="event_time">
						</div>

						<div class="col-sm-2 mb-3">
							<label>Event Type</label>
							
							<select class="form-control" id="event_type" name="event_type">
							<option selected> <?php echo $event['event_type']; ?></option>
                            <option value="past">PAST</option>
							<option value="upcomming">Upcomming</option>

							</select>
						</div>

						<hr>

						<div class="col-sm-6 mt-5 d-block mx-auto">
						<?php  echo form_submit(['type'=>'submit','id'=>'edit_event','class'=>'btn theme-btn btn-style-one btn-block border-warning','value'=>'EDIT EVENT']);  ?>
							
						
						</div>

<?php
                       } ?>						
					</div>
	  
				  
				</div>
			</form>
           
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

<script src="js/script.js"></script>

<script type="text/javascript">

</script>
</body>

</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

