<?php

namespace Traction;

use Buzz\Message\Response as TransportResponse;
use Traction\Exceptions\TransportException;

/**
 * Response wrapper.
 *
 * @author Alex Joyce <im@alex-joyce.com>
 */
class DynamicResponse extends Response
{
	private $data;

	public function __construct (TransportResponse $response)
	{
		parent::__construct($response);
		$this->data = json_decode($response->getContent());
	}

	/**
	 * {@inheritdoc}
	 */
	public function isSuccessful()
	{
		return $this->data->success;
	}

	/**
	 * {@inheritdoc}
	 */
	public function getError()
	{
		return !empty($this->data->error) ? $this->data->error->description : null;
	}

	/**
	 * {@inheritdoc}
	 */
	public function getCustomerId()
	{
		return !empty($this->data->data) ? $this->data->data->customer_id : null;
	}

	/**
	 * {@inheritdoc}
	 */
	public function getAttribute()
	{
		return !empty($this->data->error) ? $this->data->error->cause : null;
	}

	/**
	 * {@inheritdoc}
	 */
	public function getErrorCodes()
	{
		return !empty($this->data->error) ? $this->data->error->code : null;
	}

	/**
	 * {@inheritdoc}
	 */
	public function getErrorParams()
	{
		return !empty($this->data->error) ? $this->data->error->cause : null;
	}
}