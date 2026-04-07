<?php require  $_SERVER['DOCUMENT_ROOT'] . "/turismo-norte-espana/url-partes.php"; ?>

<?php require  "./../../data/data-localidad.php"; ?>

<?php require  "./variables-lugar-interes.php"; ?>


<?php define('LUGAR_MINUSCULA', strtolower(str_replace(' ', '-', LUGAR))) ?>
<?php define('COLOR_PAGE', "emerald"); ?>
<?php require $_SERVER['DOCUMENT_ROOT'] . "/turismo-norte-espana/localidades/carga-variables-generico-lugares-interes.php"; ?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <?php require PATH_RAIZ . "/_html/head/head-generico.php"; ?>
    </head>

    <body class="bg-<?= COLOR_PAGE; ?>-100">
        

        <!-- Header Section -->
        <header class="mb-1">
            <div class="bg-gradient-to-r from-<?= COLOR_PAGE; ?>-600 via-sky-100 to-<?= COLOR_PAGE; ?>-400 text-white text-center p-6 md:p-8 rounded-lg shadow-lg">
                <h1 class="text-2xl md:text-4xl font-bold mb-2 flex justify-center items-center gap-2">
                <i class="fas fa-map-marked-alt"></i> <?php /*LUGAR; */ ?>Lugares Insólitos
                </h1>
                <p class="text-base md:text-lg">En el corazón de <?= $localidad; ?>, <?= $region; ?>.</p>
            </div>
        </header>

        <div class="container-xxl py-4">
            <div class="row">
                <div class="col-xl-9 col-lg-8 col-md-8 col-sm-12 col-12">
                <?php require PATH_RAIZ . '/_estructura/semantica/body/main-generico.php'; ?>
                <?php //require PATH_RAIZ_LOCALIDAD_LUGARES_INTERES_BODY . '/main.php'; ?>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-4 d-none d-md-block sidebar-anuncios">
                            <?php // require PATH_RAIZ . '/_estructura/semantica/sidebar-playa.php'; ?>
                    <?php //require PATH_RAIZ . '/_estructura/publicidad/getYourGuide/index.php'; ?>    
                    <?php require PATH_RAIZ . '/_anuncios/get-your-guide/index.php'; ?>
                </div>

            </div>
        </div>

        <?php require PATH_RAIZ . "/_estructura/semantica/body/footer/footer-generico.php"; ?>

        <?php //require PATH_RAIZ_BLOQUES_ESTRUCTURA . "/anuncios/js/logica_anuncios.php"; ?>
        <?php //require PATH_RAIZ_BLOQUES_ESTRUCTURA . "/js_bootstrap/scripts-bootstrap.php"; Se encuentra con ___ borrar?>
        <?php //require PATH_RAIZ_LOCALIDAD_LUGARES_INTERES_PLAYAS_SCHEMAS_PLAYAS_NOMBRE_PLAYA . "/schemas-body.php"; ?>
        <?php require $_SERVER['DOCUMENT_ROOT'] . "/turismo-norte-espana/" .$region_minuscula. "/".$localidad_minuscula . "/lugares-interes/".$lugar_minuscula."/schemas/schemas-body.php"; ?>
    </body>
</html>