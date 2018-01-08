<section class=sectionProduits>

    <article>
        <img src="#"></img>
        <img src="#"></img>
        <img src="#"></img>
        
        <p>15 pictogrammes</p>

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
    
    echo
<<<CODEHTML

    <article>
         <h4 title="$titre">$titre</h4>
    </article>
    
CODEHTML;
    

    

}
?>        
        
    </article>
    
    <article>
        <p>3 kits</p>
        
<?php

$objetRepository = $this->getDoctrine()->getRepository(App\Entity\Kits::class);

$tabResultat = $objetRepository->findBy([], [ "id" => "DESC" ]);

foreach($tabResultat as $objetKits)
{
    // METHODES "GETTER" A RAJOUTER DANS LA CLASSE 
    $id                     = $objetKits->getId();
    $nomKit                 = $objetKits->getNomKit();


    echo
<<<CODEHTML

    <article>
         <h4 title="$nomKit">$nomKit</h4>
    </article>
    
CODEHTML;
    

    

}
?>        
        
        
    </article>

</section>