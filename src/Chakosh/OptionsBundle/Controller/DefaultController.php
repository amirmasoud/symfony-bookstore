<?php

namespace Chakosh\OptionsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ChakoshOptionsBundle:Default:index.html.twig', array('name' => $name));
    }
}
