<?php
class Tarefa3{	
	function preemcherArray(){
		$lista_nums = array();
		
		for($cont = 0; $cont < 20; $cont++){	
			$num_sorteado = rand(1,10);		
			array_push($lista_nums, $num_sorteado);
		}		
		
		echo "Array sorteado = [";
		for($conta = 0; $conta < sizeof($lista_nums); $conta ++){
			echo $lista_nums[$conta];
			if($cont != sizeof($lista_nums)-1 )
				echo ", ";			
		}
		echo "]";
		echo "</br>";
		
		$lista_qtd = array_count_values($lista_nums);
		//print_r($lista_qtd);
		echo "Os números que não se repetem são o ";
				
		$conta = 0;
		foreach ($lista_qtd as $key => $value){	
					
			if($value == 1){				
				echo $key;
				if($conta != sizeof($lista_qtd) -1 )				
					echo ", ";
			}
			$conta++;
			
		}		
	}	
}

	$teste = new Tarefa3();	
	$teste->preemcherArray();
	

	
?>

