<?php
	
	$lista_de_compra = [
		"Leite",
		"Ovos",
		"Arroz",
		"Carne",
		"Feijão",
		2,
		array(
			"Item 1",
			"Item 2",
			"Item 3",
			"Item 4",
			"Item 5",
			"Item 6",
		)
	];	
?>
		
<pre>
<?php var_dump($lista_de_compra); ?>
</pre>

<br /><br />

<p><?php echo $lista_de_compra[6][0]; ?></p>
<p><?php echo $lista_de_compra[6][1]; ?></p>
<p><?php echo $lista_de_compra[6][2]; ?></p>
<p><?php echo $lista_de_compra[6][3]; ?></p>
<p><?php echo $lista_de_compra[6][4]; ?></p>
<p><?php echo $lista_de_compra[6][5]; ?></p>
