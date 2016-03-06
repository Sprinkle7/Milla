<?php

	require_once('conf/config.php');
	require_once('conf/connection.php');

	$Query1 = "SELECT * FROM `whathappend` WHERE `what`='0'";
	$Query2 = "SELECT * FROM `whathappend` WHERE `what`='1'";
	$Execute1 = mysqli_query($Connection,$Query1);
	while ($Lost = mysqli_fetch_array($Execute1,MYSQLI_ASSOC)) {
		  $LOSTONE['name']   				= $Lost['title'];
		  $LOSTONE['description_point']     = $Lost['desc'];
		  $LOSTONE['location_longitude']    = $Lost['long'];
		  $LOSTONE['location_latitude']     = $Lost['lat'];
		  $LOSTONE['id']     				= $Lost['id'];
		  $LOSTONE['map_image_url'] 		= 'img/img.png';
		  $LOSTONE['img_point'] 		    = 'img/Cinema.png';
		  $LOSTONE['name_point']    		= 'Lost';
		  $FinalLost[] 						= $LOSTONE;
	}
	$Execute2 = mysqli_query($Connection,$Query2);
	while ($Found = mysqli_fetch_array($Execute2,MYSQLI_ASSOC)) {
		  $FOUNDONE['name']   				= $Found['title'];
		  $FOUNDONE['description_point']    = $Found['desc'];
		  $FOUNDONE['location_longitude']   = $Found['long'];
		  $FOUNDONE['id']     				= $Found['id'];
		  $FOUNDONE['location_latitude']    = $Found['lat'];
		  $FOUNDONE['map_image_url'] 		= 'img/img.png';
		  $FOUNDONE['img_point'] 		    = 'img/Cinema.png';
		  $FOUNDONE['name_point']    		= 'Found';
		  $FinalFound[]					    = $FOUNDONE;
	}
	$JsonReturn = array(
					'Lost' => $FinalLost,
					'Found' => $FinalFound,
					);
	echo json_encode($JsonReturn);

?>