<?php

require_once("$cheminPart/header.php");
?>


<section class="section-blog">
    <section class="largeur">  
        <h3>Retrouvez nos kits AniMate&reg; pour travailler avec les personnes que vous prenez en charge dans le cadre de séances individuelles ou en groupe.</h3>

<?php
// ALLER CHERCHER LA LISTE DES ARTICLES DANS LA CATEGORIE $cat

// JE VAIS RECUPERER LE REPOSITORY POUR L'ENTITE 
// $objetRepository = $this->getDoctrine()->getRepository("App\Entity\MonArticle");
$objetRepository = $this->getDoctrine()->getRepository(App\Entity\Kits::class);

// PLUS PRATIQUE => findBy
// http://www.doctrine-project.org/api/orm/2.5/class-Doctrine.ORM.EntityRepository.html
// ATTENTION: ON UTILISE LE NOM DES PROPRIETES
// $objetArticle = $objetRepository->find($id);

$tabResultat = $objetRepository->findBy([], [ "id" => "DESC" ]);

// ON A UN TABLEAU D'OBJETS DE CLASSE Article
foreach($tabResultat as $objetKits)
{
    // METHODES "GETTER" A RAJOUTER DANS LA CLASSE 
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

    <img src="$urlAccueil/assets/img/imgBoutique/$image" title="$image">

CODEHTML;
    }
    
    
    $urlKitFiche = $this->generateUrl("kitFiche", [ "id" => $id ]);
    
    echo
<<<CODEHTML

    <article class="bloc-produit">
        <h4 id="title-roduit" title="$nomKit"><a href="$urlKitFiche">$nomKit</a></h4>
            
            <div class="image-produit">$htmlImage</div>
            <div class="bloc-texte-produit">
                <p id="description-produit">$description</p>
                <p id="prix-produit">$prix €</p>
            </div>
    </article>
    
CODEHTML;


    

}
?>



<div>
    
    <a class="but-boutique" href="<?php echo $urlBoutique ?>">Retour à la boutique</a>
    
</div>
</section>
</section>
<div class="bloc-texte-produit"></div>


