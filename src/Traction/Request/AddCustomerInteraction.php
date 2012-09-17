<?php

namespace Traction\Request;

use Traction\Request\Packer\Packer;
use Traction\Request\Type\Customer;

/**
 * Add Customer Interactions API request structure.
 *
 * @author Alex Joyce <im@alex-joyce.com>
 */
class AddCustomerInteraction extends BaseAbstract
{
	/**
	 * Packer configuration
	 */
	const
		MATCHVALUE_PACKER_STRATEGY  = Packer::NUMERICAL_KEY_STRATEGY,
		CUSTOMER_PACKER_STRATEGY    = Packer::NUMERICAL_KEY_STRATEGY,
		INTERACTION_PACKER_STRATEGY = Packer::NUMERICAL_KEY_STRATEGY;

	/**
	 * Field definition
	 */
	public
		$MATCHKEY,
		$MATCHVALUE  = array(),
		$CUSTOMER    = array(),
		$INTERACTION = array(),
		$INTERACTIONDATE;

    /**
     * {@inheritdoc}
     */
    public function getPath()
    {
    	return '/ext/AddCustomerInteractions';
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
	 * Add a match value
	 * 
	 * @param string $value
	 */
	public function addMatchValue($value)
	{
		$this->MATCHVALUE[] = $value;
	}

	/**
	 * Get match value
	 * 
	 * @return string
	 */
	public function getMatchValues()
	{
		return $this->MATCHVALUE;
	}

	/**
	 * Add a customer
	 * 
	 * @param Customer $value
	 */
	public function addCustomer(Customer $value = null)
	{
		$this->CUSTOMER[] = $value;
	}

	/**
	 * Get customer
	 * 
	 * @return Customer
	 */
	public function getCustomers()
	{
		return $this->CUSTOMER;
	}

	/**
	 * Add an interaction
	 * 
	 * @param string $value
	 */
	public function addInteraction($value)
	{
		$this->INTERACTION[] = $value;
	}

	/**
	 * Get interactions
	 * 
	 * @return string
	 */
	public function getInteractions()
	{
		return $this->INTERACTION;
	}

	/**
	 * Set interaction date
	 * 
	 * @param string $value
	 */
	public function setInteractionDate($value)
	{
		$this->INTERACTIONDATE = $value;
	}

	/**
	 * Get interaction date
	 * 
	 * @return string
	 */
	public function getInteractionDate()
	{
		return $this->INTERACTIONDATE;
	}
}