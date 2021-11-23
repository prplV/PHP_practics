<?php
	$name = $_REQUEST['name'];
	$fname = $_REQUEST['fname'];
	$oname = $_REQUEST['oname'];
	$dol = $_REQUEST['dol'];
	$zp = $_REQUEST['zp'];
	
	$db = mysql_connect('localhost', 'root', '');
	mysql_select_db('list_co', $db);
	mysql_set_charset('utf8');
	
	$query_polz = mysql_query("SELECT * FROM sotr WHERE fname='$fname' AND name='$name' AND oname='$oname' AND dol='$dol' AND zp='$zp'");
	
	if (mysql_fetch_array($query_polz)){
		echo "This user exists<br><a href='main.php'>Отредактировать пользователя</a>";
	} 
	else{
		$query = mysql_query("INSERT INTO sotr (name, fname, oname, dol, zp) VALUES ('$name', '$fname', '$oname', '$dol', '$zp')");
		if ($query == true){
			echo "<h1>Добавление сотрудниика</h1><br>Сотрудник успешно добавлен!<br><a href='main.php'>Вернуться на главную</a>";
		}
		else{
			echo "<h1>Добавление сотрудниика</h1><br>Error!<br><a href='main.php'>Вернуться на главную</a>";
		}
	}
?>