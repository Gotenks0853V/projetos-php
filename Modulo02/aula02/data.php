<?php
    
    $nome = 'João Silva';
    $idade = 25;
    $sexo = 'M';
    $salario_mensal = 2210.30;
    $esta_empregado = true;
    $habilidades = ['PHP', 'JavaScript', 'HTML', 'CSS'];

    // Diferença Operador Ternário
    // if()... else...
    // () ? ... : ...

    $situacaoEmprego = $esta_empregado ? 'Empregado' : 'Desempregado';

    // Ternário:
    // variavel = condição ? valor_se_atender_condicao : valor_se_nao_atender_condicao

    $anos_totais_para_aposentar = $sexo == 'M' ? IDADE_APOSENTADORIA_MASCULINA : IDADE_APOSENTADORIA_FEMININA;

?>