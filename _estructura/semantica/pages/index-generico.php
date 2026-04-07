<?php define('LUGAR_MINUSCULA', strtolower(str_replace(' ', '-', LUGAR))) ?>
<?php define('COLOR_PAGE', "emerald"); ?>
<?php require $_SERVER['DOCUMENT_ROOT'] . "/turismo-norte-espana/localidades/carga-variables-generico-lugares-interes.php"; ?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <?php require PATH_RAIZ . "/_html/head/head-generico.php"; ?>
    </head>

    <body class="bg-<?= COLOR_PAGE; ?>-100">
        
        <?php require PATH_RAIZ . "/_estructura/semantica/body/header/header-generico.php"; ?>
        
        <?php require PATH_RAIZ . "/_estructura/semantica/body/header/post-header-generico.php"; ?>


        <?php require PATH_RAIZ . "/_estructura/semantica/body/footer/footer-generico.php"; ?>

        <?php //require PATH_RAIZ_BLOQUES_ESTRUCTURA . "/anuncios/js/logica_anuncios.php"; ?>
        <?php //require PATH_RAIZ_BLOQUES_ESTRUCTURA . "/js_bootstrap/scripts-bootstrap.php"; Se encuentra con ___ borrar?>
        <?php //require PATH_RAIZ_LOCALIDAD_LUGARES_INTERES_PLAYAS_SCHEMAS_PLAYAS_NOMBRE_PLAYA . "/schemas-body.php"; ?>
        <?php require $_SERVER['DOCUMENT_ROOT'] . "/turismo-norte-espana/" .$region_minuscula. "/".$localidad_minuscula . "/lugares-interes/".$lugar_minuscula."/schemas/schemas-body.php"; ?>
    </body>
</html>