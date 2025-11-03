<?php

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

    echo "<pre>";
    var_dump($informacoes);
    echo "</pre>";

?>