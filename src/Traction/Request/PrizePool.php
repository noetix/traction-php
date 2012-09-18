<?php

namespace Traction\Request;

use Traction\Request\Packer\Packer;
use Traction\Request\Type\Customer;

/**
 * Prize Pool API request structure.
 *
 * @author Alex Joyce <im@alex-joyce.com>
 */
class PrizePool extends BaseAbstract
{
    /**
     * Packer configuration
     */
    const
        SNIPPET_PACKER_STRATEGY  = Packer::NUMERICAL_KEY_STRATEGY;

    /**
     * Field definition
     */
    public
        $PROMOTIONID,
        $MATCHKEY,
        $MATCHVALUE,
        $CUSTOMER,
        $ENTRYCODE,
        $SNIPPET = array();

    /**
     * {@inheritdoc}
     */
    public function getPath()
    {
        return '/ext/Promotion';
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
     * Add snippet
     * 
     * @param string $value
     */
    public function addSnippet($value)
    {
        $this->SNIPPET[] = $value;
    }

    /**
     * Get snippets
     * 
     * @return array
     */
    public function getSnippets()
    {
        return $this->SNIPPET;
    }
}