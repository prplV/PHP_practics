<?php
	$db = mysql_connect('localhost', 'root', '');
	mysql_select_db('list_co', $db);
	mysql_set_charset('utf8');
	
	$query = "SELECT * FROM sotr";
	$query_polz = mysql_query($query);
	
	
?>

<form action='2.php' method=GET>
		<h1>Сотруднки предприятия</h1>
		<table border='1'>
			
			<tr>
				<td>ID</td>
				<td>Имя</td>
				<td>Фамилия</td>
				<td>Отчество</td>
				<td>Должность</td>
				<td>Зарплата</td>
			</tr>
			
			<?php
				while ($mas = mysql_fetch_array($query_polz))
				{
					echo "
					<tr>
						<td>{$mas['id']}</td>
						<td>{$mas['name']}</td>
						<td>{$mas['fname']}</td>
						<td>{$mas['oname']}</td>
						<td>{$mas['dol']}</td>
						<td>{$mas['zp']}</td>
					</tr>";
				}
			?>
		</table>
	<input type='radio' name='que' value='1'>Сортировка
	<select name="sort_type">
		<option value="nm">по имени</option>
		<option value="fm">по фамилии</option>
		<option value="on">по отчеству</option>
		<option value="zp">по зарплате</option>
	</select>
	<br>
	<input type='radio' name='que' value='2'>Добавление сотрудника<br>
	<input type='radio' name='que' value='3'>Удаление сотрудника<br>
	<input type='submit' value='OK'>	

</form>
