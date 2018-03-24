<?php

namespace Alexandreo\Correios;

use SoapFault;
use Alexandreo\Correios\CorreioException;
use Alexandreo\Correios\ResponseFactory\ConsultaCepResponseFactory;
use Alexandreo\Correios\Soap\AtendeClienteClient;
use Alexandreo\Correios\Soap\Factory\AtendeCliente\ConsultaCepFactory;

/**
 * @property AtendeClienteClient atendeClienteClient
 */
class CorreioAtendeCliente
{

    /**
     * @var AtendeClienteClient|null
     */
    private $atendeClienteClient = null;

    /**
     * CorreioAtendeCliente constructor.
     */
    public function __construct()
    {
        $this->atendeClienteClient = new AtendeClienteClient();
    }

    /**
     * @param $cep
     * @return \stdClass
     * @throws \Alexandreo\Correios\CorreioException
     */
    public function consultaCep($cep)
    {
        try {
            return (new ConsultaCepResponseFactory())->make($this->atendeClienteClient->consultaCEP(
                (new ConsultaCepFactory())->make($cep)
            ));
        } catch (SoapFault $soapFault) {
            throw new CorreioException($soapFault->getMessage());
        }
    }

}