<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\KitsRepository")
 */
class Kits
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
    private $nomKit;
    
    /**
     * @ORM\Column(type="text")
     */
    private $description;
    
    /**
     * @ORM\Column(type="text")
     */
    private $contenuKit;
    
    /**
     * @ORM\Column(type="text")
     */
    private $infoComplementaire;
    
    /**
     * @ORM\Column(type="decimal")
     */
    private $prix;
    
    /**
     * @ORM\Column(type="text")
     */
    private $image;
    
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
    
    public function setNomKit ($nomKit)
    {
        $this->nomKit = $nomKit;
    }
    
    public function setDescription ($description)
    {
        $this->description = $description;
    }
    
    public function setContenuKit ($contenuKit)
    {
        $this->contenuKit = $contenuKit;
    }
    
    public function setInfoComplementaire ($infoComplementaire)
    {
        $this->infoComplementaire = $infoComplementaire;
    }
    
    public function setPrix ($prix)
    {
        $this->prix = $prix;
    }
    
    public function setImage ($image)
    {
        $this->image = $image;
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
    
    public function getNomKit ()
    {
        return $this->nomKit;
    }
    
    public function getDescription ()
    {
        return $this->description;
    }
    
    public function getContenuKit ()
    {
        return $this->contenuKit;
    }
    
    public function getInfoComplementaire ()
    {
        return $this->infoComplementaire;
    }
    
    public function getPrix ()
    {
        return $this->prix;
    }
    
    public function getImage ()
    {
        return $this->image;
    }
    
    public function getCategorie ()
    {
        return $this->categorie;
    }
}
