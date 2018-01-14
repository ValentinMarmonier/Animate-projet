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
    $objetFormAdmin = new App\Controller\FormAdmin;
    
    $objetEntityManager = $this->getDoctrine()->getManager();
    $objetFormAdmin->updatePictos($objetRequest, $objetConnection, $objetEntityManager, $cheminSymfony, $objetSession);
}

$messageUpdate = ob_get_clean();

?>
<?php

// RECUPERER L'ID DE LA LIGNE A MODIFIER
$idUpdate = $objetRequest->get("idUpdate", 0);
// RECUPERER LES AUTRES INFOS POUR PRE-REMPLIR LE FORMULAIRE
$objetRepository = $this->getDoctrine()->getRepository(App\Entity\Pictogrammes::class);
// http://www.doctrine-project.org/api/orm/2.5/class-Doctrine.ORM.EntityRepository.html
$objetUpdatePictos = $objetRepository->find($idUpdate);

            if ($objetUpdatePictos) :

// OK ON A TROUVE UN ARTICLE POUR CET ID
    $titre                  = $objetUpdatePictos->getTitre();
    $description            = $objetUpdatePictos->getDescription();
    $prix                   = $objetUpdatePictos->getPrix();
    $image                  = $objetUpdatePictos->getImage();
    $categorie              = $objetUpdatePictos->getCategorie();

?>
    <H3>Modifier un article de la page Pictogrammes</H3>
    <form method="POST" enctype="multipart/form-data">
        <input type="text" name="titre" required placeholder="Nom du pictogramme" value="<?php echo $titre ?>">
        <textarea id="editor1" type="text" name="description" required placeholder="description" rows="30" value="<?php echo $description ?>"></textarea>
        <input type="text" name="prix" required placeholder="prix" value="<?php echo $prix ?>">
        <input type="text" name="image" placeholder="image" value="<?php echo $image ?>">
        <input type="text" name="categorie" placeholder="categorie" value="<?php echo $categorie ?>">

        <button type="submit">PUBLIER ARTICLE</button>
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

