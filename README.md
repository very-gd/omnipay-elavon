# Omnipay: Elavon Remote

**Elavon driver for the Omnipay payment processing library**

[Omnipay](https://github.com/omnipay/omnipay) is a framework agnostic, multi-gateway payment
processing library for PHP 5.3+. This package implements Elavon (Remote) integration for Omnipay, including optional 3D Secure support.

Elavon is basically a branded version of the Realex payment gateway. Therefore, this driver extends the Omnipay Realex driver, overriding the default Realex URLs.

## Installation

The Elavon driver is installed via [Composer](http://getcomposer.org/). To install, simply add it
to your `composer.json` file:

```json
{
    "require": {
        "vgd/omnipay-elavon": "~1.0"
    }
}
```

And run composer to update your dependencies:

    $ curl -s http://getcomposer.org/installer | php
    $ php composer.phar update

## Basic Usage

The following gateways are provided by this package:

* Elavon_Remote

For general usage instructions, please see the main [Omnipay](https://github.com/omnipay/omnipay)
repository.

## 3D Secure

The Elavon driver has 3D Secure checking turned off by default.
To enable 3D Secure, make sure you have received a 3D Secure account reference from Elavon, then set the `3dSecure` parameter as '1' when you initialise the gateway.

## Refunds

In order to process a refund, you must configure the gateway with the `refundPassword` parameter set to the 'rebate' password that Elavon provide you with. In addition, you will need to pass the following parameters, relating to the original transaction: `amount`, `transactionReference`, `transactionId`, `currency`, `authCode`.
