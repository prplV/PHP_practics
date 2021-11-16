<table border='1' width='400'>
	<tr bgcolor='#ccc'>
		<td>Number</td>
		<td>Surname</td>
		<td>Name</td>
		<td>Otchestvo</td>
		<td>Doljnost'</td>
		<td>Zp</td>
	</tr>

<?php
	$db = mysql_connect('localhost', 'root', '');
	mysql_select_db('firma', $db);
	mysql_set_charset('utf8');
	
	//pr-ka prishlo li znachenie
	if (isset($_REQUEST['que'])){
		$que = $_REQUEST['que'];
		if ($que == 1){
			$query = "SELECT * FROM sotr ";
		}
		if ($que == 2) $query = "SELECT * FROM sotr WHERE dol='Менеджер' AND zp>='36000'";
		if ($que == 3) $query = "SELECT * FROM sotr ORDER BY zp DESC LIMIT 2";
		if ($que == 4) $query = "SELECT * FROM sotr WHERE dol='Бухгалтер' OR zp<='40000'";
		
		//ne rabotaet!
		if ($que == 5) {
		
			$min_zp = $_REQUEST['min_zp'];
			$max_zp = $_REQUEST['max_zp'];
			if ($max_zp == ''){
				$query_zp_max = mysql_query("SELECT * FROM sotr ORDER BY zp LIMIT 1");
				$rez_zp = mysql_fetch_array($query_zp_max);
				$max = $rez_zp['zp'];
				$max_zp = $max;
			}
			if ($min_zp == ''){
				$query_zp_min = mysql_query("SELECT * FROM sotr ORDER BY zp DESC LIMIT 1");
				$rez_zp = mysql_fetch_array($query_zp_min);
				$min = $rez_zp['zp'];
				$min_zp = $min;
			}	
			$query = "SELECT * FROM sotr WHERE zp>='$min_zp' AND zp<='$max_zp'";
		}
	}	else{
		$query = "SELECT * FROM sotr ";
	}
	
	
	//$rez = mysql_query("SELECT * FROM sotr WHERE dol='Менеджер'");
	//$rez = mysql_query("SELECT * FROM sotr WHERE dol='Менеджер' AND zp>='36000'");
	
	//$query = "SELECT * FROM sotr ";
	//$query = "SELECT * FROM sotr WHERE dol='Менеджер' AND zp>='36000'";
	//$query = "SELECT * FROM sotr ORDER BY zp DESC LIMIT 2";
	//$query = "SELECT * FROM sotr WHERE dol='Бухгалтер' OR zp<='40000'";
	
	$rez = mysql_query($query);
	$i = 1;
	//!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
	//$mas = mysql_fetch_array($rez);
	//!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
	
	/*
	echo "<pre>";
		echo var_dump($mas);
	echo "</pre>";
	*/
	
	while ($mas = mysql_fetch_array($rez)){
		echo "<tr>
			<td>$i</td>
			<td>{$mas['fame']}</td>
			<td>{$mas['name']}</td>
			<td>{$mas['lname']}</td>
			<td>{$mas['dol']}</td>
			<td>{$mas['zp']}</td>
			</tr>";
			$i++;
	}
	
	echo $mas['fame'];
?>


</table>
<form action='1.php' method='POST'>
	<input type='radio' value='1' name='que'>Show all<br>
	<input type='radio' value='2' name='que'>Show Managers with zp > 36000<br>
	<input type='radio' value='3' name='que'>Show 2 sotr with highest zp<br>
	<input type='radio' value='4' name='que'>Show Buhgalters or who has zp , 40000<br>
	<input type='radio' value='5' name='que'>Show sotr with zp from <input name='min_zp'> to <input name='max_zp'><br>
	<input type='submit' value='Ok'>
</form>