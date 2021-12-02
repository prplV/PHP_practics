<?php
	$tx=$_GET['tx'];
	$sx=$_GET['sx'];
?>

<html>
	<head>
		<style>
			
		</style>
	</head>
	
	<body>
		<form action=2.php method=GET>
			Ваше имя <input type=text name=tx placeholder=<?php echo $tx;?>>
			<br>
			Ваш пол ||Male<input type=radio name=sx value=m checked= <?php if($sx=='m') echo "checked"?>> ||Female<input type=radio name=sx value=f <?php if($sx=='f') echo "checked"?>>  
			<br>
			<input type=submit value="Отправить">
		</form>
	</body>
</html>