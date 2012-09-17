<?php

namespace Traction\Request;

use Traction\Request\Packer\Packer;
use Traction\Request\Type\Customer;

/**
 * Retrieve Customer API request structure.
 *
 * @author Alex Joyce <im@alex-joyce.com>
 */
class RetrieveCustomer extends BaseAbstract
{
	/**
	 * Packer configuration
	 */
	const
		ATTRID_PACKER_STRATEGY  = Packer::NUMERICAL_KEY_STRATEGY;

	/**
	 * Field definition
	 */
	public
		$MATCHKEY,
		$MATCHVALUE,
		$ATTR = array(),
		$SUBSCRIPTIONS;

    /**
     * {@inheritdoc}
     */
    public function getPath()
    {
    	return '/ext/RetrieveCustomer';
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
	 * Add an attribute
	 * 
	 * @param string $value
	 */
	public function addAttribute($value)
	{
		$this->ATTRID[] = $value;
	}

	/**
	 * Get attributes
	 * 
	 * @return array
	 */
	public function getAttributes()
	{
		return $this->ATTRID;
	}

	/**
	 * Set subscriptions
	 * 
	 * @param string $value
	 */
	public function setSubscriptions($value = null)
	{
		$this->SUBSCRIPTIONS = $value;
	}

	/**
	 * Get subscriptions
	 * 
	 * @return string
	 */
	public function getSubscriptions()
	{
		return $this->SUBSCRIPTIONS;
	}
}