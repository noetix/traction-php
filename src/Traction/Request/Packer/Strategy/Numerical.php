<?php

namespace Traction\Request\Packer\Strategy;

/**
 * Numerical key strategy.
 *
 * Example Input:
 *   FRUIT = [orange, banana, apple]
 *
 * Example Output:
 *   FRUIT1 = orange
 *   FRUIT2 = banana
 *   FRUIT3 = apple
 *
 * @author Alex Joyce <im@alex-joyce.com>
 */
class Numerical implements StrategyInterface
{
    /**
     * {@inheritdoc}
     */
    public static function pack(&$data, $field, $contents)
    {
        $count = 0;

        foreach ($contents AS $key => $value)
        {
            $count++;
            
            $data[$field . $count] = $value;
        }
    }
}