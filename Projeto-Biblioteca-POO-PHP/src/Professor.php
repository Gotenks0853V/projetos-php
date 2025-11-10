<?php

namespace Gotenks\Biblioteca;

class Professor extends Usuario 
{

    private int $maximoLivrosEmprestados = 3;

    public function podePegarEmprestado(): bool
    {
        if (count($this->livrosEmprestados) < $this->maximoLivrosEmprestados) {
            return true;
        }
        return false;
    }
}
?>