<?php

namespace GNS\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    public function indexAction()
    {
        return new Response("Bienvenido a mi mdulo de usuarios");
        //return $this->render('GNSUserBundle:User:index.html.twig');
    }
    public function articlesAction($page)
    {
        return new Response("Este es mi articulo ".$page);
    }
}
