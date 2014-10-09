<?php

namespace Traction;

use Buzz\Message\Response as TransportResponse;
use Traction\Exceptions\TransportException;

/**
 * Response wrapper.
 *
 * @author Craig Morris <craig.michael.morris@gmail.com>
 */
class DynamicResponse extends Response
{
    private $data;

    public function __construct(TransportResponse $response)
    {
        parent::__construct($response);
        $this->data = json_decode($response->getContent());
    }
    
    /**
     * get raw data array
     * @return Array
     */
    public function getData() {
        return $this->data;
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
        return !empty($this->data->error) ? $this->data->error->description : NULL;
    }

    /**
     * {@inheritdoc}
     */
    public function getCustomerId()
    {
        return !empty($this->data->data) && !empty($this->data->data->customer_id) ? $this->data->data->customer_id : NULL;
    }

    /**
     * {@inheritdoc}
     */
    public function getAttribute()
    {
        return !empty($this->data->error) ? $this->data->error->cause : NULL;
    }

    /**
     * {@inheritdoc}
     */
    public function getErrorCodes()
    {
        return !empty($this->data->error) ? $this->data->error->code : NULL;
    }

    /**
     * {@inheritdoc}
     */
    public function getErrorParams()
    {
        return !empty($this->data->error) ? $this->data->error->cause : NULL;
    }
}
