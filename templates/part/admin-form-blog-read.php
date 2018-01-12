

    

        <main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
          
          <div id="modifPage">
            
            <h1>Page Blog</h1>
  
            <section class="row text-center placeholders">
              
              <div class="col-6 col-sm-3 placeholder">
              <div class="p-3 mb-2 bg-info text-white"><a href="<?php echo $urlAdminBlogCreate?>"<h4>Créer un nouvel article</h4></a></div>
              </div>
              
             
            </section>  
            
          </div>


<?php

// FAIRE LE TRAITEMENT DU FORMULAIRE AVANT DE FAIRE LE READ
if ($objetRequest->get("codebarre", "") == "delete")
{
    $objetFormArticle = new App\Controller\FormAdmin;
    
    $objetFormArticle->supprimerArticleBlog($objetRequest, $objetConnection, $cheminSymfony, $objetSession);
    
}
?>

<section>
    <h3>Liste des articles de la page blog</h3>
        <table>
            <tbody>
            
<?php

// JE VAIS RECUPERER LE REPOSITORY POUR L'ENTITE Article
// $objetRepository = $this->getDoctrine()->getRepository("App\Entity\MonArticle");
$objetRepository = $this->getDoctrine()->getRepository(App\Entity\ArticleBlog::class);

// PLUS PRATIQUE => findBy
// http://www.doctrine-project.org/api/orm/2.5/class-Doctrine.ORM.EntityRepository.html
// ATTENTION: ON UTILISE LE NOM DES PROPRIETES
$tabResultat = $objetRepository->findBy([], [ "id" => "DESC" ]);

// ON A UN TABLEAU D'OBJETS DE CLASSE Article
foreach($tabResultat as $objetArticle)
{
    // METHODES "GETTER" A RAJOUTER DANS LA CLASSE Article
    $id         = $objetArticle->getId();
    $titre      = $objetArticle->getTitre();
    $contenu    = $objetArticle->getContenu();
    $image      = $objetArticle->getImage();
    $categorie  = $objetArticle->getCategorie();
    $video      = $objetArticle->getVideo();
    
    
    $htmlImage = "";
    if ($image)
    {
        $htmlImage = 
<<<CODEHTML

    <img src="$urlAccueil/assets/img/imgBoutique/$image" title="$image">

CODEHTML;
    }
    
    
    // CREER L'URL POUR LA ROUTE DYNAMIQUE (AVEC PARAMETRE)
    $urlViewArticle = $this->generateUrl("view-article", [ "id" => $id ]);
    
    echo
<<<CODEHTML

    <tr>
        <td>$id</td>
        <td><a href="$urlViewArticle">$titre</a></td>
        <td>$categorie</td>
        <td>$contenu</td>
        <td>$htmlImage</td>
        <td>$video</td>
        <td>
            <!-- ETAPE 1: AFFICHER LE FORMULAIRE POUR UN UPDATE -->
            <form method="GET" action="#section-update">
                <input type="hidden" name="afficher" value="update">
                <input type="hidden" name="idUpdate" value="$id">
                <button type="submit">Modifier l'article</button>
            </form>
        </td>
        <td>
            <form method="POST" action="">
                <input type="hidden" name="codebarre" value="delete">
                <input type="hidden" name="idDelete" value="$id">
                <button type="submit">Supprimer l'article</button>
            </form>
        </td>
    </tr>
    
CODEHTML;
    
}

?>
            </tbody>
        </table>


</section>












<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

         
        </main>
      </div>
    </div>