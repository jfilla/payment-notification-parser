<?php

namespace PaymentNotificationParser;

class TextParser
{

	public function parseByBank($text, $bank)
	{
		if (!Bank::isSupported($bank)) {
			throw new TextParserException("Bank '$bank' not supported.");
		}
		return $this->parseByTemplate($text, $this->loadTemplate($bank));
	}

	public function parseByTemplate($text, $template)
	{
		$notification = new Notification();
		$parameters = $this->matchAll('\[\[([a-zA-z]+)\]\]', $template)[1];
		$template = $this->normalize($template);
		$template = preg_quote($template, '/');
		$extractorRegex = preg_replace(
			'/\\\\\[\\\\\[([a-zA-Z]+)\\\\\]\\\\\]/',
			'(.*)',
			$template
		);
		$notificationReflection = new \ReflectionClass(Notification::class);
		foreach (array_slice($this->matchAll("$extractorRegex", $this->normalize($text)), 1) as $key => $group) {
			$parameterName = $parameters[$key];
			if (!$notificationReflection->hasProperty($parameterName)) {
				throw new TextParserException("Invalid parameter '$parameterName'.");
			}
			$notification->{'set' . ucfirst($parameterName)}($group[0]);
		}
		return $notification;
	}

	private function matchAll($pattern, $subject)
	{
		$matches = [];
		$r = preg_match_all("/$pattern/", $subject, $matches);
		if ($r === FALSE || $r === 0) {
			throw new TextParserException('No matches: invalid template.');
		}
		return $matches;
	}

	private function normalize($string)
	{
		return trim(preg_replace('/\s+/', ' ', str_replace(["\n\r", "\n", "\r"], " ", $string)));
	}

	private function loadTemplate($bank)
	{
		return file_get_contents(__DIR__ . '/templates/' . $bank);
	}
}