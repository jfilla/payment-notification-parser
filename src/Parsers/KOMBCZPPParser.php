<?php declare(strict_types=1);


namespace PaymentNotificationParser\Parsers;


use PaymentNotificationParser\Notification;

class KOMBCZPPParser implements Parser
{

	public function parse(string $content): Notification
	{
		$content = strip_tags($content);
		$content = str_replace(["\n", "\t", " "], '', $content);
		[$price, $currency] = $this->match('/Amountandcurrency:(\d+,\d+)(\D{3})/', $content, 2);
		$notification = new Notification();
		$notification->setPrice($price);
		$notification->setCurrency($currency);
		[$recipientAccountNumber] = $this->match('/Youraccountnumber:([\d|\-|\/]+)/', $content, 1);
		$notification->setRecipientAccountNumber($recipientAccountNumber);
		[$senderAccountNumber] = $this->match('/Counteraccountnumber:([\d|\-|\/]+)/', $content, 1);
		$notification->setSenderAccountNumber($senderAccountNumber);
		[$paymentReferenceNumber] = $this->match('/Variablesymbol:(\d+)/', $content, 1);
		$notification->setPaymentReferenceNumber($paymentReferenceNumber);
		return $notification;
	}


	private function match(string $pattern, string $content, int $expectedCount): array
	{
		$matches = [];
		preg_match($pattern, $content, $matches);
		if (count($matches) === $expectedCount + 1) {
			array_shift($matches);
			return $matches;
		}
		throw new ParseFailure(sprintf('Failed to parse pattern %s', $pattern));
	}


}