<?php

namespace Traction\Request;

/**
 * SMS Gateway API request structure.
 *
 * @author Alex Joyce <im@alex-joyce.com>
 */
class SmsGateway extends BaseAbstract
{
    /**
     * Action options
     */
    const
        ACTION_INCOMING   = 'I',
        ACTION_OUTGOING   = 'O',
        ACTION_RETRIEVING = 'R';

    /**
     * Field definition
     */
    public
        $GATEWAYID,
        $ACTION,
        $MOBILE,
        $MESSAGE,
        $BATCHSIZE;

    /**
     * {@inheritdoc}
     */
    public function getPath()
    {
        return '/ext/SMSGateway';
    }

    /**
     * Set gateway ID
     * 
     * @param integer $value
     */
    public function setGatewayId($value)
    {
        $this->GATEWAYID = (int) $value;
    }

    /**
     * Get gateway ID
     * 
     * @return integer
     */
    public function getGatewayId()
    {
        return $this->GATEWAYID;
    }

    /**
     * Set action
     * 
     * @param string $value
     */
    public function setAction($value)
    {
        $this->ACTION = $value;
    }

    /**
     * Get action
     * 
     * @return string
     */
    public function getAction()
    {
        return $this->ACTION;
    }

    /**
     * Set mobile
     * 
     * @param string $value
     */
    public function setMobile($value)
    {
        $this->MOBILE = $value;
    }

    /**
     * Get mobile
     * 
     * @return string
     */
    public function getMobile()
    {
        return $this->MOBILE;
    }

    /**
     * Set message
     * 
     * @param string $value
     */
    public function setMessage($value)
    {
        $this->MESSAGE = $value;
    }

    /**
     * Get message
     * 
     * @return string
     */
    public function getMessage()
    {
        return $this->MESSAGE;
    }

    /**
     * Set batch size
     * 
     * @param integer $value
     */
    public function setBatchSize($value)
    {
        $this->BATCHSIZE = (int) $value;
    }

    /**
     * Get batch size
     * 
     * @return integer
     */
    public function getBatchSize()
    {
        return $this->BATCHSIZE;
    }
}