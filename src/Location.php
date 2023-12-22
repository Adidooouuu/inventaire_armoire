<?php

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="location")
 */
class Location
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $location_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $locataire_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $vetement_id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date_debut_location;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date_fin_location;
}
