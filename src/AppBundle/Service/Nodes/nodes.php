<?php

namespace AppBundle\Service\Nodes;

use AppBundle\Entity\Nodes as entity_node;
use Doctrine\ORM\EntityManager;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of nodesInterpreter
 *
 * @author Alexander Cortes
 */
class nodes {

    /**
     *
     * @var EntityManager 
     */
    protected $em;

    //put your code here
    public function __construct(EntityManager $entityManager) {
        $this->em = $entityManager;
    }

    public function test($nodes) {
        $entity_nodes = new entity_node();
        foreach ($nodes as $node) {         
            $entity_nodes->setName($node['name']);
            $entity_nodes->setNodeId($node['id']);
            $entity_nodes->setWidth($node['width']);
            $entity_nodes->setX($node['x']);
            $entity_nodes->setY($node['y']);
            $this->em->persist($entity_nodes);
            $this->em->flush();
            $this->em->clear();
        }
    }

}
