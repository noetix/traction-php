<?php

namespace Traction\Request\Type;

use Traction\Request\PackableInterface;
use Traction\Request\Packer\Packer;

/**
 * Customer type used in many request types.
 *
 * @author Alex Joyce <im@alex-joyce.com>
 */
class Customer implements PackableInterface
{
	/**
	 * Packer configuration
	 */
	const
		CUSTOMATTRIBUTES_PACKER_STRATEGY = Packer::MERGE_KEY_STRATEGY;

	/**
	 * Opt-in options
	 */
	const
		OPT_IN        = 'I',
		OPT_OUT       = 'O',
		OPT_BLOCK     = 'B',
		OPT_UNDEFINED = 'U';

	/**
	 * Field definition
	 */
	public
		$FIRSTNAME,
		$LASTNAME,
		$EMAIL,
		$MOBILE,
		$TITLE,
		$EMAILOPT,
		$SMSOPT,
		$EXTUSERID,
		$ACTIVE,
		$PASSWORD,
		$CUSTOMATTRIBUTES = array();

	/**
	 * Set first name
	 * 
	 * @param string $value
	 */
	public function setFirstName($value = null)
	{
		$this->FIRSTNAME = $value;
	}

	/**
	 * Get first name
	 * 
	 * @return string
	 */
	public function getFirstName()
	{
		return $this->FIRSTNAME;
	}

	/**
	 * Set last name
	 * 
	 * @param string $value
	 */
	public function setLastName($value = null)
	{
		$this->LASTNAME = $value;
	}

	/**
	 * Get last name
	 * 
	 * @return string
	 */
	public function getLastName()
	{
		return $this->LASTNAME;
	}

	/**
	 * Set email address
	 * 
	 * @param string $value
	 */
	public function setEmail($value = null)
	{
		$this->EMAIL = $value;
	}

	/**
	 * Get email address
	 * 
	 * @return string
	 */
	public function getEmail()
	{
		return $this->EMAIL;
	}

	/**
	 * Set mobile number
	 * 
	 * @param string $value
	 */
	public function setMobile($value = null)
	{
		$this->MOBILE = $value;
	}

	/**
	 * Get mobile number
	 * 
	 * @return string
	 */
	public function getMobile()
	{
		return $this->MOBILE;
	}

	/**
	 * Set title (MR, MRS, etc)
	 * 
	 * @param string $value
	 */
	public function setTitle($value = null)
	{
		$this->TITLE = $value;
	}

	/**
	 * Get title
	 * 
	 * @return string
	 */
	public function getTitle()
	{
		return $this->TITLE;
	}

	/**
	 * Set email opt
	 * 
	 * @param string $value
	 */
	public function setEmailOpt($value = null)
	{
		$this->EMAILOPT = $value;
	}

	/**
	 * Get email opt
	 * 
	 * @return string
	 */
	public function getEmailOpt()
	{
		return $this->EMAILOPT;
	}

	/**
	 * Set sms opt
	 * 
	 * @param string $value
	 */
	public function setSmsOpt($value = null)
	{
		$this->SMSOPT = $value;
	}

	/**
	 * Get sms opt
	 * 
	 * @return string
	 */
	public function getSmsOpt()
	{
		return $this->SMSOPT;
	}

	/**
	 * Set external user id
	 * 
	 * @param string $value
	 */
	public function setExtUserId($value = null)
	{
		$this->EXTUSERID = $value;
	}

	/**
	 * Get external user id
	 * 
	 * @return string
	 */
	public function getExtUserId()
	{
		return $this->EXTUSERID;
	}

	/**
	 * Set active
	 * 
	 * @param string $value
	 */
	public function setActive($value = null)
	{
		$this->ACTIVE = $value;
	}

	/**
	 * Get active
	 * 
	 * @return string
	 */
	public function getActive()
	{
		return $this->ACTIVE;
	}

	/**
	 * Set password
	 * 
	 * @param string $value
	 */
	public function setPassword($value = null)
	{
		$this->PASSWORD = $value;
	}

	/**
	 * Get password
	 * 
	 * @return string
	 */
	public function getPassword()
	{
		return $this->PASSWORD;
	}

	/**
	 * Add a custom attribute
	 * 
	 * @param integer $key   ID of custom attribute in Traction
	 * @param mixed   $value
	 */
	public function addCustomAttribute($key, $value = null)
	{
		$this->CUSTOMATTRIBUTES[$key] = $value;
	}

	/**
	 * Get custom attributes
	 * 
	 * @return array
	 */
	public function getCustomAttributes()
	{
		return $this->CUSTOMATTRIBUTES;
	}
}