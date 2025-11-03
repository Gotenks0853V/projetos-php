<?php
/*  Aula introdução
    $nomes = array("Alessandro", "João");
    //echo $nomes[1];
    $numeros = ["1", "2", "30"];
    //echo $numeros[2];

    $carros = [
        "Alessandro" => 1,
        "Maria" => 2,
        "Joao" => 30
    ];
    //echo $carros["Alessandro"];
    // echo "<pre>";
    // var_dump($carros);
    // echo "</pre>";

    $informacoes = [
        "Alessandro" => [
            "carros" => 1,
            "idade" => 32,
            "altura" => 174,
            "cidade" => "Rio de Janeiro"
        ],
        "Joao" => [
            "carros" => 2,
            "idade" => 35,
            "altira" => 160,
            "cidade" => "São Paulo"
        ]
    ];
    // Operação de debug usavada para imprimir o array na tela.
    echo "<pre>";
    var_dump($informacoes);
    echo "</pre>";
    */

    $frutas = ["Laranja", "Limão"];
    $outras_frutas = ["Abacaxi", "Uva"];

    // echo "<pre>";
    // var_dump($frutas);
    // echo "</pre>";

    //array_push($frutas, "Uva");
    //Remove último item de um array
    //array_pop($frutas);

    //Remove primeiro item de um array
    //array_shift($frutas);

    // Adicionar um novo indice
    $frutas[2] = "Morango";

    // Modificar um indice existente
    //$frutas[0] = "Uva";

    //$quantidadeDeItems = count($frutas);
    //echo $quantidadeDeItems;

    $temAbacaxi = in_array("Abacaxi", $frutas);
    echo $temAbacaxi;

    $todasFrutas = array_merge($frutas, $outras_frutas);

    echo "<pre>";
    var_dump($todasFrutas);
    echo "</pre>";

?>