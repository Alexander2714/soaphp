<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class NodesController extends Controller
{
    /**
     * @Route("/", name="nodes")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('nodes/nodes.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ));
    }   
}
