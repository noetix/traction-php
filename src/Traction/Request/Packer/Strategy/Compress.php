<?php

namespace Traction\Request\Packer\Strategy;

/**
 * Compress strategy.
 *
 * Used to convert a customer object into a custom encoded string.
 *
 * Example Input:
 *   FRUIT = ['LIKE' => 'orange', 'LOVE' => 'apple', 'HATE' => 'banana']
 *
 * Example Output:
 *   FRUIT = LIKE|orange\x31LOVE|apple\x31HATE|banana
 *
 * @author Alex Joyce <im@alex-joyce.com>
 */
class Compress implements StrategyInterface
{
    /**
     * {@inheritdoc}
     */
    public static function pack(&$data, $field, $contents)
    {
        $segments = array();

        foreach ($contents AS $key => $value)
        {
            $segments[] = sprintf('%s|%s', $key, $value);
        }

        $data[$field] = implode(chr(31), $segments);
    }
}