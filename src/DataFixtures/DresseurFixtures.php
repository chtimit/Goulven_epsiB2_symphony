<?php

	namespace App\DataFixtures;

	use Doctrine\Bundle\FixturesBundle\Fixture;
	use Doctrine\Common\Persistence\ObjectManager;
	use App\Entity\Dresseur;

	class DresseurFixtures extends Fixture
	{
	    public function load(ObjectManager $manager)
	    {
	    	foreach ($this->getDresseur() as [$email, $role, $name, $pwd, $boku_no_pokemon])
	    	{
	    		$dresseur = new Dresseur;
	    		$dresseur
	    			->setName($name)
	    			->setEmail($email)
	    			->setRoles($role)
	    			->setPassword($pwd)
	    		;
	    		foreach ($boku_no_pokemon as $pokemon)
	    		{
	    			$dresseur
	    				->addEquipePokemon($this->getReference($pokemon))
	    			;
	    		}

	    		$manager->persist($dresseur);
	    	}

	    	$manager->flush();
	    }

	    public function getPokemons()
	    {
	    	return [
	    		['administrateur@oui.oui', 'ROLE_ADMIN', 'administrateur', 'root', []],
	    		['ilovedawn@oui.oui', 'ROLE_USER', 'sacha', 'sacha', ['Salameche', 'Tortipousse', 'Lancelot']]
	    	];
	    }
	}

?>