<?php

	namespace App\DataFixtures;

	use Doctrine\Bundle\FixturesBundle\Fixture;
	use Doctrine\Common\Persistence\ObjectManager;
	use App\Entity\ATK;
	use App\Entity\type;

	class AtkFixtures extends Fixture
	{
	    public function load(ObjectManager $manager)
	    {
	    	foreach ($this->getAttacks() as [$name, $power, $type])
	    	{
	    		$attack = new ATK;
	    		$attack
	    			->setName($name)
	    			->setPwr($power)
	    			->setType($type)
	    		;

	    		$manager->persist($attack);
	    		$reference = $this->addReference($name, $attack);
	    	}

	    	$manager->flush();
	        
	    }

	    public function getAttacks()
	    {
	    	return [
	    		['Flammeche', 50, Type::TYPE_FIRE],
	    		['Fouet Liane', 50, Type::TYPE_PLANT],
	    		['Pistolet a eau', 50, Type::TYPE_WATER],
	    		['Charge', 40, TYPE::TYPE_NORMAL]
	    	];
	    }
	}

?>