<?php
 
include_once __DIR__ . "/../vendor/autoload.php";

use App\model\Carro;

$c1 = new Carro("Toyata", "Corolla", "2020 <br>");
echo $c1 -> exibirInformacoes();

$c2 = new Carro("Mercedes", "GLA", "2022");
echo $c2 ->exibirInformacoes();
?>