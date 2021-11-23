<?php
	$id = $_REQUEST['id'];
	
	$db = mysql_connect('localhost', 'root', '');
	mysql_select_db('list_co', $db);
	mysql_set_charset('utf8');

	$query_polz = mysql_query("SELECT * FROM sotr WHERE id='$id'");
		if (mysql_fetch_array($query_polz)){
			$rez = mysql_query("DELETE FROM sotr WHERE id ='$id'");
			if ($rez == true) {
				echo "<h1>Удаление пользователя</h1>Сотрудник успешно удалён!<br><a href='main.php'>Вернуться на главную</a>";
			} 
			else {
				echo "<h1>Удаление пользователя</h1>Произошла ошибка!<br><a href='main.php'>Вернуться на главную</a><br><a href='2.php?que=3'> К выбору удаляемого сотрудника</a>";
			}
		} 
		else {
			echo "<h1>Удаление пользователя</h1>Произошла критическая ошибка!<br><a href='main.php'>Вернуться на главную</a><br><a href='2.php?que=3'> К выбору удаляемого сотрудника</a>";
		}


?>