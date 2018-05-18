<?php

namespace Omnipay\Elavon\Message;

/**
 * Elavon Void Request
 */
class VoidRequest extends \Omnipay\Realex\Message\VoidRequest
{
    protected $endpoint = 'https://api.sandbox.elavonpaymentgateway.com/remote';
}
