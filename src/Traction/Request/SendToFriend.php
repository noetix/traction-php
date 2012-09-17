<?php

namespace Traction\Request;

use Traction\Request\Packer\Packer;
use Traction\Request\Type\Customer;

/**
 * Send-to-Friend API request structure.
 *
 * @author Alex Joyce <im@alex-joyce.com>
 */
class SendToFriend extends BaseAbstract
{
	/**
	 * Packer configuration
	 */
	const
		RECIPIENT_PACKER_STRATEGY  = Packer::NUMERICAL_KEY_STRATEGY;

	/**
	 * Field definition
	 */
	public
		$BROADCASTID,
		$PROMOTIONID,
		$TYPE,
		$SENDER,
		$RECIPIENT = array(),
		$ENTRYCODE,
		$CHECKOPTIN;

    /**
     * {@inheritdoc}
     */
    public function getPath()
    {
    	return '/ext/S2FS';
    }

	/**
	 * Set broadcast ID
	 * 
	 * @param integer $value
	 */
	public function setBroadcastId($value)
	{
		$this->BROADCASTID = (int) $value;
	}

	/**
	 * Get broadcast ID
	 * 
	 * @return integer
	 */
	public function getBroadcastId()
	{
		return $this->BROADCASTID;
	}

	/**
	 * Set promotion ID
	 * 
	 * @param integer $value
	 */
	public function setPromotionId($value)
	{
		$this->PROMOTIONID = (int) $value;
	}

	/**
	 * Get promotion ID
	 * 
	 * @return integer
	 */
	public function getPromotionId()
	{
		return $this->PROMOTIONID;
	}

	/**
	 * Set type
	 * 
	 * @param string $value
	 */
	public function setType($value = null)
	{
		$this->TYPE = $value;
	}

	/**
	 * Get type
	 * 
	 * @return string
	 */
	public function getType()
	{
		return $this->TYPE;
	}

	/**
	 * Set sender
	 * 
	 * @param Customer $value
	 */
	public function setSender(Customer $value = null)
	{
		$this->SENDER = $value;
	}

	/**
	 * Get sender
	 * 
	 * @return Customer
	 */
	public function getSender()
	{
		return $this->SENDER;
	}

	/**
	 * Add a recipient
	 * 
	 * @param Customer $value
	 */
	public function addRecipient(Customer $value = null)
	{
		$this->RECIPIENT[] = $value;
	}

	/**
	 * Get recipient
	 * 
	 * @return Customer
	 */
	public function getRecipients()
	{
		return $this->RECIPIENT;
	}

	/**
	 * Set entry code
	 * 
	 * @param string $value
	 */
	public function setEntryCode($value = null)
	{
		$this->ENTRYCODE = $value;
	}

	/**
	 * Get entry code
	 * 
	 * @return string
	 */
	public function getEntryCode()
	{
		return $this->ENTRYCODE;
	}

	/**
	 * Set check opt in
	 * 
	 * @param string $value
	 */
	public function setCheckOptIn($value = null)
	{
		$this->CHECKOPTIN = $value;
	}

	/**
	 * Get check opt in
	 * 
	 * @return string
	 */
	public function getCheckOptIn()
	{
		return $this->CHECKOPTIN;
	}
}