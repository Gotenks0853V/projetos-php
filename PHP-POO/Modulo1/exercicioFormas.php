<?php
    //define('PI', 3.14);
    abstract class FiguraGeometrica{

        abstract public function calcularArea();

        public function descricao() {
            return 'Essa é uma forma geométrica.';
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
    }

    $quadrado = new Quadrado(5);
    echo $Quadrado->calcularArea();
    echo $quadrado->descricao();

    // $raio = 7;
    // $areaCirculo = PI * ($raio*$raio);
    // echo 'Área circulo: '.$areaCirculo;
?>