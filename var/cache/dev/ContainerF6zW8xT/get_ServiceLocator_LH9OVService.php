<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.lH9O__v' shared service.

return $this->privates['.service_locator.lH9O__v'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'pokemonRepository' => ['privates', 'App\\Repository\\PokemonRepository', 'getPokemonRepositoryService.php', true],
]);
