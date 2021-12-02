<?php
	/*
	foreach($_GET as $key=>$v)
	{
		echo "$key====>>>>$v<br>";
	}
	*/
	$tx=$_POST['tx'];
	$sx=$_POST['sx'];
?>

<html>
	<head>
		<style>
			input[type=submit]{
				border-width: 0px;
				background-color: #CCC;
				cursor:pointer;
			}
			input:hover{
				background-color: #BBB;
				transition: 0.3s;
			}
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
		<form action=1.php method=POST>
			<input type=hidden name=tx value=<?php echo $tx;?>>
			<input type=hidden name=sx value=<?php echo $sx;?>>
			<input type=submit value="Back to main">
		</form>
	</body>
</html>