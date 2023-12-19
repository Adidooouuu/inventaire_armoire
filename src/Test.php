<?php 
// src/Test.php
use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="test")
 */
class Test {
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private  $id;
    /**
     * @ORM\Column(type="string")
     */
    private $name;
    public function getName(): string
    {
        return $this->name;
    }

    function setName($name){
        $this->name = $name;
    }

}