<?php

namespace Traction\Request;

use Symfony\Component\Config\Definition\Exception\Exception;
use Traction\Request\Packer\DynamicPacker;
use Traction\Request\Type\Customer;

/**
 * Promotion API request structure.
 *
 * @author Alex Joyce <im@alex-joyce.com>
 */
class Competition extends DynamicBaseAbstract
{
    /**
     * Packer configuration
     */
    const
        CUSTOMER_PACKER_STRATEGY  = DynamicPacker::PREFIX_KEY_STRATEGY;

    /**
     * Field definition
     */
    public
        $SUBSCRIBE,
        $CUSTOMER = array();

    /**
     * {@inheritdoc}
     */
    public function getPath()
    {
        throw new Exception('getPath() should not be called for the dynamic API');
    }

	/**
	 * Set subsribe
	 *
	 * @param boolean $subscribe
	 */
	public function setSubscribe($subscribe) {
		$this->SUBSCRIBE = $subscribe;
	}

	/**
	 * Get subscribe
	 *
	 * @return Boolean
	 */
	public function getSubscribe() {
		return $this->SUBSCRIBE;
	}

	/**
	 * Add a custom attribute
	 *
	 * @param string  $key   ID of custom attribute in Traction
	 * @param mixed   $value
	 */
	public function addAttribute($key, $value = null)
	{
		$this->CUSTOMER[$key] = $value;
	}

	/**
	 * Get custom attributes
	 *
	 * @return array
	 */
	public function getAttributes()
	{
		return $this->CUSTOMER;
	}

}