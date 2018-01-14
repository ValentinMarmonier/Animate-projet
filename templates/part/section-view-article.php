<?php

require_once("$cheminPart/header.php");
?>


<section class="section-blog">
     <section class="largeur">   

<?php
// ALLER CHERCHER LA LISTE DES ARTICLES DANS LA CATEGORIE $cat

// JE VAIS RECUPERER LE REPOSITORY POUR L'ENTITE Article
$objetRepository = $this->getDoctrine()->getRepository(App\Entity\ArticleBlog::class);

// PLUS PRATIQUE => findBy
// http://www.doctrine-project.org/api/orm/2.5/class-Doctrine.ORM.EntityRepository.html
// ATTENTION: ON UTILISE LE NOM DES PROPRIETES
// $objetArticle = $objetRepository->find($id);

// ON A UN TABLEAU D'OBJETS DE CLASSE Article
if ($objetArticleBlog)
{
    // METHODES "GETTER" A RAJOUTER DANS LA CLASSE Article
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
    
    
    echo
<<<CODEHTML

    <article class="article-blog">
        <h3>$titre</h3>
        <p>$contenu</p>
        <div>$htmlImage</div>
        <div>$video</div>
        <p>$categorie</p>
        
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

<?php
require_once("$cheminPart/footer-view.php");