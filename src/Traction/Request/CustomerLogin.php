<?php

namespace Traction\Request;

use Traction\Request\Packer\Packer;

/**
 * Customer Login API request structure.
 *
 * @author Alex Joyce <im@alex-joyce.com>
 */
class CustomerLogin extends BaseAbstract
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
		$ACCESSPASSWORD,
		$REQUIREPASSWORD,
		$ISINVISIBLE,
		$ATTRID = array(),
		$SUBSCRIPTIONS;

    /**
     * {@inheritdoc}
     */
    public function getPath()
    {
    	return '/ext/CustomerLogin';
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
	 * Set access password
	 * 
	 * @param string $value
	 */
	public function setAccessPassword($value = null)
	{
		$this->ACCESSPASSWORD = $value;
	}

	/**
	 * Get access password
	 * 
	 * @return string
	 */
	public function getAccessPassword()
	{
		return $this->ACCESSPASSWORD;
	}

	/**
	 * Set require password
	 * 
	 * @param bool $value
	 */
	public function setRequirePassword($value = null)
	{
		$this->REQUIREPASSWORD = (bool) $value;
	}

	/**
	 * Get require password
	 * 
	 * @return bool
	 */
	public function getRequirePassword()
	{
		return $this->REQUIREPASSWORD;
	}

	/**
	 * Set if invisible
	 * 
	 * @param bool $value
	 */
	public function setIsInvisible($value = null)
	{
		$this->ISINVISIBLE = (bool) $value;
	}

	/**
	 * Get if invisible
	 * 
	 * @return bool
	 */
	public function getIsInvisible()
	{
		return $this->ISINVISIBLE;
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