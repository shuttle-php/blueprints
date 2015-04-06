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
 * A service container is a collection of services which can be resolved at
 * any time. This interface defines the basic methods required to interact
 * with a service container.
 */
interface Container
{
    /**
     * Insert a new container item.
     * 
     * @param string $alias
     * @param ContainerItem $value
     * @return self
     */
    public function register($alias, ContainerItem $value);

    /**
     * Resolve a container item.
     * 
     * @param string $alias
     * @return mixed ContainerItem registered under the provided alias.
     *
     * @throws \Shuttle\Contracts\Container\ContainerItemMissing
     *     If the alias does not match any registered services.
     */
    public function resolve($alias);

    /**
     * Determine whether an item has been registered under the specified key.
     * 
     * @param string $alias
     * @return bool True if the item exists, otherwise false.
     */
    public function exists($alias);
}
