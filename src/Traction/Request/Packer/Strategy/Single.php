<?php

namespace Traction\Request\Packer\Strategy;

/**
 * Single value/default strategy.
 *
 * Example Input:
 *   FRUIT = orange
 *
 * Example Output:
 *   FRUIT = orange
 *
 * @author Alex Joyce <im@alex-joyce.com>
 */
class Single implements StrategyInterface
{
    /**
     * {@inheritdoc}
     */
    public static function pack(&$data, $field, $contents)
    {
        $data[$field] = $contents;
    }
}