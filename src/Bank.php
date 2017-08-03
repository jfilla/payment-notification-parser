<?php

namespace PaymentNotificationParser;

abstract class Bank
{

	const KOMERCNI_BANKA = 'KOMBCZPP';

	public static function getAll()
	{
		return [
			self::KOMERCNI_BANKA => 'Komerční banka, a.s.',
		];
	}

	public static function isSupported($bank)
	{
		return in_array($bank, array_keys(self::getAll()));
	}
}