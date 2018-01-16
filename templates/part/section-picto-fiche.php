

<section class="section-blog">
    <section class="largeur"> 
    

<?php
// ALLER CHERCHER LA LISTE DES ARTICLES DANS LA CATEGORIE $cat

// JE VAIS RECUPERER LE REPOSITORY POUR L'ENTITE 
$objetRepository = $this->getDoctrine()->getRepository(App\Entity\Pictogrammes::class);

// PLUS PRATIQUE => findBy
// http://www.doctrine-project.org/api/orm/2.5/class-Doctrine.ORM.EntityRepository.html
// ATTENTION: ON UTILISE LE NOM DES PROPRIETES
// $objetArticle = $objetRepository->find($id);

// ON A UN TABLEAU D'OBJETS DE CLASSE 
if ($objetPictogramme)
{
    // METHODES "GETTER" A RAJOUTER DANS LA CLASSE 
    $id                     = $objetPictogramme->getId();
    $titre                  = $objetPictogramme->getTitre();
    $description            = $objetPictogramme->getDescription();
    $prix                   = $objetPictogramme->getPrix();
    $image                  = $objetPictogramme->getImage();
    $imagefiche             = $objetPictogramme->getImagefiche();
    $categorie              = $objetPictogramme->getCategorie();
    
    
    $htmlImage = "";
    if ($image)
    {
        $htmlImage = 
<<<CODEHTML

    <img src="$urlAccueil/assets/img/imgBoutique/$image" title="$image">

CODEHTML;
    }
    
    
$htmlImageFiche = "";
    if ($imagefiche)
    {
        $htmlImageFiche = 
<<<CODEHTML

    <img src="$urlAccueil/assets/img/imgBoutique/$imagefiche" title="$imagefiche">

CODEHTML;
    }      
    
    
    echo
<<<CODEHTML

    <article class="bloc-produit">
         <h4 title="$titre">$titre</h4>
        <p>$description</p>
        <p>$prix €</p>
        <div class="imageBoutique">$htmlImage</div>
        <div class="imageBoutiqueFiche">$htmlImageFiche</div>
    </article>
    
CODEHTML;
}
else {
    // DESOLE IL N'Y A PAS D'ARTICLE ASSOCIE
    echo "ERREUR: ARTICLE NON TROUVE ($id)";
}

?>


    </section>
</section>    