<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserAdminRepository")
 */
class UserAdmin
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    // add your own fields
    
    /**
     * @ORM\Column(type="string", length=500)
     */
    private $pseudo;
    
    /**
     * @ORM\Column(type="string", length=50)
     */
    private $password;
    
    /**
     * @ORM\Column(type="integer")
     */
    private $niveau;
    
    
    // METHODES GETTER 
    
    function getId ()
    {
        return $this->id;
    }
    
    function getPseudo ()
    {
        return $this->pseudo;
    }
    
    function getPassword ()
    {
        return $this->password;
    }
    
    function getNiveau ()
    {
        return $this->niveau;
    }
    
    
    
    
}
