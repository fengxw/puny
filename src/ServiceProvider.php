<?php

namespace Puny;

use Pimple\ServiceProviderInterface;
use Pimple\Container;
use Puny\Http\Request;
use Puny\Http\Response;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $container)
    {

    }

    public function registerDefaultService(Container $container)
    {
        if (!isset($container['request'])) {
            $container['request'] = function ($container) {
                return new Request();
            };
        }

        if (!isset($container['response'])) {
            $container['response'] = function ($container) {
                return new Response();
            };
        }
    }
}