<?php
// src/OC/UserBundle/BoutiqueUserBundle.php

namespace Boutique\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class BoutiqueUserBundle extends Bundle
{
  public function getParent()
  {
    return 'FOSUserBundle';
  }
}