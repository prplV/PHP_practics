<?php
	/*$tx = trim(strip_tags($_REQUEST['tx']));
	echo "Hi, $tx";*/
	
	//math opearations 
	$tx = (int)$_REQUEST['tx'];
	$dx = (int)$_REQUEST['dx'];
	echo $tx+$dx;
?>