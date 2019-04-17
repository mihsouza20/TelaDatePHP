<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Trabalhando com vetores</title>
</head>
<body>
	<?php
	$dia_da_semana[0] = "Domingo";
	$dia_da_semana[1] = "Segunda-Feira";
	$dia_da_semana[2] = "Terça-Feira";
	$dia_da_semana[3] = "Quarta-Feira";
	$dia_da_semana[4] = "Quinta-Feira";
	$dia_da_semana[5] = "Sexta-Feira";
	$dia_da_semana[6] = "Sabado";	

	print("Hoje é: ");
	print($dia_da_semana [date("w")]);	
	?>	
</body>
</html>	