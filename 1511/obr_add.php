<?php
	$db = mysql_connect('localhost', 'root', '');
	mysql_select_db('firma', $db);
	mysql_set_charset('utf8');
	
	$name = $_REQUEST['name-polz'];
	$sname = $_REQUEST['sname-polz'];
	$lname = $_REQUEST['lname-polz'];
	$dol = $_REQUEST['dol-polz'];
	$zp = $_REQUEST['zp-polz'];
	
	
	$query_polz = mysql_query("SELECT * FROM sotr WHERE fame='$sname' AND name='$name' AND lname='$lname' AND dol='$dol' AND zp='$zp'")
	if (mysql_fetch_array($query_polz)){
		echo "this user exists";
	} else{
		$query = mysql_query("INSERT INTO `sotr` (`name`, `fame`, `lname`, `dol`, `zp`) VALUES ('Петр', 'Сидоренко', 'Геннадьевич', 'Кассир', '30000'");
		if ($query == true){
			echo "Ok!";
		}
		else{
			echo "Error!";
		}
	}
	
	
	
?>