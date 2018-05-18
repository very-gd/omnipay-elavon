<?php

namespace Omnipay\Elavon;

/**
 * Elavon Remote Gateway
 *
 * Elavon is just a white-labeled copy of the Realex Remote gateway. The only significant
 * difference from a developer's point of view is that the URLs requests are sent to vary.
 * Unfortunately the standard Realex
 */
class RemoteGateway extends \Omnipay\Realex\RemoteGateway
{
    public function getName()
    {
        return 'Elavon Remote';
    }

    public function purchase(array $parameters = array())
    {
        if ($this->get3dSecure()) {
            return $this->createRequest('\Omnipay\Elavon\Message\EnrolmentRequest', $parameters);
        } else {
            return $this->createRequest('\Omnipay\Elavon\Message\AuthRequest', $parameters);
        }
    }

    public function completePurchase(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\Elavon\Message\VerifySigRequest', $parameters);
    }

    public function refund(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\Elavon\Message\RefundRequest', $parameters);
    }

    public function void(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\Elavon\Message\VoidRequest', $parameters);
    }

    public function fetchTransaction(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\Elavon\Message\FetchTransactionRequest', $parameters);
    }
}
