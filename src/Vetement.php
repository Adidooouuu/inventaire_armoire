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
    private int|null $id = null;
    /**
     * @ORM\Column(type="integer")
     */
    private int $categorie_id;
    /**
     * @ORM\Column(type="integer")
     */
    private int $taux_usage_id;
    /**
     * @ORM\Column(type="integer")
     */
    private int $etagere_id;
    /**
     * @ORM\Column(type="integer")
     */
    private int $proprio_id;
}
