<?php
	$db = mysql_connect('localhost', 'root' , '');
	mysql_select_db('price_list', $db);
	mysql_set_charset('utf8');
	$query = "SELECT * FROM tovary ";
	$rez = mysql_query($query);
?>

<table border='1' width='400'>
	<tr>
		<td>Number</td>
		<td>Name</td>
		<td>Price</td>
	</tr>


<?php
	while ($mas = mysql_fetch_array($rez)){
		echo "<tr>
				<td>{$mas['id']}</td>
				<td>{$mas['name']}</td>
				<td>{$mas['price']}</td>
			</tr>";
	}
?>

</table>