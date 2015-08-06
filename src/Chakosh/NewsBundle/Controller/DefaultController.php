<?php

namespace Chakosh\NewsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ChakoshNewsBundle:Default:index.html.twig', array('name' => $name));
    }
}
