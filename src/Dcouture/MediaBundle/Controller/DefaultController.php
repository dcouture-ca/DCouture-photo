<?php

namespace Dcouture\MediaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('DcoutureMediaBundle:Default:index.html.twig', array('name' => $name));
    }
}
