<?php
namespace Gotenks\Biblioteca;

abstract class Usuario {
    private string $nome;
    private array $livrosEmprestados = [];
    private string $tipo;

    public function __construct(string $nome, string $tipo = 'aluno')
    {
        $this->nome = $nome;
        $this->tipo = $tipo;
    }

    public function podePegarEmprestado(): bool
    {
        return true;
    }

    public function adicionarLivroEmprestado(Livro $livro): void
    {
        $this->livrosEmprestados[] = $livro;
    }

    public function removerLivroEmprestado(Livro $livro): void
    {
        $this->livrosEmprestados = array_filter(
            $this->livrosEmprestados,
            fn($livroAtual) => $livroAtual !== $livro
        );
    }

    public function listarLivrosEmprestados(): array
    {
        return $this->listarLivrosEmprestados();
    }
}
?>