<?php

	namespace App\DataFixtures;

	use Doctrine\Bundle\FixturesBundle\Fixture;
	use Doctrine\Common\Persistence\ObjectManager;
	use App\Entity\Soint;

	class SointFixtures extends Fixture
	{
	    public function load(ObjectManager $manager)
	    {
	    	foreach ($this->getPokemons() as [$name, $effect])
	    	{
	    		$soint = new Pokemon;
	    		$soint
	    			->setName($name)
	    			->setEffect($effect)
	    		;

	    		$manager->persist($soint);
	    	}

	    	$manager->flush();
	    }

	    public function getPokemons()
	    {
	    	return [
	    		['Potion', 75],
	    		['Super potion', 150]
	    	];
	    }
	}

?>