<?php
    abstract class FiguraGeometrica{

        abstract public function calcularArea();
        abstract public function descricao();

        public function exibirArea() {
            return $this->descricao().$this->calcularArea().'<br>';
        }
    }

    class Quadrado extends FiguraGeometrica {
        private $lado;

        public function __construct($lado) {
            $this->lado = $lado;
        }

        public function calcularArea()
        {
            return $this->lado * $this->lado;
        }

        public function descricao()
        {
            return 'Este é um quadrado, com a área de: ';
        }
    }

    class Retangulo extends FiguraGeometrica {
        private $altura, $largura;

        public function __construct($altura, $largura) {
            $this->altura = $altura;
            $this->largura = $largura;
        }

        public function calcularArea()
        {
            return $this->altura * $this->largura;
        }

        public function descricao()
        {
            return 'Este é um retângulo, com a área de: ';
        }
    }

    class Triangulo extends FiguraGeometrica {
        private $base, $altura;

        public function __construct($base, $altura) 
        {
            $this->base = $base;
            $this->altura = $altura;
        }

        public function calcularArea()
        {
            return $this->base * $this->altura/2;
        }

        public function descricao()
        {
            return 'Este é um triângulo, com a área de: ';
        }
    }

    $quadrado = new Quadrado(2);
    echo $quadrado->exibirArea();
    
    $retangulo = new Retangulo(4, 2);
    echo $retangulo->exibirArea();
    
    $triangulo = new Triangulo(4, 10);
    echo $triangulo->exibirArea();

?>