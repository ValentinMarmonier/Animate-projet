

<section>
    

<?php
// ALLER CHERCHER LA LISTE DES ARTICLES DANS LA CATEGORIE $cat

// JE VAIS RECUPERER LE REPOSITORY POUR L'ENTITE Article
$objetRepository = $this->getDoctrine()->getRepository(App\Entity\Kits::class);

// PLUS PRATIQUE => findBy
// http://www.doctrine-project.org/api/orm/2.5/class-Doctrine.ORM.EntityRepository.html
// ATTENTION: ON UTILISE LE NOM DES PROPRIETES
// $objetArticle = $objetRepository->find($id);

// ON A UN TABLEAU D'OBJETS DE CLASSE Article
if ($objetKits)
{
    // METHODES "GETTER" A RAJOUTER DANS LA CLASSE Article
    $id                     = $objetKits->getId();
    $nomKit                 = $objetKits->getNomKit();
    $description            = $objetKits->getDescription();
    $contenuKit             = $objetKits->getContenuKit();
    $infoComplementaire     = $objetKits->getinfoComplementaire();
    $prix                   = $objetKits->getPrix();
    $image                  = $objetKits->getImage();
    $categorie              = $objetKits->getCategorie();
    
    
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
        <h4 title="$id">$nomKit</a></h4>
        <p>$description</p>
        <p>$infoComplementaire</p>
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