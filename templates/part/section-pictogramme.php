

<section class="section-blog">
    <section class="largeur">
    <h3>Retrouvez ici tous les pictogrammes que nous proposons pour diversifier les exercices et les applications de notre petit bonhomme.</h3>

<?php
// ALLER CHERCHER LA LISTE DES ARTICLES DANS LA CATEGORIE $cat

// JE VAIS RECUPERER LE REPOSITORY POUR L'ENTITE 
// $objetRepository = $this->getDoctrine()->getRepository("App\Entity\MonArticle");
$objetRepository = $this->getDoctrine()->getRepository(App\Entity\Pictogrammes::class);

// PLUS PRATIQUE => findBy
// http://www.doctrine-project.org/api/orm/2.5/class-Doctrine.ORM.EntityRepository.html
// ATTENTION: ON UTILISE LE NOM DES PROPRIETES
// $objetArticle = $objetRepository->find($id);

$tabResultat = $objetRepository->findBy([], [ "id" => "DESC" ]);

// ON A UN TABLEAU D'OBJETS DE CLASSE Article
foreach($tabResultat as $objetPictogrammes)
{
    // METHODES "GETTER" A RAJOUTER DANS LA CLASSE 
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

    <img src="$urlAccueil/assets/img/imgBoutique/$image" title="$image">

CODEHTML;
    }
    
    
    $urlPictoFiche = $this->generateUrl("pictoFiche", [ "id" => $id ]);
    
    echo
<<<CODEHTML

    <article class="bloc-produit">
         <h4 title="$titre"><a href="$urlPictoFiche">$titre</a></h4>
        <p>$description</p>
        <p>$prix €</p>
        <div class="imageBoutique">$htmlImage</div>
    </article>
    
CODEHTML;
    

    

}
?>


    </section>

<div>
    
    <a class="but-boutique" href="<?php echo $urlBoutique ?>">Retour à la boutique</a>
    
</div>

</section>