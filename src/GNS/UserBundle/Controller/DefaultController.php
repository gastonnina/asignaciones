<?php

namespace GNS\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('GNSUserBundle:Default:index.html.twig');
    }
}
