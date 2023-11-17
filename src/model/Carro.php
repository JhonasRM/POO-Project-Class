<?php

namespace App\model;

    class Carro {
        public $marca;
        public $modelo;
        public $ano;

        public function __construct($marca, $modelo, $ano) {
            $this -> marca = $marca;
            $this -> modelo = $modelo;
            $this -> ano = $ano;
        }

        public function exibirInformacoes() {
            return 
            "Carro: {$this -> marca} {$this -> modelo},
            Ano: {$this -> ano}"; 
        }
    }
?>