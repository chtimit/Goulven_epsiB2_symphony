<?php

	namespace App\DataFixtures;

	use Doctrine\Common\DataFixtures\DependentFixtureInterface;
	use Doctrine\Bundle\FixturesBundle\Fixture;
	use Doctrine\Common\Persistence\ObjectManager;
	use App\Entity\Dresseur;
	use App\Entity\Pokemon;

	class DresseurFixtures extends Fixture implements DependentFixtureInterface
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
	    		foreach ($boku_no_pokemon as $name_poke)
	    		{
	    			$dresseur->addEquipePokemon($this->getReference($name_poke));
	    		}

	    		$manager->persist($dresseur);
	    	}

	    	$manager->flush();
	    }

	    public function getDresseur()
	    {
	    	return [
	    		['administrateur@oui.oui', ['ROLE_ADMIN'], 'administrateur', 'root', []],
	    		['ilovedawn@oui.oui', ['ROLE_USER'], 'sacha', 'sacha', ['Salameche', 'Tortipousse', 'Lancelot']]
	    	];
	    }

	    public function getDependencies()
	    {
	        return array(
	            PokemonFixtures::class,
	        );
	    }
	}

?>