<?php declare(strict_types=1);
/**
 * @author Kacper Majczak
 * @site http://kacpermajczak.pl/
 * @date 03/09/2020
 */

namespace DesignPatterns\FactoryMethod\Tests\Factory;

use PHPUnit\Framework\TestCase;

class PaymentMethodFactoryTest extends TestCase
{
    public function test_create_credit_card_payment()
    {
        $payment = new CreditCardPayment();

        $this->assertInstanceOf(CreditCardPayment::class, $payment);
    }
}
