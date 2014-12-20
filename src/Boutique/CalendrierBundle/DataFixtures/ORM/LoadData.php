<?php
// src/OC/UserBundle/DataFixtures/ORM/LoadData.php

namespace Boutique\CalendrierBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Boutique\CalendrierBundle\Entity\Evenements;

class LoadData implements FixtureInterface
{
  public function load(ObjectManager $manager)
  {
    // Les noms d'utilisateurs à créer
    $listNames = array('Congé', 'Maternité', 'Maladie');

    foreach ($listNames as $name) {
      // On crée l'utilisateur
      $even = new Evenements;

      // Le nom d'utilisateur et le mot de passe sont identiques
      $even->setLibelle($name);
      $even->setTypeEvenement('salarie');

     
      // On le persiste
      $manager->persist($even);
    }

    // On déclenche l'enregistrement
    $manager->flush();
  }
}