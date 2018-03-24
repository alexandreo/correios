<?php

namespace Alexandreo\Correios\ResponseFactory;

use stdClass;

class ConsultaCepResponseFactory
{

    private $response;

    /**
     * ConsultaCepResponseFactory constructor.
     */
    public function __construct()
    {
        $this->response = new stdClass();
    }

    /**
     * @param $soapResponse
     * @return stdClass
     */
    public function make($soapResponse)
    {
        $this->response->id = data_get($soapResponse, 'return.id', 0);
        $this->response->enderenco = data_get($soapResponse, 'return.end', null);
        $this->response->bairro = data_get($soapResponse, 'return.bairro', null);
        $this->response->complemento = data_get($soapResponse, 'return.complemento', null);
        $this->response->complemento2 = data_get($soapResponse, 'return.complemento2', null);
        $this->response->cep = data_get($soapResponse, 'return.cep', null);
        $this->response->uf = data_get($soapResponse, 'return.uf', null);
        $this->response->cidade = data_get($soapResponse, 'return.cidade', null);

        return $this->response;
    }


}