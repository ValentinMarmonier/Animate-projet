<main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
          
          <div id="modifPage">
            
            <h1>Page Kits</h1>
  
            <section class="row text-center placeholders">
              
              <div class="col-6 col-sm-3 placeholder">
              </div>
              
             
            </section>  
            
          </div>


<?php

// FAIRE LE TRAITEMENT DU FORMULAIRE AVANT DE FAIRE LE READ
if ($objetRequest->get("codebarre", "") == "delete")
{
    $objetFormAdmin = new App\Controller\FormAdmin;
    
    $objetFormAdmin->supprimerPictos($objetRequest, $objetConnection, $cheminSymfony, $objetSession);
    
}
?>

<section>
    <h3>Liste des articles de la page Pictogrammes</h3>
        <table>
            <tbody>
            
<?php

// JE VAIS RECUPERER LE REPOSITORY POUR L'ENTITE Article
// $objetRepository = $this->getDoctrine()->getRepository("App\Entity\MonArticle");
$objetRepository = $this->getDoctrine()->getRepository(App\Entity\Pictogrammes::class);

// PLUS PRATIQUE => findBy
// http://www.doctrine-project.org/api/orm/2.5/class-Doctrine.ORM.EntityRepository.html
// ATTENTION: ON UTILISE LE NOM DES PROPRIETES
$tabResultat = $objetRepository->findBy([], [ "id" => "DESC" ]);

// ON A UN TABLEAU D'OBJETS DE CLASSE 
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
    
    // CREER L'URL POUR LA ROUTE DYNAMIQUE (AVEC PARAMETRE)
    $urlViewPictos = $this->generateUrl("view-pictos", [ "id" => $id ]);
    
    echo
<<<CODEHTML

    <tr>
        <td>$id</td>
        <td><a href="$urlViewPictos">$titre</a></td>
        <td>$description</td>
        <td>$prix</td>
        <td>$image</td>
        <td>$categorie</td>
        <td>
            <!-- ETAPE 1: AFFICHER LE FORMULAIRE POUR UN UPDATE -->
            <form method="GET" action="#section-update">
                <input type="hidden" name="afficher" value="update">
                <input type="hidden" name="idUpdate" value="$id">
                <button type="submit">Modifier</button>
            </form>
        </td>
        <td>
            <form method="POST" action="">
                <input type="hidden" name="codebarre" value="delete">
                <input type="hidden" name="idDelete" value="$id">
                <button type="submit">supprimer</button>
            </form>
        </td>
    </tr>
    
CODEHTML;
    
}

?>
            </tbody>
        </table>


</section>