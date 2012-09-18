<?php

namespace Traction\Request;

/**
 * Promotion Group Report API request structure.
 *
 * @author Alex Joyce <im@alex-joyce.com>
 */
class PromotionGroupReport extends BaseAbstract
{
    /**
     * Field definition
     */
    public
        $GROUPID;

    /**
     * {@inheritdoc}
     */
    public function getPath()
    {
        return '/ext/PromotionGroupReport';
    }

    /**
     * Set group ID
     * 
     * @param integer $value
     */
    public function setGroupId($value)
    {
        $this->GROUPID = (int) $value;
    }

    /**
     * Get group ID
     * 
     * @return integer
     */
    public function getGroupId()
    {
        return $this->GROUPID;
    }
}