<?php 




if ($objetRequest->get("afficher", "") == "update")
{
    require_once("$cheminTemplates/template-admin-blog-update.php");
}
else
{
    require_once("$cheminTemplates/template-admin-blog-create.php");
}


require_once("$cheminPart/admin-form-blog-read.php");