
<?php 
	function linha($semana)
	{
		$dia = date('d');
		echo "<tr>";
		for ($i = 0; $i <= 6; $i++) { //Para preencher a semana com o array
			if (isset($semana[$i])) { //Se possui valor na variável entra neste laço
				if ($semana[$i] == $dia) { //Se o dia da semana no array for igual ao dia da semana atual entra neste laço
					echo "<td><n>{$semana[$i]}</n></td>"; 
				} else {
				echo "<td>{$semana[$i]}</td>";
				
			} else {
				echo "<td></td>";
			}
			}
		}
		echo "</tr>";
	}
?>

<?php 
	function calendario	()
	{
		$dia = 1;
		$semana = array();
		
		while ($dia <= 31) {
			array_push($semana, $dia);
			
			if (count($semana) == 7) {
				linha($semana);
				$semana = array();
			}
			
			$dia++;
		}
		linha($semana);
	}
?>



<table border="1">
	<tr>
		<th>Dom</th>
		<th>Seg</th>
		<th>Ter</th>
		<th>Qua</th>
		<th>Qui</th>
		<th>Sex</th>
		<th>Sab</th>
	</tr>

<?php calendario();?>
	
</table>