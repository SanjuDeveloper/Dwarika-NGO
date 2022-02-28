<?php 
		require 'ngo_db.php';
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
			
			$event = $db->Create_Event($event_title,$event_description,$event_location,$event_date,$event_time,$store,$timestamp);
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
		
		?>
		
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<title>Dwarka Club Fedration | Events Detail</title>
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
				<form action="#" method="POST" enctype="multipart/form-data">
					<div class="row">
						<div class="col-sm-4">
							<label for="file1">
								<input type="file" id="file1" class="form-control" name="image_one">
							</label>
						</div>

						<div class="col-sm-4">
							<label for="file1">
								<input type="file" id="file1" class="form-control" name="image_two">
							</label>
						</div>

						<div class="col-sm-4">
							<label for="file1">
								<input type="file" id="file1" class="form-control" name="image_three">
							</label>
						</div>

						<hr>

						<div class="col-sm-6 mt-5 d-block mx-auto">
							<input type="submit" class="btn theme-btn btn-style-one btn-block border-warning" value="UPLOAD IMAGES" name="image_submit" id="image_submit">
							
						</div>


						
					</div>
				</form>

                
            </div>

			<form action="#" method="POST"  enctype="multipart/form-data">
				<div class="auto-container p-5"  id="event-upload">
					<div class="sec-title text-center">
						<h2>Post Event</h2>
					</div>

					<div class="row">
						<div class="col-sm-12 mb-3">
							<label>Event Title</label>
							<input type="text" class="form-control" placeholder="Enter Event Title" name="event_title">
						</div>


						<div class="col-sm-12 mb-3">
							<label>Event Description</label>
							<textarea class="form-control" name="event_description" placeholder="Enter Event Details" rows="8"></textarea>
						</div>

						<div class="col-sm-3">
							<label>Event Picture</label>
							<label for="file1">
								<!--<input type="file" name="event_image"  id="file1" class="form-control" ="">-->
								<input type="file" name="image_url" class="form-control" >
							</label>
						</div>



						<div class="col-sm-3 mb-3">
							<label>Event Location</label>
							<input type="text" class="form-control" placeholder="Enter Event City" name="location">
						</div>

						<div class="col-sm-3 mb-3">
							<label>Event Date</label>
							<input type="date" class="form-control" placeholder="Enter Date" name="event_date">
						</div>

						<div class="col-sm-3 mb-3">
							<label>Event Time</label>
							<input type="time" class="form-control" placeholder="Enter Time" name="event_time">
						</div>


						<hr>

						<div class="col-sm-6 mt-5 d-block mx-auto">
							<input type="submit" class="btn theme-btn btn-style-one btn-block border-warning" value="POST EVENT" name="submit" id="submit">
							
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
							  </tr>
							</thead>
							<tbody>
							<?php 
							
							$events = $db->Get_Event();
							foreach($events as $event)
							{?>
							
							  <tr>
								<td><?php echo $event['event_description'];?></td>
								<td><?php echo $event['event_date']; ?></td>
								<td><a  id="delete" href="admin-page.php?id=<?php echo $event['event_id']; ?>" class="btn btn-danger">Delete</a> </td>
							  </tr>
							  
							<?php }  ?>
						   
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<script>
	  $(document).ready(function() 
		{
			$('#image_submit').click(function()
			{
				tempAlert("Upload Image Successfully",3000,"#36F30C"); 
			});
			
			$('#submit').click(function()
			{
				tempAlert("Upload Event Successfully",3000,"#36F30C"); 
			})
			
			;$('#delete').click(function()
			{
				tempAlert("Delete Event Successfully",3000,"#36F30C"); 
			});
			
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
		}
	</script>
