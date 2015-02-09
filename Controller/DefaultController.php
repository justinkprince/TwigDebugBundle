<?php

namespace Justinkprince\TwigDebugBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('JustinkprinceTwigDebugBundle:Default:index.html.twig', array('name' => $name));
    }
}
