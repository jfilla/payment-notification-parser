<?php declare(strict_types=1);

namespace PaymentNotificationParserTests;


use PaymentNotificationParser\InvalidState;
use PaymentNotificationParser\NotificationParser;
use Tester\Assert;
use Tester\TestCase;

require __DIR__ . '/bootstrap.php';

class NotificationParserTest extends TestCase
{

	public function testUnknownBank(): void
	{
		Assert::exception(function () {
			(new NotificationParser())->parse('', 'Gringotts');
		}, InvalidState::class);
	}

}

(new NotificationParserTest())->run();