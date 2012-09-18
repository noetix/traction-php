<?php

namespace Traction\Request\Packer;

use Traction\Request\PackableInterface;
use Traction\Request\Packer\Strategy\Compress;

/**
 * Request packer.
 *
 * Converts a packable object, typically a plain-old PHP object
 * and amalgamates it into an array of parameters for a CURL request.
 *
 * @author Alex Joyce <im@alex-joyce.com>
 */
class Packer
{
    /**
     * Default strategies.
     */
    const
        SINGLE_KEY_STRATEGY    = 'Traction\Request\Packer\Strategy\Single',
        NUMERICAL_KEY_STRATEGY = 'Traction\Request\Packer\Strategy\Numerical',
        MERGE_KEY_STRATEGY     = 'Traction\Request\Packer\Strategy\Merge',
        COMPRESS_KEY_STRATEGY  = 'Traction\Request\Packer\Strategy\Compress';

    /**
     * Convert packable object to an array.
     * 
     * @param  PackableInterface $object
     * @return array
     */
    static public function pack(PackableInterface $object)
    {
        $reflect = new \ReflectionClass(get_class($object));
        $data = array();

        foreach ($object AS $key => $value)
        {
            // we don't want to send null variables
            if ($value === null)
                continue;

            // run the packer over packable objects
            if ($value instanceof PackableInterface)
                $value = self::pack($value);

            // find packing strategy
            $strategy = sprintf('%s_PACKER_STRATEGY', $key);
            $strategy = $reflect->hasConstant($strategy) ? $reflect->getConstant($strategy) : self::SINGLE_KEY_STRATEGY;

            // execute
            $strategy::pack($data, $key, $value);
        }

        // default actions
        foreach ($data AS $key => $value)
        {
            // make sure all objects have been packed
            if ($value instanceof PackableInterface)
                $value = self::pack($value);

            // compress any remaining data structures
            if (is_array($value))
                Compress::pack($data, $key, $value);
        }

        return $data;
    }
}