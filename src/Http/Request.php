<?php
namespace Puny\Http;

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\UriInterface;

class Request extends Message implements ServerRequestInterface
{
    public function __construct()
    {
        echo 'it is a request';
        echo "\n";
    }

    public function gettest()
    {
        return 'it is a request from container!';
    }

    public function getServerParams()
    {

    }

    public function getCookieParams()
    {

    }

    public function withCookieParams(array $cookies)
    {

    }

    public function getQueryParams()
    {

    }

    public function withQueryParams(array $query)
    {

    }

    public function getUploadedFiles()
    {

    }

    public function withUploadedFiles(array $uploadedFiles)
    {

    }

    public function getParsedBody()
    {

    }

    public function withParsedBody($data)
    {

    }

    public function getAttributes()
    {

    }

    public function getAttribute($name, $default = null)
    {

    }

    public function withAttribute($name, $value)
    {

    }

    public function withoutAttribute($name)
    {

    }

    public function getRequestTarget()
    {

    }

    public function withRequestTarget($requestTarget)
    {

    }

    public function getMethod()
    {

    }

    public function withMethod($method)
    {

    }

    public function getUri()
    {

    }

    public function withUri(UriInterface $uri, $preserveHost = false)
    {

    }
}