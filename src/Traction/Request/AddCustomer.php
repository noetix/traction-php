<?php

namespace Traction\Request;

use Traction\Request\Type\Customer;

/**
 * Add Customer API request structure.
 *
 * @author Alex Joyce <im@alex-joyce.com>
 */
class AddCustomer extends BaseAbstract
{
    /**
     * Match key options
     */
    const
        MATCHKEY_EMAIL    = 'E',
        MATCHKEY_MOBILE   = 'M',
        MATCHKEY_EXTERNAL = 'X',
        MATCHKEY_CUSTOMER = 'C';

    /**
     * Field definition
     */
    public
        $MATCHKEY,
        $MATCHVALUE,
        $CUSTOMER;

    /**
     * {@inheritdoc}
     */
    public function getPath()
    {
        return '/ext/AddCustomer';
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