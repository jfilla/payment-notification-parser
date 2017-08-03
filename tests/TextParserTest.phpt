<?php

namespace PaymentNotificationParserTests\Parsers;

use PaymentNotificationParser\Bank;
use PaymentNotificationParser\Notification;
use PaymentNotificationParser\TextParser;
use Tester\Assert;
use Tester\TestCase;

require __DIR__ . '/bootstrap.php';

class TextParserTest extends TestCase
{

	public function testParse()
	{
		$parser = new TextParser();
		$notification = file_get_contents(__DIR__ . '/notifications/' . Bank::KOMERCNI_BANKA);
		$notification = $parser->parse($notification, Bank::KOMERCNI_BANKA);
		Assert::type(Notification::class, $notification);
		Assert::equal('2576524359/0800', $notification->getSenderAccountNumber());
		Assert::equal('107-8629020267/0100', $notification->getRecipientAccountNumber());
		Assert::equal('593,00', $notification->getPrice());
		Assert::equal('CZK', $notification->getCurrency());
		Assert::equal('31.07.2017', $notification->getDueDate());
		Assert::equal('20170039', $notification->getPaymentReferenceNumber());
	}
}

$test = new TextParserTest();
$test->run();