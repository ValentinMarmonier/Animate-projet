<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CiblesRepository")
 */
class Cibles
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
    private $titre;
    
    /**
     * @ORM\Column(type="text")
     */
    private $description;
    
    /**
     * @ORM\Column(type="text")
     */
    private $video;
    
    /**
     * @ORM\Column(type="text")
     */
    private $temoignage;
    
    
    // METHODES
    // SETTERS
    
    public function setId ($id)
    {
        $this->id = $id;
    }
    
    public function setTitre ($titre)
    {
        $this->titre = $titre;
    }
    
    public function setDescription ($description)
    {
        $this->description = $description;
    }
    
    public function setVideo ($video)
    {
        $this->video = $video;
    }
    
    public function setTemoignage ($temoignage)
    {
        $this->temoignage = $temoignage;
    }
    
    
    //GETTERS
    
    public function getId ()
    {
        return $this->id;
    }
    
    public function getTitre ()
    {
        return $this->titre;
    }
    
    public function getDescription ()
    {
        return $this->description;
    }
    
    public function getVideo ()
    {
        return $this->video;
    }
    
    public function getTemoignage ()
    {
        return $this->temoignage;
    }
    
    
    
}
