<?php
    session_start();
    if ($_SESSION['loged']!=true) {
	require_once('conf/config.php');
	require_once('conf/connection.php');
	// Files Loading Here......
	$postdata    = file_get_contents("php://input");
    $request     = json_decode($postdata);
    @$Title      = strip_tags(trim($request->title));
    @$Desc       = strip_tags(trim($request->desc));
    @$Found      = strip_tags(trim($request->found));
    @$Address    = htmlspecialchars(addslashes(strip_tags(trim($request->address))));
    @$Logitude   = strip_tags(trim($request->Long));
    @$Latitude   = strip_tags(trim($request->lat));
    $userid      = $_SESSION['ID'];
    if (!empty($Title)) {
    	echo $Query = "INSERT INTO `maps`.`whathappend` 
    	 (`id`, `title`, `desc`, `long`, `lat`, `address`, `what`,`userid`)
    	 VALUES (NULL, '$Title', '$Desc', '$Logitude', '$Latitude', '$Address', '$Found',$userid)";
	   	$insertInToDb = mysqli_query($Connection,$Query);
	   	if ($insertInToDb) {
	   		echo 'Done';
	   	}
	   	else
	   	{
	   		echo 'Failed To Upload';
	   	}
    }
    }
   	

?>