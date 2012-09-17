<?php

namespace Traction;

use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Buzz\Browser;
use Buzz\Client\Curl;
use Traction\Request\RequestableInterface;
use Traction\Request\Packer\Packer;
use Traction\Exceptions\TransportException;
use Traction\Response;

/**
 * Request & Response Handler.
 *
 * @author Alex Joyce <im@alex-joyce.com>
 */
class Handler
{
    /**
     * Options
     * 
     * @var array
     */
    protected $options = array();

    /**
     * Transport instance.
     * 
     * @var Browser
     */
    protected $browser;

    /**
     * Constructor
     * 
     * @param array $options
     */
    public function __construct(array $options = array())
    {
        $resolver = new OptionsResolver();
        $this->setDefaultOptions($resolver);
        $this->options = $resolver->resolve($options);

        $this->init();
    }

    /**
     * Set our default options.
     * 
     * @param OptionsResolverInterface $resolver
     */
    protected function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver
            ->setDefaults(array(
                'host' => 'https://int.api.tractionplatform.com'
            ))
            ->setOptional(array(
                'user_id',
                'password',
                'endpoint_id',
                'test'
            ))
            ->setAllowedTypes(array(
                'host'        => 'string',
                'user_id'     => 'string',
                'password'    => 'string',
                'endpoint_id' => 'numeric',
                'test'        => 'bool'
            ));
    }

    /**
     * Initialise
     */
    protected function init()
    {
        $client = new Curl;
        $client->setVerifyPeer(false);
        $client->setOption(CURLOPT_SSLVERSION, 3);

        $this->browser = new Browser($client);
    }

    /**
     * Submit a request to the API.
     * 
     * @param Requestable $request
     * @return object
     */
    public function submit(RequestableInterface $request)
    {
        $this->applyDefaultOptions($request);

        $url = $this->options['host'] . $request->getPath();
        $data = Packer::pack($request);

        return new Response($this->browser->submit($url, $data));
    }

    /**
     * Apply configured defaults to request objects
     *
     * @param Requestable $request
     */
    private function applyDefaultOptions(RequestableInterface $request)
    {
        // set custom user id
        if (isset($this->options['user_id']))
            $request->setUserId($this->options['user_id']);

        // set custom password
        if (isset($this->options['password']))
            $request->setPassword($this->options['password']);

        // set custom endpoint id
        if (isset($this->options['endpoint_id']))
            $request->setEndpointId($this->options['endpoint_id']);

        // set custom test
        if (isset($this->options['test']))
            $request->setTest($this->options['test']);
    }
}