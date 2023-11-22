<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="style.css">
	<title>Beba água</title>
</head>
<body>
	<div class="container">
		<img src="src/logo.png">
		<?php if (!isset($_POST['tempo'])) { ?>
			<form method="POST" action="">
				<h3><b>Ativar alerta</b></h3>
				<p>De quantas em quantas horas?</p>
				<input type="number" name="tempo" required><br>
				<button class="btn">Iniciar</button>
			</form>
		<?php } else { ?>
			<h2>Alerta ligado!</h2>
			<h4>Alerta de <?php echo $_POST['tempo']; ?>h em <?php echo $_POST['tempo']; ?>h</h4>
			<a href="" class="btn">Reiniciar</a>
			<script src="index.js"></script>
		<?php } ?>
	</div>
</body>
</html>