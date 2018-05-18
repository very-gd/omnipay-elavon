<?php

namespace Omnipay\Elavon\Message;

/**
 * Elavon Refund Request
 */
class RefundRequest extends \Omnipay\Realex\Message\RefundRequest
{
    protected $endpoint = 'https://api.sandbox.elavonpaymentgateway.com/remote';
}
