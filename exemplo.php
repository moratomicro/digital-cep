<?php

require_once "vendor/autoload.php";

use \Moratomicro\DigitalCep\Search;

$busca = new Search;

$resultado = $busca->getAddressFromZipcode('37505405');

print_r($resultado);