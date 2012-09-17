<?php

namespace Traction;

use Buzz\Message\Response as TransportResponse;
use Traction\Exceptions\TransportException;

/**
 * Response wrapper.
 *
 * @author Alex Joyce <im@alex-joyce.com>
 */
class Response
{
	protected $response;

	public function __construct (TransportResponse $response)
	{
		if (!$response->isSuccessful())
			throw new TransportException($response);

		$this->response = $response;
	}

    /**
     * Get transport response object
     *
     * @return TransportResponse
     */
    public function getTransportResponse()
    {
    	return $this->response;
    }

    /**
     * Is response successful?
     *
     * @return Boolean
     */
    public function isSuccessful()
    {
    	return $this->response->getHeader('TRAC-RESULT') <= 0;
    }

    /**
     * Get error message
     *
     * @return string
     */
    public function getError()
    {
    	return $this->response->getHeader('TRAC-ERROR') ?: null;
    }

    /**
     * Get customer ID
     * 
     * @return integer|null
     */
    public function getCustomerId()
    {
    	return $this->response->getHeader('TRAC-CUSTOMERID') ?: null;
    }

    /**
     * Get attribute ID of the attribute which failed customer validation
     * 
     * @return string|null
     */
    public function getAttribute()
    {
    	return $this->response->getHeader('TRAC-ATTR') ?: null;
    }

    /**
     * Get error codes if a warning occurs
     * 
     * @return string|null
     */
    public function getErrorCodes()
    {
    	return $this->response->getHeader('TRAC-ERRORCODES') ?: null;
    }

    /**
     * Get error parameters if a warning occurs
     *
     * @return string|null
     */
    public function getErrorParams()
    {
    	return $this->response->getHeader('TRAC-ERRORPARAMS') ?: null;
    }
}