
            <section>
                <h3>SECTION INSCRIPTION</h3>
                <form method="POST" action="">
                    <input type="text" name="pseudo" required placeholder="VOTRE PSEUDO">
                    <input type="password" name="password" required placeholder="VOTRE PASSWORD">
                    <button type="submit">INSCRIPTION</button>
                    <input type="hidden" name="codebarre" value="inscription">
                    <div class="response">
<?php
// TRAITER LE FORMULAIRE
// AVEC SYMFONY JE VAIS UTILISER UN OBJET DE LA CLASSE Request
// FOURNI PAR SYMFONY QUAND JE RAJOUTE LE PARAMETRE DANS MA METHODE contact
if ($objetRequest->get("codebarre", "") == "inscription")
{
    $objetTraitementForm = new App\Controller\TraitementFormController;
    $objetTraitementForm->traiterInscription($objetRequest, $objetConnection);
}

?>
                    </div>
                </form>
            </section>
