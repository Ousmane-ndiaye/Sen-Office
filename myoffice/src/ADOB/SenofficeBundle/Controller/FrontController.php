<?php

namespace ADOB\SenofficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class FrontController extends Controller
{
    /**
     * @Route("/acceuil")
     */
    public function indexAction()
    {
        return $this->render('SenofficeBundle:Front:index.html.twig', array(
            'activeA' => 'active'
        ));
    }

    /**
     * @Route("/catalogue")
     */
    public function catalogueAction()
    {
        return $this->render('SenofficeBundle:Front:catalogue.html.twig', array(
            'activeC' => 'active'
        ));
    }

}
