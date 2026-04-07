<?php //h3 style="text-align: left;"><?= $localidad; </h3>?>

<p class="text-left text-justify text-gray-700 leading-relaxed mb-4">
    <?= $presentacion. ' '; ?><a 
        <?php if ($_SERVER['SERVER_NAME'] == "localhost") { ?>
                href="/turismo-norte-espana/<?= $region_minuscula; ?>/<?= $localidad_minuscula; ?>/lugares-interes/<?= $playa_name_minuscula.'/'; ?>"<?php
            } else { ?>
                href="/turismo-norte-espana/<?= $region_minuscula; ?>/<?= $localidad_minuscula; ?>/lugares-interes/<?= $playa_name_minuscula.'/' ?>"   <?php 
            }?>
        target="_blank" 
        class="inline-block text-blue-600 hover:text-blue-800 font-medium transition duration-200"> Más info...</a>
</p>
<?php //echo($pATH_HREF_RAIZ_LOCALIDADES_REGION_LOCALIDAD_LUGARES_INTERES_PLAYAS.'/index.php');?>
<!--<a href="<?= PATH_HREF_RAIZ ?>/ruta-costera-ostende"-->
