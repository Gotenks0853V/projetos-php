<?php

    // Calculo do Salário Anual

    /**
     * Calcula o saaalário Anual baaseado no salario mensal
     * 
     * @param float $salario_mensal Salario Mensal
     * 
     * @return string Salário Anual Formatado em BRL
     */
    function calcularSalarioAnual (float $salario_mensal): string{

        // Décimo terceiro (13°) mais um terço (1/3) de férias
        $terco_de_ferias = $salario_mensal / 3;
        $salario_anual = ($salario_mensal * 13) + $terco_de_ferias;
        return numeroEmValorMoneratioBRL($salario_anual);
    }

    /**
     * Calcula a quantidade de anos que falta para alguem se aposentar
     * 
     * @param int $idade Idade da pessoa
     * @param string $sexo Sexo da pessoa
     * 
     * @return int Quantidade de anos que falta para se aposentar
     */
    function anosFaltamParaAposentar (int $idade, string $sexo) {
        $anos_totais_para_aposentar = $sexo == 'M' ? IDADE_APOSENTADORIA_MASCULINA : IDADE_APOSENTADORIA_FEMININA;
        return $anos_totais_para_aposentar - $idade;
    }

    /**
     * Racebe um valor numerico e retorna um valor monetário
     * 
     * @param float $valor_reais Valor numérico
     * 
     * @return string Valor monetário
     */
    function numeroEmValorMoneratioBRL (float $valor_reais): string {
    
        return number_format($valor_reais, 2, ',', '.');
    }
?>