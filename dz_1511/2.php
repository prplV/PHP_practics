<?php
	$db = mysql_connect('localhost', 'root', '');
	mysql_select_db('list_co', $db);
	mysql_set_charset('utf8');
	
	$query = "SELECT * FROM sotr";
	$query_polz = mysql_query($query);
	
	$mas = mysql_fetch_array($query_polz);
	
	if (isset($_REQUEST['que']))
	{
		$que = $_REQUEST['que'];
		if ($que == 1)
		{
			if (isset($_REQUEST['sort_type']))
			{
				$type = $_REQUEST['sort_type'];
				if ($type == 'nm')
				{
					$query = "SELECT * FROM sotr ORDER BY name";
					$query_polz = mysql_query($query);
					echo "<h1>Отсортированный список</h1> <br> <table border=1> <tr>
						<td>ID</td>
						<td>Имя</td>
						<td>Фамилия</td>
						<td>Отчество</td>
						<td>Должность</td>
						<td>Зарплата</td>
					</tr>";
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
					echo "</table> <br> <a href='main.php'>Вернуться на главную</a>";
				}
				

				else if ($type == 'fm')
				{
					$query = "SELECT * FROM sotr ORDER BY fname";
					$query_polz = mysql_query($query);
					echo "<h1>Отсортированный список</h1> <br> <table border=1> <tr>
						<td>ID</td>
						<td>Имя</td>
						<td>Фамилия</td>
						<td>Отчество</td>
						<td>Должность</td>
						<td>Зарплата</td>
					</tr>";
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
					echo "</table> <br> <a href='main.php'>Вернуться на главную</a>";
				}
				

				else if ($type == 'om')
				{
					$query = "SELECT * FROM sotr ORDER BY oname";
					$query_polz = mysql_query($query);
					echo "<h1>Отсортированный список</h1> <br> <table border=1> <tr>
						<td>ID</td>
						<td>Имя</td>
						<td>Фамилия</td>
						<td>Отчество</td>
						<td>Должность</td>
						<td>Зарплата</td>
					</tr>";
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
					echo "</table> <br> <a href='main.php'>Вернуться на главную</a>";
				}
				else if ($type == 'zp')
				{
					$query = "SELECT * FROM sotr ORDER BY zp";
					$query_polz = mysql_query($query);
					echo "<h1>Отсортированный список</h1> <br> <table border=1> <tr>
						<td>ID</td>
						<td>Имя</td>
						<td>Фамилия</td>
						<td>Отчество</td>
						<td>Должность</td>
						<td>Зарплата</td>
					</tr>";
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
					echo "</table> <br> <a href='main.php'>Вернуться на главную</a>";
				}
				else
				{
					echo "<h1>Ошибка сортировки!</h1><br>Неверный параметр сортировки<br><a href='main.php'>Вернуться на главную</a>";
				}
			}
		}

				
		else if ($que == 2)
		{
			echo "<form action='3.php' method='GET'>
				Имя <input type='text' name='name'> <br>
				Фамилия <input type='text' name='fname'> <br>
				Отчество <input type='text' name='oname'> <br>
				Должность <input type='text' name='dol'> <br>
				Зарплата <input type='text' name='zp'> <br>
				<input type='submit' value='ok'>
			</form>";
		}
		else if ($que == 3)
		{
			$query = "SELECT * FROM sotr";
			$query_polz = mysql_query($query);
			
			echo "
				<h1>Удаление сотрудника предприятия</h1>
				<p>Выберите сотрудника, которого нужно удалить, кликнув по его имени</p>
			<table border='1'>
			
				<tr>
					<td>ID</td>
					<td>Имя</td>
					<td>Фамилия</td>
					<td>Отчество</td>
					<td>Должность</td>
					<td>Зарплата</td>
				</tr>";
				
				while ($mas = mysql_fetch_array($query_polz))
				{
					echo "
					<tr>
						<td><a>{$mas['id']}</a></td>
						<td><a href='http://localhost/dz_1511/4.php?id={$mas['id']}'>{$mas['name']}</a></td>
						<td><a href='http://localhost/dz_1511/4.php?id={$mas['id']}'>{$mas['fname']}</a></td>
						<td><a href='http://localhost/dz_1511/4.php?id={$mas['id']}'>{$mas['oname']}</a></td>
						<td><a>{$mas['dol']}</a></td>
						<td><a>{$mas['zp']}</a></td>
					</tr>";
				}
		}
	
	}
	else 
	{
		echo "<h1>Ошибка</h1><br>Проверьте выбор действия<br><a href='main.php'>Вернуться назад!</a>";
	}
?>