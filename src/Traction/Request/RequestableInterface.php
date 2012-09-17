<?php

namespace Traction\Request;

/**
 * Requstable interface to mark which objects are allowed
 * via the Handler.
 *
 * @author Alex Joyce <im@alex-joyce.com>
 */
interface RequestableInterface
{
    /**
     * Get our end-point path.
     * 
     * @return string
     */
    public function getPath();
}