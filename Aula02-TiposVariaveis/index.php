<?php
/*  Funções Para Trabalhar Com Strings (Início)
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
    //echo ("A palavra uva começa na posição $posicaoPalavraUva, e pera na posição $posicaoPalavraPera.");

    //substr() - Retorna uma parte de uma string:
    //$parteDaString = substr($texto, 6, 3);
    //echo $parteDaString;

    // Exercicio: Retirar apenas a palavra Pera, usando a função substr():
    //$parteDaString = substr($texto, 0, 4);
    //echo $parteDaString;

    //Utilizando as funções como parâmetro para a busca
    $caracteresPalavraPera = strlen("Pera");
    $posicaoPalavraPera = strpos($texto, "Pera");
    $parteDaString = substr($texto, $posicaoPalavraPera, $caracteresPalavraPera);
    echo $parteDaString;
    Funções Para Trabalhar Com Strings (Fim)
*/

/*  Operações com Inteiros (Início)
    //Exemplo de integer:
    $idade = 33;

    // Soma:
    echo $idade+$idade;
    echo '<br>';

    // Subtração:
    echo $idade-$idade;
    echo '<br>';

    // Divisão:
    echo $idade/$idade;
    echo '<br>';

    // Multiplicação:
    echo $idade*$idade;
    Operações com Inteiros (Fim)
*/

    //Exemplo de float (decimal):
    $altura = 1.75;

    $num1 = 2.0;
    $num2 = 2.50;

    //Operações básicas
    echo 'Multiplicação: '.($num1*$num2);
    echo '<br>';
    echo 'Adição: '.($num1+$num2);
    echo '<br>';
    echo 'Subtração: '.($num1-$num2);
    echo '<br>';
    echo 'Divisão: '.($num1/$num2);

    // Arredondamento

    // round()
    //$num3 = 2.90;

    //Exemplo de boolean:

?>