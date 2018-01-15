<!doctype html>

<?php

$urlAccueil         = $this->generateUrl("accueil");
$urlEspaceAdmin     = $this->generateUrl("espaceAdmin");
$urlAdminKit        = $this->generateUrl("adminKit");
$urlAdminBlog       = $this->generateUrl("adminBlog");
$urlAdminPicto      = $this->generateUrl("adminPicto");


$urlLogout          = $this->generateUrl("logout");




?>





<!doctype html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">



  <meta name="description" content="">
  <meta name="author" content="">
    
<!-- BALISE META POUR NE PAS INDEXER L'INTERFACE ADMIN -->
  <meta name="robots" content="noindex">
    
    
    <link rel="icon" href="../../../../favicon.ico">
    <link rel="stylesheet" href="<?php echo $urlAccueil ?>assets/css/style-admin.css" type="text/css" />
    
        <title>Administrateur Animate</title>


    <header>
      <nav class="navbar navbar-inverse navbar-static-top">
        <a class="navbar-brand" href="<?php echo $urlEspaceAdmin?>">Espace Administrateur Animate</a>
        
        <a class="navbar-brand col-lg-offset-9" href="<?php echo $urlLogout?>"><button type="button" class="btn btn-info">Déconnexion</button></a>

        </nav>
        
    </header>
    
 <div class="container-fluid">
      <div class="row">    
        <nav class="col-sm-3 col-md-2 hidden-xs-down bg-faded sidebar">
          
          <ul class="nav nav-pills flex-column">
            
            <li class="nav-item">
              <a class="nav-link" href="<?php echo $urlAdminKit?>" id="btn-kits">Page Kits</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="<?php echo $urlAdminPicto?>" id="btn-pictos">Page Pictogrammes</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="<?php echo $urlAdminBlog?>" id="btn-blog">Blog</a>
            </li>
            
            
            
          </ul>
          
        </nav>
      
  