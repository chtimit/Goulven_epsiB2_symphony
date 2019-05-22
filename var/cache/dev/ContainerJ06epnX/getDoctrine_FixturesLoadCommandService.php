<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'doctrine.fixtures_load_command' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\console\\Command\\Command.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\doctrine-bundle\\Command\\DoctrineCommand.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\doctrine-fixtures-bundle\\Command\\LoadDataFixturesDoctrineCommand.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\data-fixtures\\lib\\Doctrine\\Common\\DataFixtures\\Loader.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\doctrine-bridge\\DataFixtures\\ContainerAwareLoader.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\doctrine-fixtures-bundle\\Loader\\SymfonyFixturesLoader.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\data-fixtures\\lib\\Doctrine\\Common\\DataFixtures\\FixtureInterface.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\data-fixtures\\lib\\Doctrine\\Common\\DataFixtures\\SharedFixtureInterface.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\data-fixtures\\lib\\Doctrine\\Common\\DataFixtures\\AbstractFixture.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\doctrine-fixtures-bundle\\ORMFixtureInterface.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\doctrine-fixtures-bundle\\Fixture.php';
include_once $this->targetDirs[3].'\\src\\DataFixtures\\AppFixtures.php';
include_once $this->targetDirs[3].'\\src\\DataFixtures\\AtkFixtures.php';
include_once $this->targetDirs[3].'\\src\\DataFixtures\\DresseurFixtures.php';
include_once $this->targetDirs[3].'\\src\\DataFixtures\\PokemonFixtures.php';
include_once $this->targetDirs[3].'\\src\\DataFixtures\\SointFixtures.php';

$a = new \Doctrine\Bundle\FixturesBundle\Loader\SymfonyFixturesLoader($this);
$a->addFixtures([0 => ['fixture' => new \App\DataFixtures\AppFixtures(), 'groups' => []], 1 => ['fixture' => new \App\DataFixtures\AtkFixtures(), 'groups' => []], 2 => ['fixture' => new \App\DataFixtures\DresseurFixtures(), 'groups' => []], 3 => ['fixture' => new \App\DataFixtures\PokemonFixtures(), 'groups' => []], 4 => ['fixture' => new \App\DataFixtures\SointFixtures(), 'groups' => []]]);

$this->privates['doctrine.fixtures_load_command'] = $instance = new \Doctrine\Bundle\FixturesBundle\Command\LoadDataFixturesDoctrineCommand($a);

$instance->setName('doctrine:fixtures:load');

return $instance;
