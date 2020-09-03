<?php
declare(strict_types=1);
/**
 * @author Kacper Majczak
 * @site http://kacpermajczak.pl/
 * @date 03/09/2020
 */

namespace DesignPatterns\FactoryMethod\Factory;

use DesignPatterns\FactoryMethod\Service\BankWirePayment;

class BankWirePaymentFactory implements PaymentMethodFactory
{
    public function createPayment(): BankWirePayment
    {
        return new BankWirePayment();
    }
}
