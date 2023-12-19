<?php

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="dates")
 */
class Dates
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $date_id;
    /**
     * @ORM\Column(type="datetime")
     */
    private $date_debut_location;
    /**
     * @ORM\Column(type="datetime")
     */
    private $date_fin_location;
}
