<?php

namespace Traction\Exceptions;

use Buzz\Message\Response;

/**
 * Transport Exception
 *
 * @author Alex Joyce <im@alex-joyce.com>
 */
class TransportException extends \RuntimeException
{
	public function __construct(Response $response)
	{
		$message = 'Request was unable to reach the API, transport error "%s"';

		parent::__construct(sprintf($message, $response->getReasonPhrase()), $response->getStatusCode());
	}
}