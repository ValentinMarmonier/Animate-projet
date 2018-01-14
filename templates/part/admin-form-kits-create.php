
<div class="container-fluid">
      <div class="row">
        


<section class="col-lg-4 col-lg-offset-2">
    <h3>Ajouter un article dans la page Kits</h3>
    <!-- NE PAS OUBLIER: POUR UPLOADER UN FICHIER -->
    <!-- method="POST" enctype="multipart/form-data" -->
    
    
    
    <form enctype="multipart/form-data">
        
  <div class="form-group">
    <label for="formGroupExampleInput">Nom du kit</label>
    <input type="text" name="nomKit" required class="form-control" id="formGroupExampleInput" placeholder="Nom du kit">
  </div>
  
  <div class="form-group">
    <label for="formGroupExampleInput">Description</label>
    <input type="text" name="description" required class="form-control" id="formGroupExampleInput" placeholder="Description">
  </div>
  
  <div class="form-group">
    <label for="formGroupExampleInput2">Contenu du kit</label>
    <textarea name="contenuKit" required class="form-control" id="formGroupExampleInput" placeholder="Contenu de votre kit"></textarea>
  </div>
  
  <div class="form-group">
    <label for="formGroupExampleInput">Description</label>
    <input type="text" name="infoComplementaire" required class="form-control" id="formGroupExampleInput" placeholder="Informations complémentaires">
  </div>
  
  <div class="form-group">
    <label for="formGroupExampleInput">Prix</label>
    <input type="text" name="prix" required class="form-control" id="formGroupExampleInput" placeholder="Prix du kit">
  </div>
  
  <div class="form-group">
    <label for="exampleInputFile">Image</label>
    <input type="file" name="image" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
  </div>
  
  <div class="form-group">
    <label for="formGroupExampleInput">Categorie</label>
    <input type="text" name="categorie" required class="form-control" id="formGroupExampleInput" placeholder="Categorie du kit">
  </div>
  
  <button type="submit" class="btn btn-primary">Publier</button>
  <input type="hidden" name="codebarre" value="form-kits">
  
  
</form>
    
    
    
    
    
    
    
    
    
    
    
    
    <!--
    
    <form method="POST">
        <input type="text" name="nomKit" required placeholder="Nom du kit">
        <input type="text" name="description" required placeholder="description">
        <textarea id="editor1" type="text" name="contenuKit" required placeholder="contenu du kit" rows="30"></textarea>
        <input type="text" name="infoComplementaire" placeholder="Informations complémentaires">
        <input type="text" name="prix" placeholder="Prix du kit">
        <input type="file" name="image">
        <input type="text" name="categorie" required placeholder="categorie du kit">
        
        <button type="submit">PUBLIER ARTICLE</button>
        <input type="hidden" name="codebarre" value="form-kits">
    
    </div>
</div>
        
    -->    
        
<?php
// TRAITER LE FORMULAIRE
if ($objetRequest->get("codebarre", "") == "form-kits")
{
    $objetFormAdmin = new App\Controller\FormAdmin;
    
    $objetFormAdmin->creerKits($objetRequest, $objetConnection, $cheminSymfony, $objetSession);
    
    // https://symfony.com/doc/current/doctrine.html#persisting-objects-to-the-database
  //  $objetEntityManager = $this->getDoctrine()->getManager();
  //  $objetFormArticle->creerPersistence($objetRequest, $objetConnection, $objetEntityManager, $cheminSymfony, $objetSession);
}
?>
        
    
    
    
    
</section>


