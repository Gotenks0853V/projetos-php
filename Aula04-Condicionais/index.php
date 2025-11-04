<?php
/*  Parte 1
    //Estruturas Condicionais
    //$nome = 'Alessandro';

    // Operadores de Comparação

    // == (igual)
    // != (Diferente)

    // > (Maior que)
    // < (Menor que)
    // >= (Maior ou igual a)
    // <= (Menor ou igual a)

    $idade = 17;

    if ($idade > 18) {
        echo 'Você pode acessar o sistema';
    } else {
        echo 'Você não pode acessar o sistema';
    }
    */

/*   Parte 2*/
    // Operadores lógicos

    // &&/and Operador lógico E
    // Verifica se AMBAS as condiçoes são verdadeiras.

    // $idade = 18;
    // $temCarteira = false;

    // if ($idade >= 18 && $temCarteira) {
    //     echo 'Você pode dirigir no Brasil';
    // } else {
    //     echo 'Você Não pode dirigir no Brasil';
    // }
    
    // ||/or Operador lógico OU
    // $idade = 18;
    // $temCarteira = false;

    // if ($idade >= 18 || $temCarteira) {
    //     echo 'Você pode dirigir uma nave espacial';
    // } else {
    //     echo 'Você Não pode dirigir uma nave espacial';
    // }

    // /! Operador lógico de negação

    $temCarteira = 'ppd';

    // null == false
    // 0 == false
    // 1 == true

    // null = Nulo ou Vazio
    // '===' Verificação de tipo

    if ($temCarteira === false) {
        echo 'Você não pode dirigir';
    } elseif ($temCarteira === true) {
        echo 'Você pode dirigir';
    } elseif ($temCarteira === 'ppd') {
        echo 'Você pode dirigir com cuidado';
    } else {
        echo 'Não sei se você pode dirigir';
    }
?>