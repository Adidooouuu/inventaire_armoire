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
    private $vetement_id;
    /**
     * @ORM\Column(type="integer")
     */
    private $donneur_id;
    /**
     * @ORM\Column(type="integer")
     */
    private $date_id;

    /**
     * @ORM\Column(type="string")
     */
    private $type_vetement;
    /**
     * @ORM\Column(type="string")
     */
    private $taux_usage;
    /**
    * @ORM\Column(type="datetime")
    */
    private $date_reception;

}
