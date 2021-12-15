<?php
class Tarefa4{	
	function sequenciaCrescente($sequencia){
		$qtd_quebras_de_sequencia = 0;
		$num_anterior = $sequencia[0];
		$index_num_maior = 0;
		
		for($i = 0; $i < sizeof($sequencia); $i ++){
			echo $sequencia[$i];
			if($i != sizeof($sequencia)-1 )
				echo ", ";
			
			$num_anterior = $sequencia[$index_num_maior];
			if($sequencia[$i] > $num_anterior){
				$index_num_maior = $i;
			}else{
				$qtd_quebras_de_sequencia++;
			}	
			
		}
		echo " --- sizeof [". sizeof($sequencia) . "] -- index_maior = $index_num_maior --- ";
		
		echo "  qtd_quebras = $qtd_quebras_de_sequencia --- ";
		if(sizeof($sequencia) - $qtd_quebras_de_sequencia == 0 ){			
			echo " --- TRUE";
		}else{
			echo " --- False";
		}
		
		
		echo "</br>";
		
	}	
}

	$teste = new Tarefa4();	
	

	$seq = array(1, 3, 2, 1);//  false
	$teste->sequenciaCrescente($seq);
	
	$seq = array(1, 3, 2);//  true
	$teste->sequenciaCrescente($seq);
	
	$seq = array(1, 2, 1, 2);//  false
	$teste->sequenciaCrescente($seq);
	
	$seq = array(3, 6, 5, 8, 10, 20, 15);// false
	$teste->sequenciaCrescente($seq);
	
	$seq = array(1, 1, 2, 3, 4, 4);// false
	$teste->sequenciaCrescente($seq);
	
	$seq = array(1, 4, 10, 4, 2);// false
	$teste->sequenciaCrescente($seq);
	
	$seq = array(10, 1, 2, 3, 4, 5);// true
	$teste->sequenciaCrescente($seq);
	
	$seq = array(1, 1, 1, 2, 3);// false
	$teste->sequenciaCrescente($seq);
	
	$seq = array(0, -2, 5, 6);// true
	$teste->sequenciaCrescente($seq);
	
	$seq = array(1, 2, 3, 4, 5, 3, 5, 6);// false
	$teste->sequenciaCrescente($seq);
	
	$seq = array(40, 50, 60, 10, 20, 30);// false
	$teste->sequenciaCrescente($seq);
	
	$seq = array(1, 1);// true
	$teste->sequenciaCrescente($seq);
	
	$seq = array(1, 2, 5, 3, 5);// true
	$teste->sequenciaCrescente($seq);
	
	$seq = array(1, 2, 5, 5, 5);// false
	$teste->sequenciaCrescente($seq);
	
	$seq = array(10, 1, 2, 3, 4, 5, 6, 1);// false
	$teste->sequenciaCrescente($seq);
	
	$seq = array(1, 2, 3, 4, 3, 6);// true
	$teste->sequenciaCrescente($seq);
	
	$seq = array(1, 2, 3, 4, 99, 5, 6);// true
	$teste->sequenciaCrescente($seq);
	
	$seq = array(123, -17, -5, 1, 2, 3, 12, 43, 45);// true
	$teste->sequenciaCrescente($seq);
	
	$seq = array(3, 5, 67, 98, 3);// true
	$teste->sequenciaCrescente($seq);
	
?>

