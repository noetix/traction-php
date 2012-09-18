<?php

namespace Traction\Request;

use Traction\Request\PackableInterface;
use Traction\Request\RequestableInterface;
use Traction\Request\Packer\Packer;

/**
 * Base structure for an API request object.
 *
 * @author Alex Joyce <im@alex-joyce.com>
 */
abstract class BaseAbstract implements PackableInterface, RequestableInterface
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
     * Packer configuration
     */
    const
        CUSTOMATTRIBUTES_PACKER_STRATEGY = Packer::MERGE_KEY_STRATEGY;

    /**
     * Field definition
     */
    public
        $USERID,
        $PASSWORD,
        $ENDPOINTID,
        $ENCODE,
        $TEST,
        $CUSTOMATTRIBUTES = array();

    /**
     * Set user ID
     * 
     * @param string $value
     */
    public function setUserId($value)
    {
        $this->USERID = $value;
    }

    /**
     * Get user ID
     * 
     * @return string
     */
    public function getUserId()
    {
        return $this->USERID;
    }

    /**
     * Set password
     * 
     * @param string $value
     */
    public function setPassword($value)
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
     * Set endpoint ID
     * 
     * @param string $value
     */
    public function setEndpointId($value)
    {
        $this->ENDPOINTID = (int) $value;
    }

    /**
     * Get endpoint ID
     * 
     * @return string
     */
    public function getEndpointId()
    {
        return $this->ENDPOINTID;
    }

    /**
     * Set encode
     * 
     * @param string $value
     */
    public function setEncode($value = null)
    {
        $this->ENCODE = $value;
    }

    /**
     * Get encode
     * 
     * @return string
     */
    public function getEncode()
    {
        return $this->ENCODE;
    }

    /**
     * Set test
     * 
     * @param string $value
     */
    public function setTest($value = null)
    {
        $this->TEST = $value;
    }

    /**
     * Get test
     * 
     * @return string
     */
    public function getTest()
    {
        return $this->TEST;
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