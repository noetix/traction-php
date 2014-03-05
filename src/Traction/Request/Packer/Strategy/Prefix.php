<?php

namespace Traction\Request\Packer\Strategy;

/**
 * Merge array strategy.
 *
 * Example Input:
 *   FRUIT = ['LIKE' => 'orange', 'LOVE' => 'apple', 'HATE' => 'banana']
 *
 * Example Output:
 *   FRUIT.LIKE = orange
 *   FRUIT.LOVE = apple
 *   FRUIT.HATE = banana
 *
 * Note: Merging is done manually to allow for numerical keys.
 *
 * @author Craig Morris <craig.michael.morris@gmail.com>
 */
class Prefix implements StrategyInterface
{
	/**
	 * {@inheritdoc}
	 */
	public static function pack(&$data, $prefix, $contents)
	{
		foreach ($contents AS $key => $value)
		{
			$data[$prefix . '.' . $key] = $value;
		}
	}
}