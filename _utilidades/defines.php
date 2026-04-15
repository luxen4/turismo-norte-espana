<?php define('DOMINIO', "https://alayag82.kesug.com"); ?>

<?php define('NAME_BLOG', "Turismo Norte de España"); ?>
<?php define('AUTHOR', "Adrián Laya García"); ?>
<?php define('TURISMO_NORTE_ESPANA', 'Turismo Norte de España'); ?>
<?php define('WEB_PAGE', "website"); ?>
<?php define('EMAIL_AUTHOR', "superlaya50@gmail.com");?>
<?php define('HOY', date('Y-m-d')); ?>
<?php define('IDIOMA_LOCAL', 'es_ES'); ?>

<?php define('SITE_VERIFICATION_CONTENT', "6fdc72f26c4563f937e32ff3def5f9d5"); ?>

<?php define('NOMBRE_PROYECTO', 'turismo-norte-espana'); ?>
<?php define('SUMARY_LARGE_IMAGE', 'sumary_large_image'); ?>
<?php define('CARD_SITE', '@laya_garcia'); ?>

<?php define('PATH_DOMINIO_RAIZ', DOMINIO . '/'.NOMBRE_PROYECTO); ?>
<?php define('PATH_DOMINIO_RAIZ_LOCALIDADES', PATH_DOMINIO_RAIZ . '/'); ?>

<?php define('PATH_DOMINIO_LUGAR_IMAGEN_1', PATH_DOMINIO_RAIZ_LOCALIDADES . "$region_minuscula/$localidad_minuscula/lugares-interes/" . $lugar_minuscula . "/img/" . $lugar_minuscula . "-{$localidad_minuscula}-{$region_minuscula}-1.jpg"); ?>

<?php define('PATH_DOMINIO_LUGAR_INTERES_INDEX', PATH_DOMINIO_RAIZ . "/$region_minuscula/$localidad_minuscula/lugares-interes/" . LUGAR_MINUSCULA ."/"); ?>

<?php
if (!empty($lugar_interes)) {
    define(
        'PATH_DOMINIO_URL',
        PATH_DOMINIO_RAIZ_LOCALIDADES . "$region_minuscula/$localidad_minuscula/lugares-interes/" . LUGARMINUSCULA. "/"
    );
} else {
    define(
        'PATH_DOMINIO_URL',
        PATH_DOMINIO_RAIZ_LOCALIDADES . "$region_minuscula/$localidad_minuscula/"
    );
}
?>

<?php define('PATH_DOMINIO_RAIZ_LOCALIDADES_REGION_LOCALIDAD', PATH_DOMINIO_RAIZ_LOCALIDADES .$region_minuscula.'/'.$localidad_minuscula); ?>
<?php define('PATH_DOMINIO_RAIZ_LOCALIDADES_REGION_LOCALIDAD_LUGARES_INTERES', PATH_DOMINIO_RAIZ_LOCALIDADES_REGION_LOCALIDAD ."/lugares-interes/".$lugar_minuscula); ?>
<?php define('PATH_DOMINIO_RAIZ_LOCALIDADES_REGION_LOCALIDAD_LUGARES_INTERES_IMG', PATH_DOMINIO_RAIZ_LOCALIDADES_REGION_LOCALIDAD_LUGARES_INTERES .'/img'); ?>

<?php define('PATH_RAIZ', rtrim($_SERVER['DOCUMENT_ROOT'], '/') . '/turismo-norte-espana'); ?>
<?php define('PATH_RAIZ_HOME_HEAD_VARIABLES', PATH_RAIZ. '/home/head/variables'); ?>

   
<?php define('PATH_RAIZ_BLOQUES',                                       PATH_RAIZ. '/bloques'); ?> 
<?php define('PATH_RAIZ_BLOQUES_CONTROL',              PATH_RAIZ_BLOQUES . '/control'); ?>
<?php define('PATH_RAIZ_BLOQUES_ESTRUCTURA',           PATH_RAIZ_BLOQUES. '/estructura'); ?>

<?php define('PATH_BLOQUES_SECTIONS_GENERICO',                          PATH_RAIZ_BLOQUES_ESTRUCTURA. '/sections_generico'); ?>

<?php define('PATH_RAIZ_BLOQUES_ESTRUCTURA_HOME',           PATH_RAIZ_BLOQUES. '/estructura/_home'); ?>
<?php define('PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO',           PATH_RAIZ_BLOQUES. '/estructura/paginas-generico'); ?>
<?php define('PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_PLAYA_HEAD',         PATH_RAIZ_BLOQUES_ESTRUCTURA. '/paginas-playa/head'); ?>

<?php define('PATH_RAIZ_LOCALIDADES', PATH_RAIZ. '/localidades'); ?>
<?php define('PATH_RAIZ_LOCALIDADES_CARPETA',                           PATH_RAIZ_LOCALIDADES. "/{$region_minuscula}/{$localidad_minuscula}"); ?>

<?php define('PATH_HREF_RAIZ', "/turismo-norte-espana"); ?>

<?php define('PATH_HREF_CARPETA_LUGARES_INTERES', "/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/lugares-interes");?>
<?php define('PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES', PATH_HREF_CARPETA_LUGARES_INTERES. "/".$lugar_minuscula."/img"); ?>
          
<?php define('PATH_BLOQUES_SECTIONS_CARRUSELES_CSV',  PATH_BLOQUES_SECTIONS_GENERICO. '/Carruseles_CSV'); ?>

<?php define('PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN',    PATH_RAIZ_LOCALIDADES. "/_estructura/body/main"); ?>