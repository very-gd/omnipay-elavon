<?php

namespace Omnipay\Elavon\Message;

/**
 * Elavon 3D Secure enrolment request
 */
class EnrolmentRequest extends \Omnipay\Realex\Message\EnrolmentRequest
{
    protected $endpoint = 'https://api.sandbox.elavonpaymentgateway.com/remote';
}
