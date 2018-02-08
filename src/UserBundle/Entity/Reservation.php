<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservation
 *
 * @ORM\Table(name="reservation")
 * @ORM\Entity(repositoryClass="UserBundle\Repository\ReservationRepository")
 */
class Reservation
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
     * @ORM\Column(type="integer")
     */
    private $id_etablissement;
    /**
     * @ORM\Column(type="integer")
     */
    private $id_membre;
    /**
     * @ORM\Column(type="string")
     */
    private $nom;
    /**
     * @ORM\Column(type="string")
     */
    private $prenom;
    /**
     * @ORM\Column(type="string")
     */
    private $email;
    /**
     * @ORM\Column(type="date")
     */
    private $date;
    /**
     * @ORM\Column(type="integer")
     */
    private $nbr_nuites;
    /**
     * @ORM\Column(type="string")
     */
    private $pention;
    /**
     * @ORM\Column(type="integer")
     */
    private $nbr_personnes;
    /**
     * @ORM\Column(type="string")
     */
    private $num_tel;
    /**
     * @ORM\Column(type="string")
     */
    private $description;
    /**
     * @ORM\Column(type="integer")
     */
    private $nbr_chambres;
    /**
     * @ORM\Column(type="string")
     */
    private $type_chambres;




    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}

