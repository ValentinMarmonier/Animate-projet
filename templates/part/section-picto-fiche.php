

<section>
    

<?php
// ALLER CHERCHER LA LISTE DES ARTICLES DANS LA CATEGORIE $cat

// JE VAIS RECUPERER LE REPOSITORY POUR L'ENTITE Article
$objetRepository = $this->getDoctrine()->getRepository(App\Entity\Pictogrammes::class);

// PLUS PRATIQUE => findBy
// http://www.doctrine-project.org/api/orm/2.5/class-Doctrine.ORM.EntityRepository.html
// ATTENTION: ON UTILISE LE NOM DES PROPRIETES
// $objetArticle = $objetRepository->find($id);

// ON A UN TABLEAU D'OBJETS DE CLASSE Article
if ($objetPictogrammes)
{
    // METHODES "GETTER" A RAJOUTER DANS LA CLASSE Article
    $id                     = $objetPictogrammes->getId();
    $titre                  = $objetPictogrammes->getTitre();
    $description            = $objetPictogrammes->getDescription();
    $prix                   = $objetPictogrammes->getPrix();
    $image                  = $objetPictogrammes->getImage();
    $categorie              = $objetPictogrammes->getCategorie();
    
    
    $htmlImage = "";
    if ($image)
    {
        $htmlImage = 
<<<CODEHTML

    <img src="$urlAccueil/$image" title="$image">

CODEHTML;
    }
    
    
    echo
<<<CODEHTML

    <article>
         <h4 title="$id">$titre</h4>
        <p>$description</p>
        <p>$prix €</p>
        <div>$htmlImage</div>
    </article>
    
CODEHTML;
}
else {
    // DESOLE IL N'Y A PAS D'ARTICLE ASSOCIE
    echo "ERREUR: ARTICLE NON TROUVE ($id)";
}

?>


</section>