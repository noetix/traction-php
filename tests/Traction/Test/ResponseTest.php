<?php

namespace Traction\Test;

use Traction\Response;
use Traction\Exceptions\TransportException;
use Buzz\Message\Response as TransportResponse;

class ResponseTest extends \PHPUnit_Framework_TestCase
{
    /**
     * 404 transport response
     */
    public function transportErrorProvider()
    {
        $response = new TransportResponse;
        $response->setHeaders(array(
            "HTTP/1.1 404 OK",
            "Date: Thu, 13 Sep 2012 01:54:17 GMT",
            "Transfer-Encoding: chunked",
            "Content-Type: text/plain; charset=UTF-8"
        ));

        return array(array($response));
    }
    
    /**
     * @dataProvider transportErrorProvider
     * @expectedException Traction\Exceptions\TransportException
     */
    public function testTransportException($transportResponse)
    {
        new Response($transportResponse);
    }

    /**
     * Successful traction request
     */
    public function validResultProvider()
    {
        $response = new TransportResponse;
        $response->setHeaders(array(
            "HTTP/1.1 200 OK",
            "Date: Thu, 13 Sep 2012 01:54:17 GMT",
            "Server: TractionPlatform",
            "TRAC-RESULT: 0",
            "TRAC-CUSTOMERID: 123456",
            "Transfer-Encoding: chunked",
            "Content-Type: text/plain; charset=UTF-8"
        ));

        return array(array($response));
    }

    /**
     * @dataProvider validResultProvider
     */
    public function testValidRequest($transportResponse)
    {
        $response = new Response($transportResponse);

        $this->assertTrue($response->isSuccessful());
    }

    /**
     * Successful traction request with warnings
     */
    public function validResultWithWarningsProvider()
    {
        $response = new TransportResponse;
        $response->setHeaders(array(
            "HTTP/1.1 200 OK",
            "Date: Thu, 13 Sep 2012 01:54:17 GMT",
            "Server: TractionPlatform",
            "TRAC-RESULT: -8",
            "TRAC-ERRORCODES: -8",
            "TRAC-ERRORPARAMS: ",
            "Transfer-Encoding: chunked",
            "Content-Type: text/plain; charset=UTF-8"
        ));

        return array(array($response));
    }

    /**
     * @dataProvider validResultWithWarningsProvider
     */
    public function testValidRequestWithWarnings($transportResponse)
    {
        $response = new Response($transportResponse);

        $this->assertTrue($response->isSuccessful());
        $this->assertNotNull($response->getErrorCodes());
    }

    /**
     * Invalid traction request
     */
    public function invalidResultProvider()
    {
        $response = new TransportResponse;
        $response->setHeaders(array(
            "HTTP/1.1 200 OK",
            "Date: Thu, 13 Sep 2012 01:54:17 GMT",
            "Server: TractionPlatform",
            "TRAC-RESULT: 1",
            "TRAC-ERROR: Incorrect Login credentials",
            "Transfer-Encoding: chunked",
            "Content-Type: text/plain; charset=UTF-8"
        ));

        return array(array($response));
    }

    /**
     * @dataProvider invalidResultProvider
     */
    public function testInvalidRequest($transportResponse)
    {
        $response = new Response($transportResponse);

        $this->assertFalse($response->isSuccessful());
        $this->assertNotNull($response->getError());
    }
}