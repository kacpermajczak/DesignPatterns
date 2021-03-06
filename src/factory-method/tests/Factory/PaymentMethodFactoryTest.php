<?php declare(strict_types=1);
/**
 * @author Kacper Majczak
 * @site http://kacpermajczak.pl/
 * @date 03/09/2020
 */

namespace DesignPatterns\FactoryMethod\Tests\Factory;

use DesignPatterns\FactoryMethod\Factory\BankWirePaymentFactory;
use DesignPatterns\FactoryMethod\Service\BankWirePayment;
use DesignPatterns\FactoryMethod\Factory\CreditCardPaymentFactory;
use DesignPatterns\FactoryMethod\Service\CreditCardPayment;
use PHPUnit\Framework\TestCase;

class PaymentMethodFactoryTest extends TestCase
{
    public function test_create_credit_card_payment()
    {
        $payment = (new CreditCardPaymentFactory())->createPayment();

        $this->assertInstanceOf(CreditCardPayment::class, $payment);
    }

    public function test_create_bank_wire_payment()
    {
        $payment = (new BankWirePaymentFactory())->createPayment();

        $this->assertInstanceOf(BankWirePayment::class, $payment);
    }
}
