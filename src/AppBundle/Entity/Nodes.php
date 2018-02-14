<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Nodes
 *
 * @ORM\Table(name="nodes")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\NodesRepository")
 */
class Nodes
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="node_id", type="integer")
     */
    private $nodeId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="x", type="string", length=255)
     */
    private $x;

    /**
     * @var string
     *
     * @ORM\Column(name="y", type="string", length=255)
     */
    private $y;

    /**
     * @var string
     *
     * @ORM\Column(name="width", type="string", length=255)
     */
    private $width;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nodeId
     *
     * @param integer $nodeId
     * @return Nodes
     */
    public function setNodeId($nodeId)
    {
        $this->nodeId = $nodeId;

        return $this;
    }

    /**
     * Get nodeId
     *
     * @return integer 
     */
    public function getNodeId()
    {
        return $this->nodeId;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Nodes
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set x
     *
     * @param string $x
     * @return Nodes
     */
    public function setX($x)
    {
        $this->x = $x;

        return $this;
    }

    /**
     * Get x
     *
     * @return string 
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * Set y
     *
     * @param string $y
     * @return Nodes
     */
    public function setY($y)
    {
        $this->y = $y;

        return $this;
    }

    /**
     * Get y
     *
     * @return string 
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * Set width
     *
     * @param string $width
     * @return Nodes
     */
    public function setWidth($width)
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Get width
     *
     * @return string 
     */
    public function getWidth()
    {
        return $this->width;
    }
}
