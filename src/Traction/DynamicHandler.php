<?php

namespace Traction;

use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Buzz\Browser;
use Buzz\Client\Curl;
use Traction\Request\RequestableInterface;
use Traction\Request\Packer\DynamicPacker;
use Traction\Exceptions\TransportException;
use Traction\Response;

/**
 * Request & Response Handler.
 *
 * @author Craig Morris <craig.michael.morris@gmail.com>
 */
class DynamicHandler extends Handler
{
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
                'connection',
                'password',
            ))
            ->setAllowedTypes(array(
                'connection'  => 'string',
                'password'    => 'string',
            ));
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

        $url = $this->options['host'] . '/wkf/' . $this->options['connection'];
        $data = DynamicPacker::pack($request);

        return new DynamicResponse($this->browser->submit($url, $data));
    }

    /**
     * Apply configured defaults to request objects
     *
     * @param Requestable $request
     */
    private function applyDefaultOptions(RequestableInterface $request)
    {
        // set custom password
        if (isset($this->options['password']))
            $request->setPassword($this->options['password']);
    }
}