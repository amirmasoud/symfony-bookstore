<?php

namespace Chakosh\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ChakoshHomeBundle:Default:index.html.twig');
    }
}
