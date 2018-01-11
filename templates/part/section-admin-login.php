
            <section>
                <h3>Connectez-vous à votre espace administrateur AniMate</h3>
                <form method="POST" action="">
                    <input type="email" name="email" required placeholder="VOTRE EMAIL">
                    <input type="password" name="password" required placeholder="VOTRE PASSWORD">
                    <button type="submit">Connexion</button>
                    <input type="hidden" name="codebarre" value="login">
                    
<?php
// TRAITER LE FORMULAIRE
// AVEC SYMFONY JE VAIS UTILISER UN OBJET DE LA CLASSE Request
// FOURNI PAR SYMFONY QUAND JE RAJOUTE LE PARAMETRE DANS MA METHODE contact
if ($objetRequest->get("codebarre", "") == "login")
{
    $objetTraitementForm = new App\Controller\TraitementFormController;
    $objetRepository = $this->getDoctrine()->getRepository(App\Entity\UserAdmin::class);

    $objetTraitementForm->traiterLogin( $objetRequest, 
                                        $objetConnection, 
                                        $objetRepository, 
                                        $objetSession );
}

?>
                    
                </form>
            </section>
