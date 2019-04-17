<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Função date</title>
</head>
<boby>
	<?php

	if (date("w") == 0) {
		$dia_semana = "Domingo";
	}
		if (date("w") == 1) {
		$dia_semana = "Segunda-Feira";
	}
		if (date("w") == 2) {
		$dia_semana = "Terça-Feira";
	}
		if (date("w") == 3) {
		$dia_semana = "Quarta-Feira";
	}
		if (date("w") == 4) {
		$dia_semana = "Quinta-Feira";
	}
		if (date("w") == 5) {
		$dia_semana = "Sexta-Feira";
	}	
		if (date("w") == 6) {
		$dia_semana = "Sabado";
	}	

	print("<font face='arial' size='2' color='red'><strong> Hoje é: $dia_semana<strong></font>");

	?>

</body>
</html>