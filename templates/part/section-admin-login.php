<?php

$urlLogout = $this->generateUrl("logout");

?>


<div>
    <a href="<?php echo $urlLogout?>">Déconnexion</a>
</div>

            <div class="container">

      <form class="form-signin">
        <h2 class="form-signin-heading">Connectez-vous à votre espace administrateur</h2>
        
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="text" name="pseudo" id="inputEmail" class="form-control" placeholder="Votre nom de compte" required autofocus>
        
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Votre mot de passe" required>
        
        
        <button class="btn btn-lg btn-primary btn-block" type="submit">Connexion</button>
        
        <input type="hidden" name="codebarre" value="loginAdmin"/>
      
      </form>
      

    </div> <!-- /container -->
    
    


<?php
// TRAITER LE FORMULAIRE
// AVEC SYMFONY JE VAIS UTILISER UN OBJET DE LA CLASSE Request
// FOURNI PAR SYMFONY QUAND JE RAJOUTE LE PARAMETRE DANS MA METHODE contact
if ($objetRequest->get("codebarre", "") == "loginAdmin")
{
    $objetTraitementForm = new App\Controller\TraitementFormController;
    $objetRepository = $this->getDoctrine()->getRepository(App\Entity\UserAdmin::class);

    $objetTraitementForm->traiterLogin( $objetRequest, 
                                        $objetConnection, 
                                        $objetRepository, 
                                        $objetSession );
}





?>
