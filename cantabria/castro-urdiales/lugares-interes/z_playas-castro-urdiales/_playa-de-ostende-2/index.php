
<?php // Variables para la página de la Playa de Ostende ?>
<?php $region_minuscula = 'cantabria'; $localidad_minuscula = 'playa-de-ostende'; lugar_minuscula='playa-de-ostende'; 
lugar_minuscula_footer='Playa de Ostende -Castro-Urdiales-';
COLOR_PAGE='blue';
$title = 'Playa de Ostende – Castro-Urdiales';?>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/turismo-norte-espana/bloques/estructura/variables_comunes/defines.php"; ?>
<?php require PATH_RAIZ_LOCALIDADES_CARPETA_HEAD_VARIABLES. "/localizacion-playa.php"; ?>

<?php require PATH_RAIZ_LOCALIDADES_CARPETA_HEAD_VARIABLES. "/meta-tags.php";      // Variables de etiquetas metarequire PATH_RAIZ_BLOQUES_ESTRUCTURA . "/paginas-generico/etiquetas-meta.php"; ?>
<?php require PATH_RAIZ_LOCALIDADES_CARPETA_HEAD_VARIABLES. "/data-generico.php";  // Variables para el archivo Structured_data_generico.php //<!-- Structured Data (Schema.org) -->    ?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO_HEAD. "/etiquetas-meta.php";?>
        <?php require PATH_RAIZ . "/_html/head/links-generico.php"; ?>
        <title><?= $title; ?></title>
    </head>

    <body>
        <?php require PATH_RAIZ_LOCALIDADES_CARPETA. '/img/index.php'; ?>
        <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_PLAYA_BODY. "/body-generico-playa.php"; ?>
                                                        <?php //require PATH_RAIZ_BLOQUES_ESTRUCTURA. "/recarga_pagina_amigable.php"; ?>

        <?php require PATH_RAIZ_BLOQUES. "/control/control-visitas.php"; ?>
    </body>

</html>


<?php /*
    <!-- Estilo opcional para fondo -->
    <style>
        body {
            background-image: url('./../../../arenaplaya.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
    </style> */ ?>