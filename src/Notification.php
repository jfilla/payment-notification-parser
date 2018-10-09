<?php

namespace PaymentNotificationParser;

class Notification
{

	private $senderAccountNumber;

	private $recipientAccountNumber;

	private $price;

	private $currency;

	private $paymentReferenceNumber;

	private $dueDate;

	private $specificSymbol;

	private $transactionType;

	private $avField;

	private $underlineText;

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

	public function getDueDate()
	{
		return $this->dueDate;
	}

	public function setDueDate($dueDate)
	{
		$this->dueDate = $dueDate;
		return $this;
	}

	public function getSpecificSymbol()
	{
		return $this->specificSymbol;
	}

	public function setSpecificSymbol($specificSymbol)
	{
		$this->specificSymbol = $specificSymbol;
		return $this;
	}

	public function getTransactionType()
	{
		return $this->transactionType;
	}

	public function setTransactionType($transactionType)
	{
		$this->transactionType = $transactionType;
		return $this;
	}

	public function getAvField()
	{
		return $this->avField;
	}

	public function setAvField($avField)
	{
		$this->avField = $avField;
		return $this;
	}

	public function getUnderlineText()
	{
		return $this->underlineText;
	}

	public function setUnderlineText($underlineText)
	{
		$this->underlineText = $underlineText;
		return $this;
	}


}