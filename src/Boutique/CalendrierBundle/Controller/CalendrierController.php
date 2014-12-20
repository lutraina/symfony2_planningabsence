<?php

namespace Boutique\CalendrierBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CalendrierController extends Controller
{
    public function indexAction()
    {
        return $this->render('BoutiqueCalendrierBundle:Calendrier:index.html.twig');
    }
}
