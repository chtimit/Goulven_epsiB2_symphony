<?php

	namespace App\DataFixtures;

	use Doctrine\Bundle\FixturesBundle\Fixture;
	use Doctrine\Common\Persistence\ObjectManager;
	use App\Entity\Pokemon;
	use App\Entity\type;

	class PokemonFixtures extends Fixture
	{
	    public function load(ObjectManager $manager)
	    {
	    	foreach ($this->getPokemons() as [$name, $type, $PV, $name_attack])
	    	{
	    		$pokemon = new Pokemon;
	    		$pokemon
	    			->setName($name)
	    			->setPV($PV)
	    			->setType($type)
	    			->addATK($this->getReference($name_attack))
	    			->addATK($this->getReference('Charge'))
	    		;

	    		$manager->persist($pokemon);
	    	}

	    	$manager->flush();
	    }

	    public function getPokemons()
	    {
	    	return [
	    		['Salameche', Type::TYPE_FIRE, 150, 'Flammeche'],
	    		['Tortipousse', Type::TYPE_PLANT, 150, 'Fouet Liane'],
	    		['Lancelot', Type::TYPE_WATER, 150, 'Pistolet a eau']
	    	];
	    }
	}

?>