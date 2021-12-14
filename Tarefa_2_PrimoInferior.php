<?php
	
	function isPrimo($num){
		$divisores = 0;
		for($count=2; $count < $num; $count++)
		   if($num % $count == 0)
				$divisores++;
		if(!$divisores){ 
			return true;
		}			
	}
	
	function PrimoInferior($numero1, $numero2){
		$qtdNumPrimos = 0;
		$listaPrimos = array();		
		
		for($contador=($numero1+1); $contador < $numero2; $contador++){			
			if(isPrimo($contador)){
				$qtdNumPrimos++;
				array_push($listaPrimos, $contador);
			};		
		}
		echo "Resposta: Encontrados $qtdNumPrimos números primos, são eles: ";
		
		for($cont = 0; $cont < sizeof($listaPrimos); $cont ++){
			echo $listaPrimos[$cont];
			if($cont != sizeof($listaPrimos)-1 )
				echo ", ";			
		}
		echo "</br>";
	}
	
	PrimoInferior(10, 29);
	PrimoInferior(150, 290);
	PrimoInferior(250, 829);

	
?>

