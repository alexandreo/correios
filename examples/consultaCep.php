<?php
require_once '../vendor/autoload.php';

use Alexandreo\Correios\CorreioAtendeCliente;

$correioAtendeCliente = new CorreioAtendeCliente();

try {
    $data = $correioAtendeCliente->consultaCep('02038010');
    var_dump($data);
} catch (\Alexandreo\Correios\CorreioException $e) {//get error
    echo $e->getMessage();
}