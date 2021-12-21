<?php
class Tarefa4{	
	function sequenciaCrescente($sequencia){
		$qtd_quebras = 0;
		$qtd_maiores = 0;
		$num_anterior = $sequencia[0];
		$index_num_maior = 0;
		echo "[";
		for($i = 0; $i < sizeof($sequencia); $i ++){
			echo $sequencia[$i];			
			if($i < sizeof($sequencia)-1 )
				echo ", ";
			
			if($i == 0)	continue;
			
			//$num_anterior = $sequencia[$i-1];
			if($sequencia[$i] > $sequencia[$i-1]){	
				$qtd_maiores++;		
				$index_num_maior = $i;
			}else{				
				$qtd_quebras++;
				if($i+1 <= sizeof($sequencia)-1)
					if($sequencia[$i+1] >= $sequencia[$i-1]){
						//$qtd_maiores++;
					}
			}			
		}
		
		if(sizeof($sequencia) >= ($qtd_maiores-1) AND $qtd_quebras <= 1){			
			echo "] true";
		}else{
			echo "] false";
		}
		
		echo "</br>";		
		echo "qtd_maiores = $qtd_maiores --- qtd_quebras = $qtd_quebras</br>";		
	}	
}

	$teste = new Tarefa4();	
	
	//$seq = array(1, 3, 6, 9);//  false
	//$teste->sequenciaCrescente($seq);
	
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

