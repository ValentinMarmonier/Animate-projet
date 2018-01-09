<section id="section-update-kits">
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
    $objetFormAdmin->update($objetRequest, $objetConnection, $objetEntityManager, $cheminSymfony, $objetSession);
}

$messageUpdate = ob_get_clean();

?>
<?php

// RECUPERER L'ID DE LA LIGNE A MODIFIER
$idUpdate = $objetRequest->get("idUpdate", 0);
// RECUPERER LES AUTRES INFOS POUR PRE-REMPLIR LE FORMULAIRE
$objetRepository = $this->getDoctrine()->getRepository(App\Entity\Kits::class);
// http://www.doctrine-project.org/api/orm/2.5/class-Doctrine.ORM.EntityRepository.html
$objetUpdateKits = $objetRepository->find($idUpdate);

            if ($objetUpdateKits) :

// OK ON A TROUVE UN ARTICLE POUR CET ID
    $nomKit                 = $objetKits->getNomKit();
    $description            = $objetKits->getDescription();
    $contenuKit             = $objetKits->getContenuKit();
    $infoComplementaire     = $objetKits->getinfoComplementaire();
    $prix                   = $objetKits->getPrix();
    $image                  = $objetKits->getImage();
    $categorie              = $objetKits->getCategorie();

?>
    <H3>Modifier un article de la page Kits</H3>
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

    </form>
    
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

