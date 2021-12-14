<?php
	function SeculoAno($ano){
		$seculo = $ano / 100;		
		echo "Ano $ano = Século ".ceil($seculo)."</br>";
	}	
	SeculoAno("1905");
	SeculoAno("1700");
	
?>

