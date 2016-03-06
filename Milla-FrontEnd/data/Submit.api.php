<?php
	session_start();
	require_once('conf/config.php');
	require_once('conf/connection.php');
	// Files Loading Here......
	if (isset($_POST['ids']) && $_POST['ids']!='') {
		echo $Item       = strip_tags(trim($_POST['ID']));
	    echo $userid     = strip_tags(trim($_POST['idNumber']));
	    if (!empty($Item)) {
	    	$Query = "INSERT INTO `claims` (`user_id`,`wh_id`) VALUES ('$userid','$Item')";
		   	$insertInToDb = mysqli_query($Connection,$Query);
		  	if ($insertInToDb) {
		  		header("location:../index.php?Success");
		  	}
		  	else
		  	{
	    		header("location:../index.php?Invalid Response");
	    	}
	    }
	    else
	    {
	    	header("location:../index.php?Invalid Response");
	    }
	    
	    // Fetch All Information Here.....
	}
?>