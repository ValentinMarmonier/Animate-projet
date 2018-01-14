<?php 




if ($objetRequest->get("afficher", "") == "update")
{
    require_once("$cheminTemplates/template-admin-kits-update.php");
}
else
{
    require_once("$cheminTemplates/template-admin-kit-create.php");
}

require_once("$cheminPart/admin-form-kits-read.php");
