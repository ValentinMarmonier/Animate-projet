<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CiblesDescriptionRepository")
 */
class CiblesDescription
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    // add your own fields
    
    /**
     * @ORM\Column(type="text")
     */
    private $chapeau;
    
    /**
     * @ORM\Column(type="text")
     */
    private $thematique;
    
    /**
     * @ORM\Column(type="text")
     */
    private $enSavoirPlus;
    
    /**
     * @ORM\Column(type="text")
     */
    private $atouts;
}
