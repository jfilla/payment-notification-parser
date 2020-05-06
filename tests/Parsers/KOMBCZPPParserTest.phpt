<?php declare(strict_types=1);


namespace PaymentNotificationParserTests\Parsers;


use PaymentNotificationParser\Parsers\KOMBCZPPParser;
use PaymentNotificationParser\Parsers\ParseFailure;
use Tester\Assert;
use Tester\TestCase;

require __DIR__ . '/../bootstrap.php';

class KOMBCZPPParserTest extends TestCase
{

	public function testParse(): void
	{
		$notification = (new KOMBCZPPParser())->parse(file_get_contents(__DIR__ . '/notifications/KOMBCZPP'));
		Assert::equal('10,00', $notification->getPrice());
		Assert::equal('43-34180257/0100', $notification->getRecipientAccountNumber());
		Assert::equal('43-9752450267/0100', $notification->getSenderAccountNumber());
		Assert::equal('123456789', $notification->getPaymentReferenceNumber());
	}

	public function testFailedToParse(): void
	{
		Assert::exception(function () {
			(new KOMBCZPPParser())->parse('');
		}, ParseFailure::class);

	}
}

(new KOMBCZPPParserTest())->run();