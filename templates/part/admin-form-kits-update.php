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
$objetRepository = $this->getDoctrine()->getRepository(App\Entity\MonArticle::class);
// http://www.doctrine-project.org/api/orm/2.5/class-Doctrine.ORM.EntityRepository.html
$objetArticleUpdate = $objetRepository->find($idUpdate);

            if ($objetArticleUpdate) :

// OK ON A TROUVE UN ARTICLE POUR CET ID
$titre      = $objetArticleUpdate->getTitre();
$categorie  = $objetArticleUpdate->getCategorie();
$contenu    = $objetArticleUpdate->getContenu();

?>
    <H3>FORMULAIRE UPDATE article</H3>
    <form method="POST" enctype="multipart/form-data">
        <input type="text" name="titre" required placeholder="TITRE" value="<?php echo $titre ?>">
        <input type="text" name="categorie" required placeholder="CATEGORIE" value="<?php echo $categorie ?>">
        <textarea id="editor1" type="text" name="contenu" required placeholder="CONTENU" rows="30"><?php echo $contenu ?></textarea>
        <input type="file" name="cheminImage">
        <button type="submit">MODIFIER ARTICLE</button>
        <input type="hidden" name="afficher" value="update">
        <input type="hidden" name="idUpdate" value="<?php echo $idUpdate ?>">
        <input type="hidden" name="codebarre" value="update">
        <div class="response">
<?php echo $messageUpdate ?>
        </div>
    </form>
</section>
            <?php endif; ?>
