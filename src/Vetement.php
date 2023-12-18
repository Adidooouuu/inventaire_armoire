<?php

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="vetement")
 */
class Vetement
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $id = null;
    /**
     * @ORM\Column(type="integer")
     */
    private $categorie_id;
    /**
     * @ORM\Column(type="integer")
     */
    private $taux_usage_id;
    /**
     * @ORM\Column(type="integer")
     */
    private $etagere_id;
    /**
     * @ORM\Column(type="integer")
     */
    private $proprio_id;
}
