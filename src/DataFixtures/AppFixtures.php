<?php

namespace App\DataFixtures;

use App\Entity\GlobalVariable;
use App\Repository\GlobalVariablesRepository;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    private GlobalVariablesRepository $globalVariablesRepository;

    public function __construct(GlobalVariablesRepository $globalVariablesRepository)
    {
        $this->globalVariablesRepository = $globalVariablesRepository;
    }

    public function load(ObjectManager $manager): void
    {
        $vars = [
            'ALL_SITE_ROOT' => '/var/www/',
        ];

        foreach ($vars as $name => $value) {
            $manager->persist(GlobalVariable::createSimple($name, $value));
        }

        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
}
