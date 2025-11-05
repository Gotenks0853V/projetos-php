<?php 
    // function saudacao() {
    //     return 'Olá mundo';
    // }
    
    // echo saudacao();

    // function somar (float $num1, float $num2, float $num3 = null): float {
    //     return $num1 + $num2 + $num3;
    // }

    // //echo somar(1, 2, 3);

    // function verificaIdade(int $anoNascimento): int {
    //     $anoAtual = date('Y');
    //     $idade = $anoAtual - $anoNascimento;
    //     return $idade;
    // }
    // //echo verificaIdade(2000);


    // function portaoDeBalada(int $anoNascimento, bool $acompanhado = false): string {
    //     $idadeParaEntrarNaBalada = 18;
    //     $idade = verificaIdade($anoNascimento);

    //     if ($idade >= $idadeParaEntrarNaBalada) {
    //         return ' Pode entrar na balada';
    //     } elseif ($idade < $idadeParaEntrarNaBalada && $acompanhado) {
    //         return ' Poder entrar na balada com seu acompanhante';
    //     } else {
    //         return ' Você não pode entrar na balada';
    //     }
    // }

    // echo '1994 sem acompanhante: '.portaoDeBalada(1994).'<br/>';
    // echo '1999 com acompanhante: '.portaoDeBalada(1999, true).'<br/>';
    // echo '2014 com acompanhante: '.portaoDeBalada(2014, true).'<br/>';
    // echo '2015 sem acompanhante: '.portaoDeBalada(2015).'<br/>';
    // echo '2011 sem acompanhante: '.portaoDeBalada(2011).'<br/>';


    // Utilizando parametros nomeados.
    // Documentando código com PHPDoc '@param e @return'

    /**
     * Gera uma string de saudação
     * 
     * @param string $nome Nome da pessoa
     * @param string $sobrenome Sobrenome da pessoa
     * @param string $idade Idade da pessoa
     * 
     * @return string Saudação
     */
    function parametrosNomeados(string $nome, string $sobrenome, int $idade): string {
        return "Olá, $nome $sobrenome. Você tem $idade anos.";
    }

    //echo parametrosNomeados(nome: 'Alessandro', sobrenome: 'Kobs', idade: 34);

    /**
     * Soma dois números
     * 
     * @param float $n1 Primeiro números a ser somado
     * @param float $n2 Segundo números a ser somado
     * 
     * @return float Soma dois números
     */
    function somar(float $n1, float $n2): float {
        return $n1 + $n2;
    }

    echo somar(n2: 30, n1: 10);

?>