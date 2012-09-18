<?php

namespace Traction\Request\Packer\Strategy;

/**
 * Packer strategy interface.
 *
 * @author Alex Joyce <im@alex-joyce.com>
 */
interface StrategyInterface
{
    /**
     * Amalgamate raw data into an expected array.
     * 
     * @param array  $data     
     * @param string $field    Name of the field we're packing
     * @param mixed  $contents Our data to pack into our $data array
     */
    public static function pack(&$data, $field, $contents);
}