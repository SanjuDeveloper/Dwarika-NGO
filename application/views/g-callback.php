<?php
	require_once "config.php";
	$timestamp=time();
	
	if (isset($_SESSION['access_token']))
	{
				$gClient->setAccessToken($_SESSION['access_token']);

		
	}
	else if (isset($_GET['code'])) {
		$token = $gClient->fetchAccessTokenWithAuthCode($_GET['code']);
		$_SESSION['access_token'] = $token;
	} else {
		header('Location: login.php');
		exit();
	}
	$oAuth = new Google_Service_Oauth2($gClient);
	$userData = $oAuth->userinfo_v2_me->get();
	$_SESSION['id'] = $userData['id'];
	$_SESSION['email'] = $userData['email'];
	$_SESSION['gender'] = $userData['gender'];
	$_SESSION['picture'] = $userData['picture'];
	$_SESSION['familyName'] = $userData['familyName'];
	$_SESSION['givenName'] = $userData['givenName'];
 $sql="insert into google_users (clint_id,name,last_name,google_email,gender,picture_link,timestamp) values
 ('".$userData['id']."','".$userData['givenName']."','".$userData['familyName']."','".$userData['email']."',
 '".$userData['gender']."','".$userData['picture']."','".$timestamp."')";
	mysqli_query($con,$sql);
			//header('http://localhost/dwarikango/Welcome/Admin_Page');
	header('Location: index.php');
	exit();
?>