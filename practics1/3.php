<?php
	/*
	$mas[0]="Moscow";
	$mas[1]="Paris";
	$mas[2]="Rome";
	
	
	for ($i = 0; $i < 3; $i++)
	{
		echo "Element $i $mas[$i] <br>";
	}
	
	print_r($mas);
	
	foreach($mas as $key=>$j)
	{
		echo "<br> Element___________$key contains $j";
	}
	*/
/*	$mas['Russia']="Moscow";
	$mas['France']="Paris";
	$mas['Germany']="Rome";
	
	asort($mas);
	foreach($mas as $key=>$j)
	{
		echo "<br> Element___________$key contains $j";
	}
	
	arsort($mas);
	foreach($mas as $key=>$j)
	{
		echo "<br> Element___________$key contains $j";
	}
	
	ksort($mas);
	foreach($mas as $key=>$j)
	{
		echo "<br> Element___________$key contains $j";
	}
	
	krsort($mas);
	foreach($mas as $key=>$j)
	{
		echo "<br> Element___________$key contains $j";
	}*/
	
	$mas['first']['Apple']=34;
	$mas['first']['Potato']=12;
	$mas['first']['Tomato']=21;
	$mas['first']['Cabagge']=55;
	$mas['first']['Onion']=30;
	$number = 0;
	
	$mas['second']['Juice']=34;
	$mas['second']['Rice']=12;
	$mas['second']['Banana']=21;
	$mas['second']['Melon']=55;
	$mas['second']['Soup']=30;
	
?>

<html>
	<head>
		<style>
			div{
				text-align: center;
			}
			table{
				margin: auto auto;
			}
			input[type=number]{
				width: 50px;
			}
		</style>
	</head>
	<body>
		<div>
			<h1>Prise list</h1>
			<table border=1px>
				<tr>
					<td>№</td>
					<td>Type</td>
					<td>Prise</td>
					<td>Buy</td>
				</tr>
				
				<form action=4.php method=GET>
				<?php
					foreach($mas as $key=>$i)
					{
						echo "<tr><td colspan = 4>$key</tr>";
						$number = 0;
						foreach($i as $v=>$o)
						{
							printf("<tr>
								<td>%s</td>
								<td>%s</td>
								<td>%s</td>
								<td><input type=number name='%s'></td>
							</tr>\n", ++$number, $v, $o, $v);
						}
					}
				?>
				
			</table>
			<input type=submit value=send>
			</form>
		<div>
	</body>
</html>