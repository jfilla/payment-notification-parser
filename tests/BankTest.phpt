<?php

namespace PaymentNotificationParserTests;

use PaymentNotificationParser\Bank;
use Tester\Assert;
use Tester\TestCase;

require __DIR__ . '/bootstrap.php';

class BankTest extends TestCase
{

	public function testGetAll()
	{
		Assert::equal(1, 1);
		Assert::type('array', Bank::getAll());
	}

	public function testIsSupported()
	{
		Assert::equal(FALSE, Bank::isSupported('dr.cockter'));
		Assert::equal(TRUE, Bank::isSupported(Bank::KOMERCNI_BANKA));
	}
}

$test = new BankTest();
$test->run();