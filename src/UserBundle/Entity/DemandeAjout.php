<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DemandeAjout
 *
 * @ORM\Table(name="demande_ajout")
 * @ORM\Entity(repositoryClass="UserBundle\Repository\DemandeAjoutRepository")
 */
class DemandeAjout
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
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}

