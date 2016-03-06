<?php

	require_once('conf/config.php');
	require_once('conf/connection.php');
	// Files Loading Here......
	$postdata    = file_get_contents("php://input");
    $request     = json_decode($postdata);
    @$username   = strip_tags(trim($request->username));
    @$email      = strip_tags(trim($request->email));
    @$number     = strip_tags(trim($request->number));
    @$password   = strip_tags(trim($request->password));
    if (!empty($username)) {
    	$Query = "INSERT INTO `users` (`username`,`email`,`password`,`contactno`)
			  VALUES ('$username','$email','$password','$number')";
	   	$insertInToDb = mysqli_query($Connection,$Query);
	   	if ($insertInToDb) {
	   		echo 'Done';
	   	}
	   	else
	   	{
	   		echo 'Failed To Upload';
	   	}
    }
   	

?>