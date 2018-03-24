<?php

namespace Alexandreo\Correios\Soap;

use SoapFault;
use Exception;

/**
 * Class AtendeClienteClient
 * @package Alexandreo\Correios\Soap
 */
class AtendeClienteClient extends Client
{

    /**
     * @var string
     */
    private $endPoint = 'https://apps.correios.com.br/SigepMasterJPA/AtendeClienteService/AtendeCliente?wsdl';

    /**
     * AtendeClienteClient constructor.
     */
    function __construct()
    {
        parent::__construct($this->endPoint);
    }

}