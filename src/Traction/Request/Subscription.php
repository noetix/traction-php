<?php

namespace Traction\Request;

use Traction\Request\Packer\Packer;
use Traction\Request\Type\Customer;

/**
 * Subscription API request structure.
 *
 * @author Alex Joyce <im@alex-joyce.com>
 */
class Subscription extends BaseAbstract
{
	/**
	 * Subscribe options
	 */
	const
		SUBSCRIBE   = 'S',
		UNSUBSCRIBE = 'U';

	/**
	 * Field definition
	 */
	public
		$SUBSCRIPTIONID,
		$SUBORUNSUB,
		$SENDREPLYSMS,
		$MATCHKEY,
		$MATCHVALUE,
		$CUSTOMER;

    /**
     * {@inheritdoc}
     */
    public function getPath()
    {
    	return '/ext/Subscribe';
    }

	/**
	 * Set subscription id
	 * 
	 * @param integer $value
	 */
	public function setSubscriptionId($value)
	{
		$this->SUBSCRIPTIONID = (int) $value;
	}

	/**
	 * Get subscription id
	 * 
	 * @return integer
	 */
	public function getSubscriptionId()
	{
		return $this->SUBSCRIPTIONID;
	}

	/**
	 * Set sub or unsub
	 * 
	 * @param string $value
	 */
	public function setSubOrUnsub($value = null)
	{
		$this->SUBORUNSUB = $value;
	}

	/**
	 * Get sub or unsub
	 * 
	 * @return string
	 */
	public function getSubOrUnsub()
	{
		return $this->SUBORUNSUB;
	}

	/**
	 * Set send reply sms
	 * 
	 * @param string $value
	 */
	public function setSendReplySms($value = null)
	{
		$this->SENDREPLYSMS = $value;
	}

	/**
	 * Get send reply sms
	 * 
	 * @return string
	 */
	public function getSendReplySms()
	{
		return $this->SENDREPLYSMS;
	}

	/**
	 * Set match key
	 * 
	 * @param string $value
	 */
	public function setMatchKey($value)
	{
		$this->MATCHKEY = $value;
	}

	/**
	 * Get match key
	 * 
	 * @return string
	 */
	public function getMatchKey()
	{
		return $this->MATCHKEY;
	}

	/**
	 * Set match value
	 * 
	 * @param string $value
	 */
	public function setMatchValue($value)
	{
		$this->MATCHVALUE = $value;
	}

	/**
	 * Get match value
	 * 
	 * @return string
	 */
	public function getMatchValue()
	{
		return $this->MATCHVALUE;
	}

	/**
	 * Set customer
	 * 
	 * @param Customer $value
	 */
	public function setCustomer(Customer $value = null)
	{
		$this->CUSTOMER = $value;
	}

	/**
	 * Get customer
	 * 
	 * @return Customer
	 */
	public function getCustomer()
	{
		return $this->CUSTOMER;
	}
}