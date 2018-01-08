<section class="sectionUtilisateurs">
    <h3>Plus de 150 professionnels utilisent déjà AniMate</h3>
    
    <div>
        
        
    <?php
// ALLER CHERCHER LA LISTE DES ARTICLES DANS LA CATEGORIE $cat

// JE VAIS RECUPERER LE REPOSITORY POUR L'ENTITE Article
$objetRepository     = $this->getDoctrine()->getRepository(App\Entity\Cibles::class);


$tabResultat = $objetRepository->findBy([], [ "id" => "DESC" ]);

// ON A UN TABLEAU D'OBJETS DE CLASSE Article
foreach($tabResultat as $objetCibles)
{
    // METHODES "GETTER" A RAJOUTER DANS LA CLASSE 
    $id                     = $objetCibles->getId();
    $titre                  = $objetCibles->getTitre();
    $description            = $objetCibles->getDescription();
    $video                  = $objetCibles->getVideo();
    $temoignage             = $objetCibles->getTemoignage();

    
    
    
    $urlCiblesDescription = $this->generateUrl("ciblesDescription", [ "id" => $id ]);
    
    echo
<<<CODEHTML

    <article>
         <h4 title="$id">$titre</h4>
        <p>$description</p>
        <a href="$urlCiblesDescription">Découvrez les avantages d'AniMate pour les $titre<a>
        <video href="$video"></video>
        <p>"$temoignage"</p>
    </article>
    
CODEHTML;
    

    

}
?>
    
</section>