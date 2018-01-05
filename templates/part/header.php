<?php

// JE RECUPERE LES URLS DES PAGES GRACE AU NOM DE LEUR ROUTE
$urlAccueil         = $this->generateUrl("accueil");
$urlAdminLogin      = $this->generateUrl("adminLogin");
$urlEspaceAdmin     = $this->generateUrl("espaceAdmin");
$urlKit             = $this->generateUrl("kit");
$urlCategorie       = $this->generateUrl("categorieGlob");
$urlPictogramme     = $this->generateUrl("pictogramme");

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>MON SITE SYMFONY</title>
        <link rel="stylesheet" href="<?php echo $urlAccueil ?>assets/css/style.css" type="text/css" />
        

    </head>
    <body>
        <header>
            <h1>Site Animate</h1>
            <nav>
                <ul>
                    <li><a href="<?php echo $urlAccueil ?>">Accueil</a></li>
                    <li><a href="<?php echo $urlAdminLogin ?>">Admin Login</a></li>
                    <li><a href="<?php echo $urlEspaceAdmin ?>">Espace admin</a></li>
                    <li><a href="<?php echo $urlKit ?>">Page Kits</a></li>
                    <li><a href="<?php echo $urlPictogramme ?>">Page Picto</a></li>

                </ul>
            </nav>
        </header>
        <main>
            

<?php

// ON RECUPERE LES URLS DES PAGES GRACE AU NOM DE LEUR ROUTE
$urlAccueil         = $this->generateUrl("accueil");
$urlproduits        = $this->generateUrl("produits");
$urlBlog            = $this->generateUrl("blog");
$urlBoutique        = $this->generateUrl("boutique");
$urlAdminLogin      = $this->generateUrl("adminLogin");
$urlEspaceAdmin     = $this->generateUrl("espaceAdmin");
$urlKit             = $this->generateUrl("kit");
$urlCategorie       = $this->generateUrl("categorieGlob");
$urlPictogramme     = $this->generateUrl("pictogramme");

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

        <!-- POUR DISPOSER DU CHEMIN ABSOLU A PARTIR DE LA PAGE Accueil -->
        
        <link rel="stylesheet" href="css/style-index.css" type="text/css" />
        
       
        <meta name="description" content="Animate, outil de communication, de rééducation pour l&#039;autisme, la déficience intellectuelle, les troubles neuros-dégénératifs et des apprentissages" />
        <meta name="robots" content="noodp"/>
        <link rel="canonical" href="http://www.animate.fr/" />
        <meta property="og:locale" content="fr_FR" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="Animate&reg;, outil d&#039;aide à la communication et de rééducation" />
        <meta property="og:description" content="Structure unique de marketing pour piloter le développement du business et la montée en compétences des marques" />
        <meta property="og:url" content="http://www.animate.fr/" />
        <meta property="og:site_name" content="Animate | Outil de remédiation pour la prise en charge des troubles du langage et du comportement" />
    </head>
    
    <body>
        
        <header id="site-header" class="" role="banner">
            <a href="https://www.animate.fr/">
                <img src="img/logo-nav.png" alt="Logo Animate | Outil de remédiation pour la prise en charge des troubles du langage et du comportement" class="default-logo" id="logo-nav" /> 
            </a>                    
        
            <!-- #site-navigation -->
            <nav id="site-navigation" class="from-top" role="navigation">
                <div class="menu-container">
                    <ul id="menu-nav" class="menu">
                        <li class="">
                            <a href="accueil">Accueil</a>
                        </li>
                        <li class="">
                            <a href="produits">Produits</a>
                        </li>
                        <li class="">
                            <a href="blog">Blog</a>
                        </li>
                        <li class="">
                            <a href="boutique">Boutique</a>
                        </li>
                    </ul>           
                </div><!-- .menu-container -->
            </nav><!-- #site-navigation -->                   

        </header><!-- #site-header -->

        <main>
        </main>


 

        
