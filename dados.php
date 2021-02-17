<?php 
require('validador.php');
$numeroSorte = filter_input(INPUT_POST, 'numeroSorte', FILTER_VALIDATE_INT); 
$nomeCompleto = filter_input(INPUT_POST, 'nomeCompleto', );
$matriculaJogador = filter_input(INPUT_POST, 'matriculaJogador',FILTER_VALIDATE_INT);

  
    if($numeroSorte == '' && $nomeCompleto == '' && $matriculaJogador == '' ){
       echo 'Seja Bem vindo'.'</br>'; 
       echo ' Preencha todos os dados e click em sortear para iniciar o sistema!';
       exit; 
    }else if($numeroSorte && $nomeCompleto && $matriculaJogador){

        echo "DADOS DO PARTICIPANTE: "."</br>";
        echo " Seu número da Sorte é:  ".$numeroSorte."</br>"; 
        echo "Nome do Participante: ".$nomeCompleto."</br>";
        echo "Código do sorteio: ".$matriculaJogador."</br>"."</br>";
    
    }else{
        echo"  Preencha todos os campos corretamente!!"."</br>";
        exit;  
    }







