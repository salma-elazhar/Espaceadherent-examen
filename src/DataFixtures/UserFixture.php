<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\User;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
class UserFixture extends Fixture
{

    private $encoder;
    public function __construct(UserPasswordEncoderInterface $encoder){
        $this->encoder = $encoder;
    }
    public function load(ObjectManager $manager): void
    {
        $user = new User();
        $user->setUsername('user');
        $user->setPassword($this->encoder->encodePassword($user,'user123'));
        $user->addRole("ROLE_USER");
        $manager->persist($user);
        $manager->flush();
        $user2 = new User();
        $user2->setUsername('user2');
        $user2->setPassword($this->encoder->encodePassword($user2,'user123'));
        $user2->addRole("ROLE_ADMIN");
        $manager->persist($user2);
        $manager->flush();
    }
}
