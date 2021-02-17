<?php 

function sorteio( $resultado = ""){
    
    global $numeroSorte;

    $resultado = mt_rand(1, 2)."</br>"."</br>";
   
    if ($numeroSorte != $resultado){
        echo "INFORMATIVO RESULTADO: "."</br>"; 
        echo "Infelizmente não foi dessa vez, continue jogando! Boa Sorte!!"."</br>";
    }else{
        echo "INFORMATIVO RESULTADO: "."</br>"; 
        echo "Você foi o sorteado vencedor, Parabéns  Sr(a)"."</br>";
    }
        echo "Resultado do sorteio:  " .$resultado;
}
