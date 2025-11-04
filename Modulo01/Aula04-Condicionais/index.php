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

/*   // ! Parte 2
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
    */

    /**
     * TODO Exercicios lógica Condicional
     * Exercício 01
     * Crie um script PHP que simula um sistema de login simples.
     * O siste,a deve verificar se o nome de usuários e a senha fornecidos estão corretos.
     * Se ambos estiverem corretos, exiba uma mensagem de boas-vindas.
     * Se o nome de usuário estiver correto, mas a senha estiver errada, exiba uma mensagem de erro de senha.
     * Se o nome de usuário estiver incorreto, exiba uma mensagem de erro de nome de usuário.
     */

    // $usuarioCorreto = 'admin';
    // $senhaCorreta = '123456';

    // $usuario = 'admin';
    // $senha = '123456';

    // if ($usuario == 'admin' && $senha == '123456') {
    //     echo 'Boas-vindas ADM!';
    // } elseif ($usuario == 'admin' && $senha != '123456') {
    //     echo 'Sua senha está incorreta!';
    // } elseif ($usuario != 'admin' && $senha == '123456') {
    //     echo 'Seu usuário está incorreto!';
    // } else {
    //     echo 'Usuário e senha incorretos!';
    // }

    /**
     * Exercício 02
     * Crie um script PHP que verifica se uma pessoa pode entrar em uma festa.
     * Para entrar na festa, a pessoa precisa ter pelo menos 18 anos ou estar acompanhada por um responsável.
     */

    // $idadeEntrada = 18;

    // $idade = 17;

    // $acompanhaResponsavel = true;

    // if ($idade >= 18 || $acompanhaResponsavel) {
    //     echo 'Pode entrar na festa';
    // } else {
    //     echo 'Não pode entrar na festa';
    // }

    /**
     * Exercicio 03
     * Crie um scrip PHP que determina se um cliente tem direito a um desconto especial em uma loja e qual será o desconto.
     * O cliente tem direito ao desconto de 20% se o valor total de suas compras for maior que R$ 200 ou se ele for um membro VIP
     * Se o valor total das comprar estiver entre R$ 150 e R$ 200, o cliente pode receber um desconto de 10%
     */

    $valor = 50.0;
    $clienteVIP = false;
    $descontoVIP = $valor * 0.20;
    $descontoComum = $valor * 0.10;

    if ($valor > 200.00 || $clienteVIP == true) {
        echo 'Você pode receber desconto de 20% com o valor de R$ '.$valor.' indo para R$ '.($valor-$descontoVIP);
    } elseif ($valor > 150.00 && $valor < 200.00) {
        echo 'Você pode receber desconto de 10% com o valor de R$ '.$valor.' indo para R$ '.($valor*0.90);
    } else {
        echo 'Sem descontos pra você!🫵';
    }
    
?>