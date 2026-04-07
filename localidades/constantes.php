
<?php define('SITE_VERIFICATION_CONTENT', "6fdc72f26c4563f937e32ff3def5f9d5"); ?>
<?php define('HOY', date('Y-m-d')); ?>
<?php define('PATH_HREF_CARPETA_LUGARES_INTERES', "/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/lugares-interes");?>

<?php define('PATH_HREF_RAIZ', "/turismo-norte-espana"); ?>
<?php define('PATH_HREF_RAIZ_REGION_LOCALIDAD', PATH_HREF_RAIZ.'/'.$region_minuscula.'/'.$localidad_minuscula); ?>
<?php //define('PATH_RAIZ', rtrim($_SERVER['DOCUMENT_ROOT'], '/') .'/'. PATH_HREF_RAIZ); ?>

<?php
if (!defined('PATH_RAIZ_BLOQUES')) {
    define('PATH_RAIZ_BLOQUES', PATH_RAIZ . '/bloques');
}
?>
<?php define('PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO',           PATH_RAIZ_BLOQUES. '/estructura/paginas-generico'); ?>
<?php define('PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO_HEAD',      PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO. "/head"); ?>

<?php
if (!defined('PATH_RAIZ_BLOQUES_ESTRUCTURA')) {
    define('PATH_RAIZ_BLOQUES_ESTRUCTURA', PATH_RAIZ . '/bloques');
}
?>




<?php define('PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_PLAYA_BODY_MAIN',    PATH_RAIZ_BLOQUES_ESTRUCTURA. '/paginas-playa/body/main'); ?>

<?php define('PATH_RAIZ_LOCALIDADES', PATH_RAIZ. '/localidades'); ?>
<?php define('PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN',    PATH_RAIZ_LOCALIDADES. "/_estructura/body/main"); ?>
<?php define('PATH_RAIZ_LOCALIDADES_CARPETA',                 PATH_RAIZ_LOCALIDADES. "/{$region_minuscula}/{$localidad_minuscula}"); ?>

<?php define('PATH_BLOQUES_SECTIONS_GENERICO',                          PATH_RAIZ_BLOQUES_ESTRUCTURA. '/sections_generico'); ?>
<?php define('PATH_BLOQUES_SECTIONS_CARRUSELES_CSV',  PATH_BLOQUES_SECTIONS_GENERICO. '/Carruseles_CSV'); ?>

<?php define('NAME_BLOG', "Guía Costera por el Cantábrico"); ?>
<?php define('AUTHOR', "Adrián Laya García"); ?>
<?php define('EMAIL_AUTHOR', "  ");?>


<?php define('PATH_HREF_RAIZ_LOCALIDADES', "https://playas2024.kesug.com/turismo-norte-espana/localidades"); ?>
