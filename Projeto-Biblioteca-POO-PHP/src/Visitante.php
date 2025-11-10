<?php

namespace Gotenks\Biblioteca;

class Visitante extends Usuario
{
    public function podePegarEmprestado(): bool
    {
        return false;
    }
}
?>