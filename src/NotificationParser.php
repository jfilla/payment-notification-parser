<?php declare(strict_types=1);


namespace PaymentNotificationParser;


use PaymentNotificationParser\Parsers\KOMBCZPPParser;

class NotificationParser
{


	public function parse(string $content, string $bank): Notification
	{
		switch ($bank) {
			case Bank::KOMERCNI_BANKA:
				return (new KOMBCZPPParser())->parse($content);
		}
		throw new InvalidState("Bank '$bank' is not supported.");
	}

}