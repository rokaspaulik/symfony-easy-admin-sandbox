<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $user = new User();
        $user->setUsername('rokas');
        $user->setPassword('$2y$13$3SbzRlTgH/uUeJSBfZ84ZO.P19iecikr50IuGDHlM2MyqflX0st6i');
        $user->setRoles(['admin']);

        $manager->persist($user);

        $user = new User();
        $user->setUsername('deima');
        $user->setPassword('$2y$13$3SbzRlTgH/uUeJSBfZ84ZO.P19iecikr50IuGDHlM2MyqflX0st6i');
        $user->setRoles(['admin']);

        $manager->persist($user);

        $user = new User();
        $user->setUsername('tomas');
        $user->setPassword('$2y$13$3SbzRlTgH/uUeJSBfZ84ZO.P19iecikr50IuGDHlM2MyqflX0st6i');
        $user->setRoles(['admin']);

        $manager->persist($user);

        $manager->flush();
    }
}
