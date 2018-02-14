<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class NodesController extends Controller {

    /**
     * @Route("/nodes", name="nodes")
     */
    public function indexAction(Request $request) {
        // replace this example code with whatever you need
        return $this->render('nodes/nodes.html.twig', array(
                    'base_dir' => realpath($this->container->getParameter('kernel.root_dir') . '/..') . DIRECTORY_SEPARATOR,
        ));
    }

    /**
     * @Route("/nodes/save", name="save_nodes")
     */
    public function saveAction(Request $request) {

        $em = $this->getDoctrine()->getManager();
        $array_file = $request->request->get('nombre');
        $prueba = $this->get('service_test')->parseNodes($array_file);
        var_dump($prueba);
        die;
    }

}
