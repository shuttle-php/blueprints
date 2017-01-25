<?php

namespace Shuttle\Contracts\Container;

interface ContainerItem
{
    /**
     * Handle the resolving process of the container item.
     *
     * By injecting the `Container` instance the item can retrieve any
     * dependencies while resolving itself.
     * 
     * @param Container $container
     * @return mixed
     */
    public function resolve(Container $container);
}
