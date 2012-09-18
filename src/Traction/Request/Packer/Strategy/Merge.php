<?php

namespace Traction\Request\Packer\Strategy;

/**
 * Merge array strategy.
 *
 * Example Input:
 *   FRUIT = ['LIKE' => 'orange', 'LOVE' => 'apple', 'HATE' => 'banana']
 *
 * Example Output:
 *   LIKE = orange
 *   LOVE = apple
 *   HATE = banana
 *
 * Note: Merging is done manually to allow for numerical keys.
 *
 * @author Alex Joyce <im@alex-joyce.com>
 */
class Merge implements StrategyInterface
{
    /**
     * {@inheritdoc}
     */
    public static function pack(&$data, $field, $contents)
    {
        foreach ($contents AS $key => $value)
        {
            $data[$key] = $value;
        }
    }
}