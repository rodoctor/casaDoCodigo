<?php
$hora = date('H');
if ($hora >= 0 and $hora <12 ) {
	$resp = "Bom dia!";
} 
	if ($hora >= 12 and $hora <18) {
		$resp = "Boa tarde!";
	}
	else {
		$resp = "Boa noite";
	}
	echo "$resp";
 ?>