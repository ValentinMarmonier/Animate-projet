
<section>
    <h3>SECTION ACCUEIL</h3>
</section>

<section>
    <h3> Formulaire ne newsletter</h3>
    <form method="GET" action="">
        <input type="email" name="email" require placeholder="Votre email"/>
        <button>Inscription</button>
        <input type="hidden" name="codebarre" value="newsletter"/>
        
        <div class="response">
            
<?php

if($objetRequest->get("codebarre","") == "newsletter")
{
    $objetTraitementForm = new App\Controller\TraitementForm;
    $objetTraitementForm->traiterNewsletter();
}

?>
            
        </div>
        
    </form>
</section>
    