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

	public function getSenderAccountNumber()
	{
		return $this->senderAccountNumber;
	}

	/**
	 * @param mixed $senderAccountNumber
	 */
	public function setSenderAccountNumber($senderAccountNumber)
	{
		$this->senderAccountNumber = $senderAccountNumber;
		return $this;
	}

	public function getRecipientAccountNumber()
	{
		return $this->recipientAccountNumber;
	}

	/**
	 * @param mixed $recipientAccountNumber
	 */
	public function setRecipientAccountNumber($recipientAccountNumber)
	{
		$this->recipientAccountNumber = $recipientAccountNumber;
		return $this;
	}

	public function getPrice()
	{
		return $this->price;
	}

	/**
	 * @param mixed $price
	 */
	public function setPrice($price)
	{
		$this->price = $price;
		return $this;
	}

	public function getCurrency()
	{
		return $this->currency;
	}

	/**
	 * @param mixed $currency
	 */
	public function setCurrency($currency)
	{
		$this->currency = $currency;
		return $this;
	}

	public function getPaymentReferenceNumber()
	{
		return $this->paymentReferenceNumber;
	}

	/**
	 * @param mixed $paymentReferenceNumber
	 */
	public function setPaymentReferenceNumber($paymentReferenceNumber)
	{
		$this->paymentReferenceNumber = $paymentReferenceNumber;
		return $this;
	}

	public function getDueDate()
	{
		return $this->dueDate;
	}

	/**
	 * @param mixed $dueDate
	 */
	public function setDueDate($dueDate)
	{
		$this->dueDate = $dueDate;
		return $this;
	}

	public function getSpecificSymbol()
	{
		return $this->specificSymbol;
	}

	/**
	 * @param mixed $specificSymbol
	 */
	public function setSpecificSymbol($specificSymbol)
	{
		$this->specificSymbol = $specificSymbol;
		return $this;
	}

	public function getTransactionType()
	{
		return $this->transactionType;
	}

	/**
	 * @param mixed $transactionType
	 */
	public function setTransactionType($transactionType)
	{
		$this->transactionType = $transactionType;
		return $this;
	}

	public function getAvField()
	{
		return $this->avField;
	}

	/**
	 * @param mixed $avField
	 */
	public function setAvField($avField)
	{
		$this->avField = $avField;
		return $this;
	}
}