	<?php
	
		class main_config
		{
			
			//session_start();
			//require_once "API/vendor/autoload.php";
			function index()
			{
				$this->load->library("'API/vendor/autoload'");
				$this->autoload->index();
				$gClient = new Google_Client();
				$gClient->setClientId("977761559836-6i6vncmaj53edfsv1v6s9ao4bkiiseeu.apps.googleusercontent.com");
				$gClient->setClientSecret("hEE1iFpype_WDUuRgvlyiHuc");
				$gClient->setApplicationName("Technical Suneja");
				$gClient->setRedirectUri("http://localhost/dwarikango/WGoogle_User/Google_Login");
				$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");	
				/*$con = new mysqli('localhost', 'root','' ,'Google_Api');
				if ($con->connect_error)
				{
				  die("Connection failed: " . $con->connect_error);
				}*/
			}
			
	    }	
	?>