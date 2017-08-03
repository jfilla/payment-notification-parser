<?php

namespace PaymentNotificationParser;

class TextParser
{

	public function parse($text, $bank)
	{
		$notification = new Notification();
		$matches = [];
		$r = preg_match_all('/\[\[([a-zA-z]+)\]\]/', $this->loadTemplate($bank), $matches);
		if ($r === FALSE || $r === 0) {

		}
		var_dump($r);
		//print_r($matches);
		return $notification;
	}

	private function loadTemplate($bank)
	{
		return file_get_contents(__DIR__ . '/templates/' . $bank);
	}
}