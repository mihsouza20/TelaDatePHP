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

	print("<font face='arial' size='2' color='red'><strong>Hoje: <strong></font>");
	print($dia_da_semana [date("w")]);	

	$prato_do_dia[0] = "Lasanga Quatro Queijo";
	$prato_do_dia[1] = "Frango Ao Molho Madeira";
	$prato_do_dia[2] = "Arroz Agrega";
	$prato_do_dia[3] = "Feijoada a moda da casa";
	$prato_do_dia[4] = "Nhoque Paulista";
	$prato_do_dia[5] = "Bacalhau ao Forno";
	$prato_do_dia[6] = "Feijão Branco";

	print("<br><font face='arial' size='2' color='green'><strong>O Prato do dia é: <strong></font>");
	print($prato_do_dia [date("w")]);	

	$preco [0] = "R$12,20";
	$preco [1] = "R$10,00";
	$preco [2] = "R$9,40";
	$preco [3] = "R$11,20";
	$preco [4] = "R$8,50";
	$preco [5] = "R$15,20";
	$preco [6] = "R$10,00";

	print("<br><font face='arial' size='2' color='blue'><strong>Valor do Prato é: <strong></font>");
	print($preco [date("w")]);	
	?>

</body>
</html>		