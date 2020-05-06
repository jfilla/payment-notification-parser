<?php


namespace PaymentNotificationParser\Parsers;


use PaymentNotificationParser\Notification;

interface Parser
{

	public function parse(string $content): Notification;

}