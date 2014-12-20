<?php
// src/OC/UserBundle/DataFixtures/ORM/LoadSalaries.php

namespace Boutique\CalendrierBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Boutique\CalendrierBundle\Entity\Salaries;

class LoadSalaries implements FixtureInterface
{
  public function load(ObjectManager $manager)
  {
    // Les noms d'utilisateurs à créer
    $listInfos = array(
    	array('prenom' => 'Luciana', 'nom' => 'Hembert', 'email' => 'contact@email.com', 'tel' => '000000', 'poste' => 'secretaria'),
    	array('prenom' => 'Carol', 'nom' => 'Nascimento', 'email' => 'contact@email.com', 'tel' => '000000', 'poste' => 'secretaria'),
    	array('prenom' => 'Marina', 'nom' => 'Traina', 'email' => 'contact@email.com', 'tel' => '000000', 'poste' => 'secretaria'),
		);

    foreach ($listInfos as $infos) {
      // On crée l'utilisateur
      $salaries = new Salaries;

      // Le nom d'utilisateur et le mot de passe sont identiques
      $salaries->setPrenom($infos['prenom']);
      $salaries->setNom($infos['nom']);
      $salaries->setEmail($infos['email']);
      $salaries->setTel($infos['tel']);
      $salaries->setPoste($infos['poste']);

     
      // On le persiste
      $manager->persist($salaries);
    }

    // On déclenche l'enregistrement
    $manager->flush();
  }
}