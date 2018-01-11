<?php
// ON RECUPERE LES URLS DES PAGES GRACE AU NOM DE LEUR ROUTE
$urlAccueil         = $this->generateUrl("accueil");
$urlProduits        = $this->generateUrl("produits");
$urlBlog            = $this->generateUrl("blog");
$urlBoutique        = $this->generateUrl("boutique");
$urlAdminLogin      = $this->generateUrl("adminLogin");
$urlEspaceAdmin     = $this->generateUrl("espaceAdmin");
$urlKit             = $this->generateUrl("kit");
$urlCategorie       = $this->generateUrl("categorieGlob");
$urlPictogramme     = $this->generateUrl("pictogramme");
$urlPanier          = $this->generateUrl("panier");
        // A SUPRIMER QUAND ADMIN OK !!!
$urlInscription             = $this->generateUrl("inscription");
?>
<!DOCTYPE html>
<!--[if lt IE 7]><html lang="fr-FR" prefix="og: http://ogp.me/ns#" class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html lang="fr-FR" prefix="og: http://ogp.me/ns#" class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html lang="fr-FR" prefix="og: http://ogp.me/ns#" class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html lang="fr-FR" prefix="og: http://ogp.me/ns#" class="no-js"><!--<![endif]-->

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="format-detection" content="telephone=no">

        <title>Animate&reg;, outil d&#039;aide à la communication et de rééducation</title>
        
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

        <!-- -->
        <meta name="description" content="Animate, outil de communication, de rééducation pour l&#039;autisme, la déficience intellectuelle, les troubles neuros-dégénératifs et des apprentissages" />
        <meta name="robots" content="noodp"/>
        <link rel="canonical" href="http://www.animate.fr/" />
        <meta property="og:locale" content="fr_FR" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="Animate&reg;, outil d&#039;aide à la communication et de rééducation" />
        <meta property="og:description" content="Structure unique de marketing pour piloter le développement du business et la montée en compétences des marques" />
        <meta property="og:url" content="http://www.animate.fr/" />
        <meta property="og:site_name" content="Animate | Outil de remédiation pour la prise en charge des troubles du langage et du comportement" />
        
        <!-- Google fonts -->
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css?family=Montserrat|Nunito" rel="stylesheet"> 
       
        <link rel="stylesheet" href="<?php echo $urlAccueil ?>assets/css/normalize.css">
        <link rel="stylesheet" href="<?php echo $urlAccueil ?>assets/css/style-index.css" type="text/css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
          <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
      
        
    </head>
    
    <body>
        
        <header id="site-header" class="" role="banner">
            <a href="https://www.animate.fr/">
                <img src="<?php echo $urlAccueil ?>assets/img/logo-nav.png" alt="Logo Animate | Outil de remédiation pour la prise en charge des troubles du langage et du comportement" class="default-logo" id="logo-nav" /> 
            </a>
            
        
            <!-- #site-navigation -->
            <nav id="site-navigation" class="nav" role="navigation">
                <div class="menu-container">
                    <ul id="menu-nav" class="menu">
                        <li class="">
                            <a href="<?php echo $urlAccueil ?>">Accueil</a>
                        </li>
                        <li class="">
                            <a href="<?php echo $urlProduits ?>">Produits</a>
                        </li>
                        <li class="">
                            <a href="<?php echo $urlBlog ?>">Blog</a>
                        </li>
                        <li class="">
                            <a href="<?php echo $urlBoutique ?>">Boutique</a>
                        </li>
                    </ul>           
                </div><!-- .menu-container -->
            </nav><!-- #site-navigation -->                   

        </header><!-- #site-header -->

        <main>