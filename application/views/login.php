<?php 
		/*require 'ngo_db.php';
		$db = new ngo();
		$db->Connect();
		session_start();
		$name="";
		$password="";
		$error="";
		
		if(isset($_POST['submit']))
		{
			$password = $_POST['password'];
			$name = $_POST['name'];
			//die("name=".$name."password=".$password);
			
			$users = $db->Get_User();
			$user_login=false;
			foreach($users as $Login)
			{
				$uname = $Login['user_name'];
				$pass = $Login['password'];
				
			}
			if(($uname==$name)&& ($password==$pass))
			{
				header("location:admin-page.php");
				
				$session_time=86400;
				$_SESSION['adminlogin']=$uname;
				$_SESSION['adminsession'] = time(); 
				$_SESSION['adminexpire'] = $_SESSION['adminsession'] + ($session_time);
				
			}else
			{
				$error="Invalid user name And password";
				/*echo '<script language="javascript">'; 
					echo 'alert("Invalid Username And Password")';
					echo '</script>'; *//*
			}
		}
		if($_SESSION['adminlogin'])
		{
				//header("location:admin-page.php");
		}
*/

?>
<?php
    require_once "config.php";
	if (isset($_SESSION['access_token'])) {
		header('Location:index.php');
		exit();
	}
	$loginURL = $gClient->createAuthUrl();
	
?>


<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link href="<?= base_url("Assets/css/bootstrap.css")?>" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?= base_url("Assets/css/login.css")?>">
</head>
<body>
	
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-2"></div>
            <div class="col-lg-6 col-md-8 login-box">
                <div class="col-lg-12 login-key">
                    <i class="fa fa-key" aria-hidden="true"></i>
                </div>
                <div class="col-lg-12 login-title">
                    ADMIN PANEL
                </div>
				<div class="col-lg-12" style="font-size:12px;color:red">
                  <?php if($error =$this->session->flashdata('failed_login')): echo $error; ?>
                </div> <?php endif; ?>

                <div class="col-lg-12 login-form">
                    <div class="col-lg-12 login-form">
                        <form action="#" method="POST">
                            <div class="form-group">
                                <label class="form-control-label">USERNAME</label>
                                <input type="text" name="name"  value="<?php set_value('name'); ?>" class="form-control">
								<?PHP echo form_error('name'); ?>
								
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">PASSWORD</label>
                                <input type="password" name="password"  value="<?php set_value('password'); ?>"class="form-control" i>
								<?PHP echo form_error('password'); ?>
								
                            </div>

                            <div class="col-lg-12 loginbttm">
                                <div class="col-lg-6 login-btm login-text">
                                     <input type="button"  onclick="window.location = '<?php echo $loginURL ?>';"  value="LOGIN WITH G-MAIL" name="google" class="btn btn-outline-primary">
                                </div>
                                <div class="col-lg-6 login-btm login-button">
                                    <button type="submit"  name="submit" class="btn btn-outline-primary">LOGIN</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-md-2"></div>
            </div>
        </div>
    </div>

</body>
</html>