<?php
	/*
	foreach($_GET as $key=>$v)
	{
		echo "$key====>>>>$v<br>";
	}
	*/
	$tx=$_GET['tx'];
	$sx=$_GET['sx'];
?>

<html>
	<head>
		<style>
			
		</style>
	</head>
	
	<body>
		<?php
			if ($sx == "m")
			{
				$obr = "Господин";
			}
			else
			{
				$obr = "Госпожа";
			}
			
			echo "Hi, <b>$obr $tx<b>";
		?>
		<a href="1.php?tx=<?php echo $tx;?>&sx=<?php echo $sx;?>">Back to main</a>
	</body>
</html>