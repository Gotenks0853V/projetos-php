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
    function parametrosNomeados(string $nome, string $sobrenome, int $idade): string {
        return "Olá, $nome $sobrenome. Você tem $idade anos.";
    }

    //echo parametrosNomeados(nome: 'Alessandro', sobrenome: 'Kobs', idade: 34);

    function somar($n1, $n2) {
        return $n1 + $n2;
    }

    echo somar(n2: 30, n1: 10);

?>