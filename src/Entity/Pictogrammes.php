<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PictogrammesRepository")
 */
class Pictogrammes
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
     * @ORM\Column(type="decimal")
     */
    private $prix;
    
    /**
     * @ORM\Column(type="text")
     */
    private $image;
    
    /**
     * @ORM\Column(type="text")
     */
    private $imagefiche;
    
    /**
     * @ORM\Column(type="string", length=200)
     */
    private $categorie;
    
    
    
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
    
    public function setPrix ($prix)
    {
        $this->prix = $prix;
    }
    
    public function setImage ($image)
    {
        $this->image = $image;
    }
    
    public function setImagefiche ($imagefiche)
    {
        $this->imagefiche = $imagefiche;
    }
    
    public function setCategorie ($categorie)
    {
        $this->categorie = $categorie;
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
    
    public function getPrix ()
    {
        return $this->prix;
    }
    
    public function getImage ()
    {
        return $this->image;
    }
    
    public function getImagefiche ()
    {
        return $this->imagefiche;
    }
    
    public function getCategorie ()
    {
        return $this->categorie;
    }
}
