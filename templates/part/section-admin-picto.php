<?php 


require_once("$cheminPart/admin-form-pictos-read.php");

if ($objetRequest->get("afficher", "") == "update")
{
    require_once("$cheminTemplates/template-admin-pictos-update.php");
}
else
{
    require_once("$cheminTemplates/template-admin-pictos-create.php");
}


