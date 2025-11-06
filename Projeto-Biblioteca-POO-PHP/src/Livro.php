<?php

namespace Gotenks\Biblioteca;

class Livro {
    // Propriedades Privadas
    private string $titulo, $autor;
    private bool $disponivel = false;

    // Construtor da Classe
    public function __construct(string $autor, string $titulo)
    {
        $this->titulo = $titulo;
        $this->autor = $autor;
    }

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