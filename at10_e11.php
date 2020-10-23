<?php
//criação de um array que tem outro array dentro
	$carros=array(
		'Punto'=>array(
			'cor'=>'azul',
			'potência'=>'1.0',
			'opcionais'=>'Ar Cond.'
			),
		'Corsa'=>array(
			'cor'=>'cinza',
			'potência'=>'1.3',
			'opcionais'=>'MP3'
			),
		'Golf'=>array(
			'cor'=>'branco',
			'potência'=>'1.0',
			'opcionais'=>'Metalica'
			),
	);
//escreve o opcionais do punto que é Ar Cond.
	echo $carros['Punto']['opcionais'];
//Ciclo foreach para escrever todos os dados 
	foreach ($carros as $modelo => $carro) {
		echo '<h1>' .$modelo. '</h1>';
		foreach ($carro as $chave => $detalhe) {
			echo "<b>".$chave. '</b>= '.$detalhe. '<br>';
		}
	}
?>