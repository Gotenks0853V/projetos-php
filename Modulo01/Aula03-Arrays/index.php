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

/*
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
    */

/*
    Exercicio 01:
    1. Crie um array chamado Cidades contendo o nome de 5 cidades que você quer visitar.
    2. Imprima na tela o valor da terceira cidade deste array.
*/

    $cidades = ["Ushuaia", "Luang Prabang", "Bergen", "Essaouira", "Rotorua"];
    echo $cidades[2];

/*
    Exercicio 02:
    1. Crie um array associativo chamado $alunos onde as chaves são os nomes de três alunos e os valores são as idades deles.
    2. Imprima a idade do segundo aluno.
*/

    $alunos = [
        "João" => 14,
        "Maria" => 16,
        "josé" => 17
    ];

    echo $alunos["Maria"];

/*
    Exercicio 03:
    1. Crie um array chamado $cores contendo três cores.
    2. Adicione uma nova cor ao final do array.
    3. Remova a primeira cor do array.
    4. Imprima o array resultante.
*/

    $cores = ["Vermelho", "Verde", "Azul"];

    $cores[] = ["Amarelo"];
    array_shift($cores);

    var_dump($cores);
    print_r($cores);

/*
    Exercicio 04:
    Crei um array associativo chamado $precos onde as chaves são nomes de produtos e valores são seus preços.
    Atualize o preço de um dos produtos adicionando + R$ 10,00.
    Atualize o preço do primeiro produto reduzindo - R$ 1,00.
    Imprima o array resultante.    
 */

    $precos = ["Bola" => 10, "Skate" => 250, "Patinete" => 100];
    $precos["Patinete"] += 10;
    $precos["Bola"] -= 1;
    print_r($precos);

?>