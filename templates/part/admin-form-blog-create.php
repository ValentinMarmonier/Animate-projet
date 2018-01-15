
<div class="container-fluid">
      <div class="row">
        


<section class="col-lg-4 col-lg-offset-2">
    <h3>Ajouter un article dans la page Blog</h3>
    <!-- NE PAS OUBLIER: POUR UPLOADER UN FICHIER -->
    <!-- method="POST" enctype="multipart/form-data" -->
    
    
    
    <form method="post" enctype="multipart/form-data">
        
  <div class="form-group">
    <label for="formGroupExampleInput">Titre</label>
    <input type="text" name="titre" required class="form-control" id="formGroupExampleInput" placeholder="Titre de l'article">
  </div>
  
  <div class="form-group">
    <label for="formGroupExampleInput2">Contenu</label>
    <textarea name="contenu" required class="form-control" id="formGroupExampleInput" placeholder="Contenu de l'article"></textarea>
  </div>
  
  <div class="form-group">
    <label for="exampleInputFile">Image</label>
    <input type="file" name="image" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
  </div>
  
  <div class="form-group">
    <label for="formGroupExampleInput">Categorie</label>
    <input type="text" name="categorie" class="form-control" id="formGroupExampleInput" placeholder="Categorie de l'article">
  </div>  
  
  <div class="form-group">
    <label for="exampleInputFile">Video</label>
    <input type="file" name="video" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
  </div>
  
  
  
  <button type="submit" class="btn btn-primary">Publier</button>
  <input type="hidden" name="codebarre" value="form-blog">
  
  
</form>
    
    
        
<?php
// TRAITER LE FORMULAIRE
if ($objetRequest->get("codebarre", "") == "form-blog")
{
    $objetFormAdmin = new App\Controller\FormAdmin;
    
    $objetFormAdmin->creerArticleBlog($objetRequest, $objetConnection, $cheminSymfony, $objetSession);
    
    // https://symfony.com/doc/current/doctrine.html#persisting-objects-to-the-database
  //  $objetEntityManager = $this->getDoctrine()->getManager();
  //  $objetFormArticle->creerPersistence($objetRequest, $objetConnection, $objetEntityManager, $cheminSymfony, $objetSession);
}
?>
        
    
    
    
    
</section>


