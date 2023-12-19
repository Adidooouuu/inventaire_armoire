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
     * Plusieurs vêtements peuvent venir du même donneur
     * 
     * @ORM\Column(type="integer")
     * @ORM\ManyToOne(targetEntity="Donneur")
     * @ORM\JoinColumn(name="donneur_id", referencedColumnName="periode_id")
     */
    private $donneur_id;

    /**
     * Un vêtement ne peut être loué que sur une seule période à la fois
     * 
     * @ORM\Column(type="integer")
     * @ORM\OneToOne(targetEntity="Location")
     */
    private $location_id;

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
