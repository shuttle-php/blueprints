<?php

namespace Shuttle\Contracts\Container;

use Closure;

interface Container
{
    /**
     * Register a new container item.
     * 
     * @param string $alias
     * @param ContainerItem|Closure $value
     */
    public function register(string $alias, $value);

    /**
     * Resolve a container item.
     * 
     * @param string $alias
     * @return mixed ContainerItem registered under the provided alias.
     * @throws \Shuttle\Contracts\Container\ContainerItemMissing
     *     If the alias does not match any registered services.
     */
    public function resolve(string $alias);

    /**
     * Determine whether an item has been registered under the provided alias.
     * 
     * @param string $alias
     * @return bool
     */
    public function exists(string $alias) : bool;
}
