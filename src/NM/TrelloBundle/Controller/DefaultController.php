<?php

namespace NM\TrelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('NMTrelloBundle:Default:index.html.twig', array('name' => $name));
    }
}
