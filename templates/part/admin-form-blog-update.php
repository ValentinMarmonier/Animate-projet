    <main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">


        <section id="section-update">
<?php

// ON TRAITE LE FORMULAIRE UPDATE AVANT DE FAIRE LA REQUETE
// POUR RECUPERER LES INFOS QUI VONT REMPLIR LE FORMULAIRE
// => CELA PERMET D'AVOIR UN AFFICHAGE QUI EST A JOUR...
// POUR AFFICHER LE MESSAGE SOUS LE FORMULAIRE
// ON STOCKE LE MESSAGE DANS UNE VARIABLE
// ET ON L'AFFICHE ENSUITE

ob_start();

// TRAITER LE FORMULAIRE
if ($objetRequest->get("codebarre", "") == "update")
{
    $objetFormArticle = new App\Controller\FormAdmin;
    
    $objetEntityManager = $this->getDoctrine()->getManager();
    $objetFormArticle->updateArticleBlog($objetRequest, $objetConnection, $objetEntityManager, $cheminSymfony, $objetSession);
}

$messageUpdate = ob_get_clean();

?>
<?php

// RECUPERER L'ID DE LA LIGNE A MODIFIER
$idUpdate = $objetRequest->get("idUpdate", 0);
// RECUPERER LES AUTRES INFOS POUR PRE-REMPLIR LE FORMULAIRE
$objetRepository = $this->getDoctrine()->getRepository(App\Entity\ArticleBlog::class);
// http://www.doctrine-project.org/api/orm/2.5/class-Doctrine.ORM.EntityRepository.html
$objetArticleUpdate = $objetRepository->find($idUpdate);

            if ($objetArticleUpdate) :

// OK ON A TROUVE UN ARTICLE POUR CET ID
$titre      = $objetArticleUpdate->getTitre();
$contenu    = $objetArticleUpdate->getContenu();
$image      = $objetArticleUpdate->getImage();
$categorie  = $objetArticleUpdate->getCategorie();
$video      = $objetArticleUpdate->getVideo();


?>

<form>
        
  <div class="form-group">
    <label for="formGroupExampleInput">Titre</label>
    <input type="text" name="titre" required class="form-control" id="formGroupExampleInput" placeholder="Titre de l'article" value="<?php echo $titre ?>">
  </div>
  
  <div class="form-group">
    <label for="formGroupExampleInput2">Contenu</label>
    <textarea name="contenu" required class="form-control" id="formGroupExampleInput" placeholder="Contenu de l'article" value="<?php echo $contenu ?>"></textarea>
  </div>
  
  <div class="form-group">
    <label for="exampleInputFile">Image</label>
    <input type="file" name="image" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" value="<?php echo $image ?>">
  </div>
  
  <div class="form-group">
    <label for="formGroupExampleInput">Categorie</label>
    <input type="text" name="categorie" class="form-control" id="formGroupExampleInput" placeholder="Categorie de l'article" value="<?php echo $categorie ?>">
  </div>  
  
  <div class="form-group">
    <label for="exampleInputFile">Video</label>
    <input type="file" name="video" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" value="<?php echo $video ?>">
  </div>
  
  
  
  <button type="submit" class="btn btn-primary">Modifier l'article</button>
  <input type="hidden" name="afficher" value="update">
  <input type="hidden" name="idUpdate" value="<?php echo $idUpdate ?>">
  <input type="hidden" name="codebarre" value="update">  
  
  
</form>

 <?php endif; ?>
 

</main>




