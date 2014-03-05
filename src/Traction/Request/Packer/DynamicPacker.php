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
 * @author Craig Morris <craig.michael.morris@gmail.com>
 */
class DynamicPacker extends Packer
{
	/**
	 * Default strategies.
	 */
	const
		PREFIX_KEY_STRATEGY    = 'Traction\Request\Packer\Strategy\Prefix';

}