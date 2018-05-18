<?php

namespace Omnipay\Elavon\Message;

/**
 * Elavon Query Request
 */
class FetchTransactionRequest extends \Omnipay\Realex\Message\FetchTransactionRequest
{
    protected $endpoint = 'https://api.sandbox.elavonpaymentgateway.com/remote';
}
