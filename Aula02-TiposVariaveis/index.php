<?php

    //Exemplo de string:
    $nome = 'Alessandro Kobs';
    //$numeroCaracteres = strlen($nome);

    // Atalho Ctrl+/ para comentar linhas selecionadas
    // Exibir:
    // echo $nome;

    // Concatenar
    // Echo $nome.$nome;

    // Exibir junto com string:
    //echo "Meu nome é: $nome";

    // Contar o número de caracteres em uma string (strlen)
    //echo strlen($nome);

    // Exercicio 1: Imprimir o texto:
    // "Seu nome é: 'nome', ele tem n caracteres"
    //echo "Seu nome é: $nome, ele tem $numeroCaracteres caracteres";

    // Exemplo de string:
    $texto = 'Pera, uva, maça e salada mista';

    // strlen() - Conta o número de caracteres de uma string:
    $numeroCaracteres = strlen($texto);

    //strpos() - Busca a posição de uma palavra em uma string:
    $posicaoPalavraUva = strpos($texto, "uva",);

    // Exercicio: Buscar posição palavras uva e pera, e escrever:
    // A palavra uva começa na posição X, e pera na posição Y
    $posicaoPalavraPera = strpos($texto, "Pera");

    echo ("A palavra uva começa na posição $posicaoPalavraUva, e pera na posição $posicaoPalavraPera.");


    //Exemplo de integer:
    //Exemplo de float (decimal):
    //Exemplo de boolean:

?>