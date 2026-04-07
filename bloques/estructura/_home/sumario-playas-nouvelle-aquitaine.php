<?php $targeta = PATH_RAIZ_LOCALIDADES.'/index.php';?>
<?php $publicidad = './bloques/estructura/sections_generico/Carruseles_CSV/prueba_sneakers.php'; ?>


<?php $region = 'Nouvelle Aquitaine'; $region_minuscula = strtolower(str_replace(' ', '-', $region));?>
<h2 id="nouvelle_aquitaine" class="text-2xl md:text-3xl font-bold text-center text-<?= COLOR_PAGE; ?>-800 mb-6"><?= $region; ?></h2>


<?php $localidad = 'Saint Jean de Luz'; $localidad_minuscula = strtolower(str_replace(' ', '-', $localidad));?>
<?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_HOME . '/body/localidad-generico.php'; ?>


<div class="container my-4">
  <div class="row">
        <?php 
            $playa_name = 'Grande Plage'; $localidad_minuscula = strtolower(str_replace(' ', '-', $localidad)); 
            $archivo_name = 'grande-plage-saint-jean-de-luz'; 
            $presentacion = 'La Grande Plage de Saint-Jean-de-Luz, situada en Saint-Jean-de-Luz, Nueva Aquitania, 
            es una amplia playa urbana de arena fina protegida por la bahía del mar Cantábrico. Muy apreciada por familias y bañistas gracias a sus aguas tranquilas, 
            combina un paseo marítimo animado con servicios completos como duchas, socorrismo y zonas de ocio. 
            Su proximidad al centro histórico y su entorno pintoresco ofrecen un equilibrio perfecto entre ambiente costero y encanto vasco-francés para quienes desean disfrutar del litoral en un marco único.';
            ?>

            <?php $pATH_HREF_RAIZ_LOCALIDADES_REGION_LOCALIDAD_LUGARES_INTERES_PLAYAS = "/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/lugares-interes/playas/{$localidad_minuscula}"; ?>

            <div class="col-12 col-md-12 mb-4">
            <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_HOME . '/body/card-playa.php'; ?>
            </div>
        </div>
</div>

<?php $localidad = 'Biarritz'; $localidad_minuscula = strtolower(str_replace(' ', '-', $localidad));?>
<?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_HOME . '/body/localidad-generico.php'; ?>

<div class="container my-4">
  <div class="row">
        <?php 
        $playa_name = 'Grande Plage'; $localidad_minuscula = strtolower(str_replace(' ', '-', $localidad)); 
        $archivo_name = 'grande-plage'; 
        $presentacion = 'La Grande Plage de Biarritz, situada en Biarritz, Nueva Aquitania, 
        es una emblemática playa urbana de arena dorada abierta al mar Cantábrico. Popular entre surfistas y bañistas, 
        combina un ambiente elegante con servicios completos como duchas, vigilancia y zonas de restauración. 
        Rodeada de edificios históricos y con un animado paseo marítimo, ofrece un equilibrio perfecto entre glamour, ocio y naturaleza para quienes desean descubrir la costa vasco-francesa.';
        ?>

        <?php $pATH_HREF_RAIZ_LOCALIDADES_REGION_LOCALIDAD_LUGARES_INTERES_PLAYAS = "/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/lugares-interes/playas/{$localidad_minuscula}"; ?>

        <div class="col-12 col-md-12 mb-4">
        <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_HOME . '/body/card-playa.php'; ?>
        </div>

    </div>    
</div>


<?php $localidad = 'Capbreton'; $localidad_minuscula = strtolower(str_replace(' ', '-', $localidad));?>
<?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_HOME . '/body/localidad-generico.php'; ?>

<div class="container my-4">
  <div class="row">
        <?php 
        $playa_name = 'Plage Centrale'; $playa_name_minuscula = strtolower(str_replace(' ', '-', $playa_name));
        $localidad_minuscula = strtolower(str_replace(' ', '-', $localidad)); 
        $archivo_name = 'plage-centrale-capbreton'; 
        $presentacion = 'La Plage Centrale de Capbreton, situada en Capbreton, Nueva Aquitania, 
        es una extensa playa de arena fina que se abre al océano Atlántico, ideal para surfistas y amantes del sol. 
        Ofrece servicios completos como duchas, vigilancia y escuelas de surf, además de un paseo marítimo animado con bares y restaurantes. 
        Su ubicación junto al puerto y al centro urbano la convierte en un lugar perfecto para combinar deporte, ocio y relax en la costa de Las Landas.';
        ?>

        <?php $pATH_HREF_RAIZ_LOCALIDADES_REGION_LOCALIDAD_LUGARES_INTERES_PLAYAS = "/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/lugares-interes/playas/{$localidad_minuscula}"; ?>

        <div class="col-12 col-md-12 mb-4"><?php echo($localidad_minuscula);?>
        <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_HOME . '/body/card-playa.php'; ?>
        </div>

    </div>    
</div>


<?php $localidad = 'Hendaia'; $localidad_minuscula = strtolower(str_replace(' ', '-', $localidad));?>
<?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_HOME . '/body/localidad-generico.php'; ?>
<div class="container my-4">
  <div class="row">
        <?php 
        $playa_name = 'Playa de Ondarraitz'; $playa_name_minuscula = strtolower(str_replace(' ', '-', $playa_name));
        $localidad_minuscula = strtolower(str_replace(' ', '-', $localidad)); 
        $archivo_name = 'ondarraitz'; 
        $presentacion = 'La Playa de Ondarraitz, situada en Hendaya, Nueva Aquitania, 
        es un extenso arenal de más de tres kilómetros, perfecto para pasear, practicar deportes acuáticos y disfrutar en familia. 
        Sus aguas tranquilas y su fina arena dorada la convierten en un destino ideal para el baño y el descanso. 
        Cuenta con todos los servicios necesarios, como duchas, vigilancia y zonas de ocio, y su cercanía al casco urbano ofrece un acceso cómodo y un ambiente animado junto a la frontera con España.';
        ?>

        <?php $pATH_HREF_RAIZ_LOCALIDADES_REGION_LOCALIDAD_LUGARES_INTERES_PLAYAS = "/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/lugares-interes/playas/{$localidad_minuscula}"; ?>

        <div class="col-12 col-md-12 mb-4">
        <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_HOME . '/body/card-playa.php'; ?>
        </div>

    </div>    
</div>

<div class="row">
    <div id="#" class="col-xl-12 text-center col-lg-12 col-md-12 col-sm-12 col-12">  
        <?php require $publicidad; ?>
    </div>
</div>
