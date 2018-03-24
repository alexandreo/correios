<?php

namespace Alexandreo\Correios\Soap\Factory\AtendeCliente;

use Alexandreo\Correios\Soap\Entity\AtendeCliente\ConsultaCep;

/**
 * Class ConsultaCepFactory
 * @package Alexandreo\Correios\Soap\Factory\AtendeCliente
 */
class ConsultaCepFactory
{


    /**
     * @param string $cep
     * @return ConsultaCep
     */
    public function make(string $cep)
    {
        $consultaCep = new ConsultaCep();
        $consultaCep->cep = $cep;
        return $consultaCep;
    }

}