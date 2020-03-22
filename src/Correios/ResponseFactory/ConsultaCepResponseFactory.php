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
        $this->response->id = $soapResponse->return->id ?? 0;
        $this->response->enderenco = $soapResponse->return->end ?? null;
        $this->response->bairro = $soapResponse->return->bairro ?? null;
        $this->response->complemento = $soapResponse->return->complemento ?? null;
        $this->response->complemento2 = $soapResponse->return->complemento2 ?? null;
        $this->response->cep =  $soapResponse->return->cep ?? null;
        $this->response->uf = $soapResponse->return->uf ?? null;
        $this->response->cidade = $soapResponse->return->cidade ?? null;

        return $this->response;
    }


}