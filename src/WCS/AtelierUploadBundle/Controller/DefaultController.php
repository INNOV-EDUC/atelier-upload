<?php

namespace WCS\AtelierUploadBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('WCSAtelierUploadBundle:Default:index.html.twig', array('name' => $name));
    }
}
