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
}