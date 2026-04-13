<?php define('LOCALIDAD', $localidad); ?> <?php define('LOCALIDAD_MINUSCULA', strtolower(str_replace(' ', '-', $localidad))); ?> 
<?php define('REGION', $region); ?>
<?php define('TITLE', LOCALIDAD. " – Turismo y Naturaleza en ".REGION. " 2025"); ?>
<?php define('LUGAR', LOCALIDAD); ?> 
<?php define('LUGAR_MINUSCULA', strtolower(str_replace(' ', '-', LUGAR))) ?>
<?php define('COLOR_PAGE', "sky"); ?>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/turismo-norte-espana/_utilidades/defines.php"; ?>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/turismo-norte-espana/". $region_minuscula. "/".$localidad_minuscula . "/head/variables/meta_tags.php"; ?>

<?php require PATH_RAIZ . "/{$region_minuscula}/{$localidad_minuscula}/head/variables/data-generico.php";  ?>
<?php require $_SERVER['DOCUMENT_ROOT'] . "/turismo-norte-espana/". $region_minuscula. "/".$localidad_minuscula . "/head/variables/data-generico.php";  ?>





<?php /*
$localidad = 'Baiona'; // Para francés, normalmente "Bayonne" pero si usas Baiona en español, mantén aquí
$localidad_minuscula = strtolower(
    str_replace(
        ['ñ', 'Ñ', ' '], 
        ['n', 'n', '-'], 
        $localidad
    )
);

$region = 'Nouvelle Aquitaine';
$region_minuscula = strtolower(
    str_replace(
        ['ñ', 'Ñ', ' '], 
        ['n', 'n', '-'], 
        $region
    )
);  */ ?>