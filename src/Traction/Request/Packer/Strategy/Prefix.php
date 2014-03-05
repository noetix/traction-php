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