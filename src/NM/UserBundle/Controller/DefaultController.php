<?php

namespace NM\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('NMUserBundle:Default:index.html.twig', array('name' => $name));
    }
}
