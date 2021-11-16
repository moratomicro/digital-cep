<?php

use PHPUnit\Framework\TestCase;
use Moratomicro\DigitalCep\Search;

class SearchTest extends TestCase{

    /**
     * @dataProvider dadosTeste
     */
    public function testGetAddressFromZipcodeDefaultUsage(string $input, array $esperado){
        $resultado = new Search;
        $resultado = $resultado->getAddressFromZipcode($input);
                
        $this->assertEquals($esperado, $resultado);
    }

    public function dadosTeste(){
        return [
            "Endereço Rua Nossa Senhora do Rosário" => [
                "37505405",
                [
                    "cep" => "37505-405",
                    "logradouro" => "Rua Nossa Senhora do Rosário",
                    "complemento" => "",
                    "bairro" => "Novo Horizonte",
                    "localidade" => "Itajubá",
                    "uf" => "MG",
                    "ibge" => "3132404",
                    "gia" => "",
                    "ddd" => "35",
                    "siafi" => "4647"
                ]
            ],
            "Endereço Qualquer" => [
                "03624010",
                [
                    "cep" => "03624-010",
                    "logradouro" => "Rua Luís Asson",
                    "complemento" => "",
                    "bairro" => "Vila Buenos Aires",
                    "localidade" => "São Paulo",
                    "uf" => "SP",
                    "ibge" => "3550308",
                    "gia" => "1004",
                    "ddd" => "11",
                    "siafi" => "4647"
                ]
            ]            
        ];
    }
}