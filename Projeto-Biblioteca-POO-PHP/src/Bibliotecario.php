<?php

namespace Gotenks\Biblioteca;

use Exception;

class Bibliotecario 
{

    public static function emprestarLivro(Usuario $usuario, Livro $livro, Estante $estante): bool
    {
        // O livro tem que estar na estante
        // O livro tem que estar disponível
        // O usuário tem que poder pegar emprestado
        echo '<hr>';

        if (!$livro->estaDisponivel()) {
            throw new Exception('O livro não está disponível.');
            return false;
        }

        if (!$usuario->podePegarEmprestado()) {
            throw new Exception('O usuário não pode pegar livros emprestados.');
            return false;
        }

        if (!$estante->verificarLivro($livro)) {
            throw new Exception('O não está na estante.');
            return false;
        }

        $livro->marcarComoEmprestado();
        $usuario->adicionarLivroEmprestado($livro);
        $estante->removerLivro($livro);
        return true;
    }

    public static function devolverLivro(Usuario $usuario, Livro $livro, Estante $estante): bool
    {
        // O livro tem que estar com o usuário
        // O livro tem que ser colocado na estante
        // O livro tem que passar a estar disponível
        echo '<hr>';

        if ($livro->estaDisponivel()) {
            throw new Exception('O livro já está disponível.');
            return false;
        }

        if ($estante->verificarLivro($livro)) {
            throw new Exception('O livro já está na estante.');
            return false;
        }

        if (!in_array($livro, $usuario->listarLivrosEmprestados())) {
            throw new Exception('O livro não está com o usuário.');
            return false;
        }

        
        $usuario->removerLivroEmprestado($livro);
        $estante->adicionarLivro($livro);
        $livro->marcarComoDisponivel();
        return true;
    }
}

?>