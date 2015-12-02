<?php

namespace Laratalks\PaymentGateways\Providers\Soap;

use Laratalks\PaymentGateways\Providers\ProviderInterface;

interface SoapProviderInterface extends ProviderInterface
{
    /**
     * Get wsdl endpoint
     *
     * @return string
     */
    public function getWsdl();

    /**
     * Get request method name
     *
     * @return string
     */
    public function getRequestMethodName();

    /**
     * Get verify method name
     *
     * @return string
     */
    public function getVerifyMethodName();
}