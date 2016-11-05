<!DOCTYPE html>
<html>
<head>
	<title>Gerador md5 php</title>
</head>
<body>

	<h1>Conversor automatico de md5</h1>
	<form method="post" action="calcula.php">
		<label>Texto</label><br>
		<input type="text" name="campo"><br>
		<input type="submit" value="enviar"><br>	
		<label>Resultado</label><br>
		<textarea><?php echo $_GET['md5'] ?> </textarea>
	</form>
	
</body>
</html>
