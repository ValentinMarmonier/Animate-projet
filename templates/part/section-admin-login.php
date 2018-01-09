
<!doctype html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">



    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    
    <title>Espace administrateur Animate</title>

    
    <link href="../../../../dist/css/bootstrap.min.css" rel="stylesheet">

    
    <link href="signin.css" rel="stylesheet">
  </head>

  <body>

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
    $objetTraitementForm = new App\Controller\TraitementFormController;
    $objetRepository = $this->getDoctrine()->getRepository(App\Entity\UserAdmin::class);

    $objetTraitementForm->traiterLogin( $objetRequest, 
                                        $objetConnection, 
                                        $objetRepository, 
                                        $objetSession );
}

?>       
      
      
      

    </div> 
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    

    
  </body>
</html>



</div>
                </form>
            </section>
