<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

use Faker\Factory;
use App\Entity\Membre;

class MemberFixtures extends Fixture
{
    private $faker;

    public function load(ObjectManager $manager)
    {
        $this->faker = Factory::create();

        $this->addFaker($manager);

        $manager->flush();
    }
    
    private function addFaker(ObjectManager $em){
        
        for ($i=1; $i < 30; $i++) {

            $membre = new Membre();
            $membre->setNom($this->faker->name);
            $membre->setPrenom($this->faker->lastName);
            $membre->setEmail($this->faker->email);
            $membre->setPhoto($this->faker->imageUrl(640,480));
        
            $em->persist($membre);
    
        }
    }
}
