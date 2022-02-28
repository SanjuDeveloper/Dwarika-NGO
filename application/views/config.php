<?php
	//session_start();
	require_once "API/vendor/autoload.php";
	$gClient = new Google_Client();
	$gClient->setClientId("97755817054-vvgj5ruetl18cvoh4s3q798mrmakmr8e.apps.googleusercontent.com");
	$gClient->setClientSecret("gpLLMikIz-klPmALd9hJn2K3");
	$gClient->setApplicationName("Technical Suneja");
	$gClient->setRedirectUri("http://localhost/Google_API/g-callback.php");
	$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");	
	$con = new mysqli('localhost', 'root','' ,'google_api');
    if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}	
?>