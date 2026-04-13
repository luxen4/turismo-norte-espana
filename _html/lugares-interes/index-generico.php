<?php require  $_SERVER['DOCUMENT_ROOT'] . "/turismo-norte-espana/url-partes.php"; ?>

<?php require  "./../../data/data-localidad.php"; ?>

<?php require  "./variables-lugar-interes.php"; ?>


<?php define('LUGAR_MINUSCULA', strtolower(str_replace(' ', '-', LUGAR))) ?>
<?php define('COLOR_PAGE', "<?= COLOR_PAGE; ?>"); ?>
<?php require $_SERVER['DOCUMENT_ROOT'] . "/turismo-norte-espana/_html/lugares-interes/variables-generico.php"; ?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <?php require PATH_RAIZ . "/_html/head/head-generico.php"; ?>
    </head>

    <body class="bg-<?= COLOR_PAGE; ?>-100">

      
<header class="mb-1">

    <!-- Navegación -->
    <?php require PATH_RAIZ . "/_html/body/navbar-generico.php"; ?>


</header>

        <div class="container-xxl py-1">
            <div class="row">
                <div class="col-xl-9 col-lg-8 col-md-8 col-sm-12 col-12">
                    <?php require PATH_RAIZ . '/_html/lugares-interes/main-generico.php'; ?>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-4 d-none d-md-block sidebar-anuncios">
                    <?php require PATH_RAIZ . '/_anuncios/get-your-guide/index.php'; ?>
                </div>
            </div>
        </div>

        <?php require PATH_RAIZ . "/_html/body/footer/footer-generico.php"; ?>

        <?php require $_SERVER['DOCUMENT_ROOT'] . "/turismo-norte-espana/" .$region_minuscula. "/".$localidad_minuscula . "/lugares-interes/".$lugar_interes."/schemas/schemas-body.php"; ?>
    </body>
</html>