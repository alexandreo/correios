<?php

namespace Alexandreo\Correios\Soap;

use SoapClient;

/**
 * Class Client
 * @package Alexandreo\Correios\Soap
 */
abstract class Client extends SoapClient
{

    /**
     * Client constructor.
     * @param null $wsdl
     * @param array $options
     */
    function __construct($wsdl = null, $options = array())
    {
        $options['user_agent'] = 'Api By Alexandreo';
        $options['cache_wsdl'] = 1;
        $options['trace'] = 1;

        parent::__construct($wsdl, $options);
    }

}
