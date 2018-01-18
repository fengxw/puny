<?php
namespace Puny;

use Pimple\Container as PimpleContainer;
use Pimple\Exception\UnknownIdentifierException;
use Psr\Container\ContainerInterface;

class Container extends PimpleContainer implements ContainerInterface
{
    protected $defaultService = [
        'Request',
        'Response'
    ];

    public function __construct($values)
    {
        parent::__construct();

        $this->registerDefaultService($this);
    }

    public function registerDefaultService(PimpleContainer $container)
    {
        $serviceProvide = new ServiceProvider();
        $serviceProvide->register($container);
    }

    public function get($id)
    {
        if (!$this->offsetExists($id)) {
            throw new UnknownIdentifierException($id);
        }

        return $this->offsetGet($id);
    }

    public function has($id)
    {
        return $this->offsetExists($id);
    }
}