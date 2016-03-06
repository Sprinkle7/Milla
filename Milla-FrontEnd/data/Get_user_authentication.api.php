<?php
	session_start();
	require_once('conf/config.php');
	require_once('conf/connection.php');
	// Files Loading Here......
	if (isset($_POST['userlogin']) && $_POST['userlogin']!='') {
		$Username   = strip_tags(trim($_POST['Username']));
	    $Password   = strip_tags(trim($_POST['password']));
	    if (!empty($Username)) {
	    	$Query = "SELECT * FROM `users` WHERE `username`='$Username' AND `password`='$Password' LIMIT 0,1";
		   	$insertInToDb = mysqli_query($Connection,$Query);
		   	$FetchInformation = mysqli_fetch_array($insertInToDb,MYSQLI_ASSOC);
		   	if (mysqli_num_rows($insertInToDb)> 0) {
		   		$_SESSION['Username'] = $FetchInformation['username']; 
		   		$_SESSION['Email']    = $FetchInformation['email']; 
		   		$_SESSION['Picture']  = $FetchInformation['profile_picture']; 
		   		$_SESSION['ID']       = $FetchInformation['user_id']; 
		   		$_SESSION['logged']   = true;
		   		header("location:../index.php");
		  	}
	    }
	    else{
	    		header("location:../index.php?Invalid Response");
	    }
	    // Fetch All Information Here.....
	}
?>