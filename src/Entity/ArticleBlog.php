<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ArticleBlogRepository")
 */
class ArticleBlog
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
    private $contenu;
    
    /**
     * @ORM\Column(type="text")
     */
    private $image;
    
    /**
     * @ORM\Column(type="text")
     */
    private $video;
    
    /**
     * @ORM\Column(type="string", length=500)
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
    
    public function setContenu ($contenu)
    {
        $this->contenu = $contenu;
    }
    
    public function setImage ($image)
    {
        $this->image = $image;
    }
    
    public function setVideo ($video)
    {
        $this->video = $video;
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
    
    public function getContenu ()
    {
        return $this->contenu;
    }
    public function getimage ()
    {
        return $this->image;
    }
    public function getVideo ()
    {
        return $this->video;
    }
    public function getCategorie ()
    {
        return $this->categorie;
    }
    
    

}


