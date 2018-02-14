<?php

namespace AppBundle\Service;
use AppBundle\Service\Nodes\nodes;
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
class nodesInterpreter {

    //put your code here

    public function __construct(nodes $service_node) {
        $this->nodes = $service_node;
    }

    public function parseNodes(array $nodes_array) {
        $nodes = [];
        $connectors = [];
        $nodes = $nodes_array[0]["nodes"];
        $connectors = $nodes_array[0]["connections"];
        $prueba = $this->nodes->test($nodes);
        var_dump($connectors);
        die;
    }

}
