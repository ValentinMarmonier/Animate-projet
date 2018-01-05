

<section>
    <h3>Retrouvez toute l'actualité Animate.</h3>

<?php
// ALLER CHERCHER LA LISTE DES ARTICLES DANS LA CATEGORIE $cat

// JE VAIS RECUPERER LE REPOSITORY POUR L'ENTITE 
// $objetRepository = $this->getDoctrine()->getRepository("App\Entity\MonArticle");
$objetRepository = $this->getDoctrine()->getRepository(App\Entity\ArticleBlog::class);

// PLUS PRATIQUE => findBy
// http://www.doctrine-project.org/api/orm/2.5/class-Doctrine.ORM.EntityRepository.html
// ATTENTION: ON UTILISE LE NOM DES PROPRIETES
// $objetArticle = $objetRepository->find($id);

$tabResultat = $objetRepository->findBy([], [ "id" => "DESC" ]);

// ON A UN TABLEAU D'OBJETS DE CLASSE Article
foreach($tabResultat as $objetArticleBlog)
{
    // METHODES "GETTER" A RAJOUTER DANS LA CLASSE 
    $id                     = $objetArticleBlog->getId();
    $titre                  = $objetArticleBlog->getTitre();
    $contenu                = $objetArticleBlog->getContenu();
    $image                  = $objetArticleBlog->getImage();
    $video                  = $objetArticleBlog->getVideo();
    $categorie              = $objetArticleBlog->getCategorie();

    
    
    $htmlImage = "";
    if ($image)
    {
        $htmlImage = 
<<<CODEHTML

    <img src="$urlAccueil/$image" title="$image">

CODEHTML;
    }
    
    
    $urlViewArticle = $this->generateUrl("view-article", [ "id" => $id ]);
    
    echo
<<<CODEHTML

    <article>
         <h4 title="$id"><a href="$urlViewArticle">$titre</a></h4>
        <p>$contenu</p>
        <div>$htmlImage</div>
        <div>$video</div>
        <p>$categorie</p>
        <p>$categorie</p>
    </article>
    
CODEHTML;
    

    

}
?>


</section>