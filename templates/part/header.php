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
