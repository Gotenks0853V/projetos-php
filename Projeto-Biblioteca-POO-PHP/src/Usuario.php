<?php
namespace Gotenks\Biblioteca;

    abstract class Usuario {
    protected string $nome;
    protected array $livrosEmprestados = [];

    public function __construct(string $nome)
    {
        $this->nome = $nome;
    }

    abstract public function podePegarEmprestado(): bool;

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
        return $this->livrosEmprestados;
    }
}
?>