<?php

namespace Traction\Request;

use Traction\Request\Packer\Packer;
use Traction\Request\Type\Customer;

/**
 * Multi-Subscription API request structure.
 *
 * @author Alex Joyce <im@alex-joyce.com>
 */
class MultiSubscription extends BaseAbstract
{
    /**
     * Packer configuration
     */
    const
        SUBSCRIPTIONID_PACKER_STRATEGY  = Packer::NUMERICAL_KEY_STRATEGY;

    /**
     * Field definition
     */
    public
        $SUBSCRIPTIONID = array(),
        $SENDREPLYSMS,
        $MATCHKEY,
        $MATCHVALUE,
        $CUSTOMER;

    /**
     * {@inheritdoc}
     */
    public function getPath()
    {
        return '/ext/MultiSubscribe';
    }

    /**
     * Add a subscription
     * 
     * @param string $value
     */
    public function addSubscription($value)
    {
        $this->SUBSCRIPTIONID[] = $value;
    }

    /**
     * Get subscriptionids
     * 
     * @return array
     */
    public function getSubscriptions()
    {
        return $this->SUBSCRIPTIONID;
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