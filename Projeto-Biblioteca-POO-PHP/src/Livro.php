<?php

namespace Gotenks\Biblioteca;

class Livro {
    // Propriedades Privadas
    private bool $disponivel = false;

    // Construtor da Classe
    // Utilizando a promoção de propriedade
    public function __construct(private string $autor, private string $titulo) {}

    // Métodos de Ação (Alteram o estado do objeto)
    function marcarComoEmprestado()
    {
        $this->disponivel = false;
    }

    function marcarComoDisponivel()
    {
        $this->disponivel = true;
    }

    // Método de Negócio
    function estaDisponivel()
    {
        return $this->disponivel;
    }

    // Métodos Getters
    public function getTitulo(): string 
    {
        return $this->titulo;
    }

    public function getAutor(): string
    {
        return $this->autor;
    }
}

?>