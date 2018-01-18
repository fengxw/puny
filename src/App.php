<?php
namespace Puny;

use Puny\Http\Request;
use Puny\Http\Response;

class App
{
    protected $request;

    protected $response;

    private $container;

    public function __construct($container = [])
    {
        echo 'it is an app';
        echo "\n";
        $this->container = new Container($container);
    }

    public function init()
    {
        //TODO: initial namespace
        //TODO: load configuration
        //TODO: new request and response
        $this->request = $this->container->get('request');
        $this->response = $this->container->get('response');

        var_dump($this->request);
        print_r($this->request->gettest());
        echo 'initial succeed!';
        echo "\n";
    }

    public function run()
    {
        $this->init();
        echo 'run succeed!';
        echo "\n";

        return $this->response;
    }
}