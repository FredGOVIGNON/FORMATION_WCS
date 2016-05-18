<?php

namespace dojoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('dojoBundle:Default:index.html.twig');
    }
}
