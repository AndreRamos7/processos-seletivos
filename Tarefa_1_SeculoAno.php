<?php
	function SeculoAno($ano){
		$seculo = $ano / 100;		
		echo "Ano $ano = Século ".ceil($seculo);
	}	
	SeculoAno("1201");
	
?>

