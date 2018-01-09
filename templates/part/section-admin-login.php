
    <div class="container">

      <form class="form-signin">
        
        <h2 class="form-signin-heading">Connectez-vous à votre espace administrateur</h2>
        
        <label for="inputEmail" class="sr-only">Email</label>
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Votre adresse email" required autofocus>
        
        <label for="inputPassword" class="sr-only">Mot de passe</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Votre mot de passe" required>
        
        <button class="btn btn-lg btn-primary btn-block" type="submit">Connexion</button>
        
        <input type="hidden" name="codebarre" value="login">

      </form>
     
<!--
<section>
                <h3>SECTION LOGIN</h3>
                <form method="POST" action="" class="formLogin">
                    <input type="email" name="email" required placeholder="VOTRE EMAIL">
                    <input type="password" name="password" required placeholder="VOTRE PASSWORD">
                    <button type="submit">LOGIN</button>
                    <input type="hidden" name="codebarre" value="login">
                    <div class="response">

-->






<?php
// TRAITER LE FORMULAIRE
// AVEC SYMFONY JE VAIS UTILISER UN OBJET DE LA CLASSE Request
if ($objetRequest->get("codebarre", "") == "login")
{
    $objetTraitementFormController = new App\Controller\TraitementFormController;
    $objetRepository = $this->getDoctrine()->getRepository(App\Entity\UserAdmin::class);

    $objetTraitementFormController->traiterLogin( $objetRequest, 
                                        $objetConnection, 
                                        $objetRepository, 
                                        $objetSession );
}

?>       
      
      
      

    </div> 
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    

    
  </body>

<!--

</html>



</div>
                </form>
            </section>
