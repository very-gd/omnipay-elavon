<?php

namespace Omnipay\Elavon\Message;

/**
 * Elavon Complete Auth Request
 */
class VerifySigRequest extends \Omnipay\Realex\Message\VerifySigRequest
{
    protected $endpoint = 'https://api.sandbox.elavonpaymentgateway.com/remote';
}
