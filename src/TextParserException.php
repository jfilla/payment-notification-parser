<?php

namespace PaymentNotificationParser;

class TextParserException extends \Exception
{

	const BANK_NOT_SUPPORTED = 1;
	const INVALID_TEMPLATE = 2;
	const INVALID_PARAMETER = 3;

}