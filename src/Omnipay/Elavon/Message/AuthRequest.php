<?php

namespace Omnipay\Elavon\Message;

/**
 * Elavon Auth Request
 */
class AuthRequest extends \Omnipay\Realex\Message\AuthRequest
{
    protected $endpoint = 'https://api.sandbox.elavonpaymentgateway.com/remote';
}
