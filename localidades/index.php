<div class="row">
    <div id="#" class="col-xl-12 text-center col-lg-12 col-md-12 col-sm-12 col-12">
        <?php include 'presentacion.php'; ?>    
        <?php //require $publicidad; ?>
    
        <figure style="text-align: center;">
            <?php /*<a href="playa-de-<?= $archivo_name . '-' . $region; ?>" target="_blank">*/ ?>

            <a <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO. '/enlace-a-lugar-interes.php'; ?>target="_blank">
                <img src=  "<?= $region_minuscula . '/' .$localidad_minuscula. '/lugares-interes/' .$playa_name_minuscula; ?>/img/<?= $archivo_name .'-' .$region_minuscula ; ?>-1.jpg" alt="Imagen de <?= $playa_name; ?>" class="img-fluid">
                
            </a>
            <figcaption>Vista de la <?= $playa_name; ?></figcaption><?php //echo(PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG);?>
        </figure>
    </div>
</div>
<hr>


<?php //define('PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG',    PATH_HREF_RAIZ_LOCALIDAD. "/lugares-interes/".$lugar_minuscula."/img"); ?>
