<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ContactRepository")
 */
class Contact
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
    private $email;
    
    /**
     * @ORM\Column(type="text")
     */
    private $nom;
    
    /**
     * @ORM\Column(type="text")
     */
    private $message;
    
    /**
     * @ORM\Column(type="text")
     */
    private $dateMessage;
}
