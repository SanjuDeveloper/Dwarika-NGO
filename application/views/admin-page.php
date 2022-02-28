
		
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

            <div class="auto-container p-5"  id="image-upload">
                <div class="sec-title text-center">
                    <h2>Upload Gallery Images</h2>
                </div>
				<?php echo form_open_multipart('Welcome/Image_Upload'); ?>
				<input type="hidden" value="<?php echo time();?>" name="timestamp" >
					<div class="row">
						<div class="col-sm-4">
							<label for="file1">
							<?php echo form_upload(['name'=>'image_one', 'id'=>'image_one','class'=>'form-control']); ?>
							<?php if(isset($upload_error))
								{
								  echo $upload_error;
								} ?>
							</label>
						</div>

						<div class="col-sm-4">
							<label for="file2">
							<?php echo form_upload(['name'=>'image_two', 'id'=>'image_two','class'=>'form-control']); ?>
							<?php if(isset($upload_error))
								{
								  echo $upload_error;
								} ?>
							</label>
						</div>

						<div class="col-sm-4">
							<label for="file3">
							<?php echo form_upload(['name'=>'image_three', 'id'=>'image_three','class'=>'form-control']); ?>
							<?php if(isset($upload_error))
								{
								  echo $upload_error;
								} ?>
							</label>
						</div>

						<hr>

						<div class="col-sm-6 mt-5 d-block mx-auto">
						<?php  echo form_submit(['type'=>'submit','id'=>'add_gallery','class'=>'btn theme-btn btn-style-one btn-block border-warning','value'=>'UPLOAD IMAGES']);  ?>
							
						</div>


						
					</div>
				</form>

                
            </div>
			<?php echo form_open_multipart('Welcome/Admin_Page'); ?>
			<input type="hidden" name="timestamp" id="timestamp" value="<?php echo time(); ?>">
				<div class="auto-container p-5"  id="event-upload">
					<div class="sec-title text-center">
						<h2>Post Event</h2>
					</div>

					<div class="row">
						<div class="col-sm-12 mb-3">
						    <?php if($error =$this->session->flashdata('sms')):  $class =$this->session->flashdata('class')?>
						    
							<div id="sms" class="alert <?= $class ?>">
							  <?php echo $error; ?>
							</div>
						</div>
						<?php endif; ?>
					</div>
						<div class="row">
						<div class="col-sm-12 mb-3">
							<label>Event Title</label>
							<input type="text" class="form-control" id="event_title" placeholder="Enter Event Title" name="event_title">
						</div>


						<div class="col-sm-12 mb-3">
							<label>Event Description</label>
							<textarea class="form-control" id="event_description" name="event_description" placeholder="Enter Event Details" rows="8"></textarea>
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
							<input type="text" class="form-control" placeholder="Enter Event City" id="event_location" name="event_location">
						</div>

						<div class="col-sm-2 mb-3">
							<label>Event Date</label>
							<input type="date" class="form-control" placeholder="Enter Date" id="event_date" name="event_date">
						</div>

						<div class="col-sm-2 mb-3">
							<label>Event Time</label>
							<input type="time" class="form-control" placeholder="Enter Time" id="event_time" name="event_time">
						</div>

						<div class="col-sm-2 mb-3">
							<label>Event Type</label>
							
							<select class="form-control" id="event_type" name="event_type">
							<option value="past">PAST</option>
							<option value="upcomming">Upcomming</option>

							</select>
						</div>

						<hr>

						<div class="col-sm-6 mt-5 d-block mx-auto">
						<?php  echo form_submit(['type'=>'submit','id'=>'add_event','class'=>'btn theme-btn btn-style-one btn-block border-warning','value'=>'POST EVENT']);  ?>
							
						</div>


						
					</div>
	  
				  
				</div>
			</form>
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
						<th>Edit</th>
					  </tr>
					</thead>
					<tbody>
						<?php 
						
						//$events = $db->Get_Event();
						foreach($evets as $event)
						{?>
						
						  <tr>
							<td><?php echo $event->event_description;?></td>
							<td><?php echo $event->event_date; ?></td>
							<td>
							<?=  form_open('Welcome/Delete_Event'),  
							form_hidden('id',$event->event_id),
							form_submit(['name'=>'submit','value'=>'Delete','class'=>'btn btn-danger']),
							form_close(); ?>
							</td>
							
							<td>
							<?=  form_open('Welcome/Edit_Event'),  
							form_hidden('id',$event->event_id),
							form_submit(['name'=>'submit','value'=>'Edit','class'=>'btn btn-info']),
							form_close(); ?>
							</td>
						  </tr>
						  
						<?php  }  ?>
					   
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

<script type="text/javascript">

</script>
</body>

</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script>
		
		$(document).ready(function()
		{
			funnction()
			{
				document.getElementById("sms").innerHTML = "Add Event Successfully";
				$("#sms").fadeOut(3000);
			}
			
			
			$('#add_event').click(function()       //==  //  for city ==================                      
			{
				///alert("working");
				var event_image = $('#event_image').val();
				var event_location = $('#event_location').val();
				var event_date = $('#event_date').val();
				var event_time = $('#event_time').val();
				var event_type = $('#event_type').val();
				var event_title = $('#event_title').val();
				var event_description = $('#event_description').val();
				var timestamp = $('#timestamp').val();
				
				//alert(event_image);	
				$.ajax({
						url:"<?php echo base_url(); ?>Welcome/Admin_Page",
						method:"POST",
						data:
						{ 
							event_image:event_image,
							event_location:event_location,
							event_date:event_date,
							event_time:event_time,
							event_type:event_type,
							event_title:event_title,
							event_description:event_description,
							timestamp:timestamp												
							
						},
						success:function(data)
						{
							//alert(data);										
						}
					}); 
				
			});	
		});		
</script>
<script>
	  $(document).ready(function() 
		{

			function tempAlert(msg,duration,bgcolor="green")
			{
				var el = document.createElement("div");
				el.setAttribute("style","position:fixed;top:9%;left:0%;background-color:"+bgcolor+";color:#fff;width:100%;height:20px;text-align:center;");
				el.innerHTML = msg;
				setTimeout(function(){
				el.parentNode.removeChild(el);
				},duration);
				document.body.appendChild(el);
			} 

			$('#image_submit').click(function()
			{
				tempAlert("Upload Image Successfully",3000,"#36F30C"); 
			});
			
			$('#add_event').click(function()
			{
				tempAlert("Add Event Successfully",3000,"#36F30C"); 
			})
			
			;$('#delete').click(function()
			{
				tempAlert("Delete Event Successfully",3000,"#36F30C"); 
			});
			
				
		});
	</script>
