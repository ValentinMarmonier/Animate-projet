

        <section id="section-update" class="col-lg-offset-2">
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
$categorie  = $objetArticleUpdate->getCategorie();


?>

  <H3>Modifier un article de la page Blog</H3>


    <form method="post" enctype="multipart/form-data">
        <input type="text" name="titre" required placeholder="Titre de l'article" value="<?php echo $titre ?>">
        <textarea id="editor1" type="text" name="contenu" required placeholder="Contenu de l'article" rows="30" value="<?php echo $contenu ?>"></textarea>
        <input type="file" name="image">
        <input type="text" name="categorie" required placeholder="Categorie de l'article" value="<?php echo $categorie ?>">
        <input type="file" name="video" value="<?php echo $video ?>">
        
        
        <button type="submit" class="btn btn-primary">Modifier l'article</button>
  
        <input type="hidden" name="afficher" value="update">
        <input type="hidden" name="idUpdate" value="<?php echo $idUpdate ?>">
        <input type="hidden" name="codebarre" value="update">  
    </form>

<?php echo $messageUpdate ?>

    
</section>
    
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
    
<?php endif; ?>



 





