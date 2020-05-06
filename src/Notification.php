<?php

namespace PaymentNotificationParser;

class Notification
{

	private $senderAccountNumber;

	private $recipientAccountNumber;

	private $price;

	private $currency;

	private $paymentReferenceNumber;

	public function getSenderAccountNumber()
	{
		return $this->senderAccountNumber;
	}

	public function setSenderAccountNumber($senderAccountNumber)
	{
		$this->senderAccountNumber = $senderAccountNumber;
		return $this;
	}

	public function getRecipientAccountNumber()
	{
		return $this->recipientAccountNumber;
	}

	public function setRecipientAccountNumber($recipientAccountNumber)
	{
		$this->recipientAccountNumber = $recipientAccountNumber;
		return $this;
	}

	public function getPrice()
	{
		return $this->price;
	}

	public function setPrice($price)
	{
		$this->price = $price;
		return $this;
	}

	public function getCurrency()
	{
		return $this->currency;
	}

	public function setCurrency($currency)
	{
		$this->currency = $currency;
		return $this;
	}

	public function getPaymentReferenceNumber()
	{
		return $this->paymentReferenceNumber;
	}

	public function setPaymentReferenceNumber($paymentReferenceNumber)
	{
		$this->paymentReferenceNumber = $paymentReferenceNumber;
		return $this;
	}


}