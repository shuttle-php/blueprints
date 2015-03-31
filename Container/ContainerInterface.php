<?php

/**
 * S H U T T L E - a minimalist PHP framework
 *
 * @package Shuttle\Contracts
 * @author  Christopher L Bray <chris@brayniverse.com>
 * @license MIT
 */
 
namespace Shuttle\Contracts\Container;

/**
 * This interface defines a single method for resolving it's own content.
 */
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
