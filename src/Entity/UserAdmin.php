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
    private $email;
    
    /**
     * @ORM\Column(type="string", length=50)
     */
    private $password;
    
    /**
     * @ORM\Column(type="integer")
     */
    private $niveau;
}
