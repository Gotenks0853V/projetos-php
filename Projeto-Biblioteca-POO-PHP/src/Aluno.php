<?php

namespace Gotenks\Biblioteca;

class Aluno extends Usuario 
{

    private int $maximoLivrosEmprestados = 1;

    public function podePegarEmprestado(): bool
    {
        if (count($this->livrosEmprestados) < $this->maximoLivrosEmprestados) {
            return true;
        }
        return false;
    }
}
?>