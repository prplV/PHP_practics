<html>
	<head>
		<style>
			table{
				margin: 0 auto;
			}
		</style>
	</head>
	
	<body>
		<table border=1 width=400>
			<?php
				/*
				for($i = 0; $i < 10; $i++)
				{	
					if($i%2==0)
					{
						$bg='#ccc';
					}
					else{
						$bg='#aaa';
					}
					echo "<tr bgcolor=$bg>
							<td>1</td>
							<td>1</td>
							<td>1</td>
							<td>1</td>
							<td>1</td>
						</tr>";
				}*/
				
				/*
				for ($i = 0; $i < 21; $i++)
				{
					echo "<tr>";
					for ($j=0; $j<21; $j++)
					{	
						$bg="#ccc";
						if ($i == $j)
						{
							$bg = "#ff0000";
						}
						if($i+$j==20)
						{
							$bg = "#00ff00";
						}
						if(($i < $j)and($i+$j < 20))
						{
							$bg = "#0000ff";
						}
						if (($i>$j)and($i+$j<20))
						{
							$bg = "#aaaa00";
						}
						if (($j>$i)and($i+$j>20))
						{
							$bg = "#00aa00";
						}
						if (($j<$i)and($i+$j>20))
						{
							$bg = "#aa00aa";
						}
						echo "<td bgcolor=$bg>$i;$j</td>";
					}
					echo "</tr>";
				}
				*/
//!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!				

			$l = 4;
			?>
			
			<tr>
				<td> colspan=<?php echo $l?>1</td>
			</tr>
			<?php
				for ($i=0; $i<$l-1; $i++)
				{
					echo "<tr>
							<td rowspan=$i>1</td>
							<td colspan=$i>1</td>
						</tr>";
				}
			
			//not working
			?>
			
		</table>
	</body>
</html>