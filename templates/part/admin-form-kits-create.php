<section>
    <h3>Ajouter un article dans la page Kits</h3>
    <!-- NE PAS OUBLIER: POUR UPLOADER UN FICHIER -->
    <!-- method="POST" enctype="multipart/form-data" -->
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
        <div class="response">
<?php
// TRAITER LE FORMULAIRE
if ($objetRequest->get("codebarre", "") == "form-kits")
{
    $objetFormAdmin = new App\Controller\FormAdmin;
    
    $objetFormAdmin->creerKits($objetRequest, $objetConnection, $cheminSymfony, $objetSession);
    
    // https://symfony.com/doc/current/doctrine.html#persisting-objects-to-the-database
    //$objetEntityManager = $this->getDoctrine()->getManager();
    //$objetFormArticle->creerPersistence($objetRequest, $objetConnection, $objetEntityManager, $cheminSymfony, $objetSession);
}
?>
        </div>
    </form>
    
    <!-- https://sdk.ckeditor.com/samples/autogrow.html# -->
	<script src="https://cdn.ckeditor.com/4.8.0/standard-all/ckeditor.js"></script>
    <script>
    CKEDITOR.replace( 'editor1', {
			extraPlugins: 'autogrow',
			autoGrow_minHeight: 200,
			autoGrow_maxHeight: 600,
			autoGrow_bottomSpace: 50,
			removePlugins: 'resize'
		} );
    </script>
    
</section>
