<?php


    $dia = readline("Qual o dia do seu nascimento?  ");
    $mes = readline("Qual o mês do seu nascimento em número?  ");
    $ano = readline("Qual o seu ano de nascimento, com os dois últimos digitos somente?  ");

    safadometro();

    function safadometro($dia, $mes, $ano){
        $safadeza = soamtorio($mes)+($ano/100)*(50-$dia);
        $anjo = 100 * $safadeza;
        print ("Seu nível de safadeza é de $anjo%.");
        
    }
    function somatorio($mes){

        for($i = $mes; $i > 0; $i--){
        $mes = $mes  + $i;
        }
        return[$mes];
    
    }
