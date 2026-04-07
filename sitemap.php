<?php
header("Content-Type: application/xml; charset=UTF-8");
$baseUrl = "http://alayag82.kesug.com/turismo-norte-espana";
$fechaHoy = date("Y-m-d");
echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <?php 
    $region_minuscula = "bizkaia";
    $localidad_minuscula = "plentzia";
    $lugares_interes = "lugares-interes"; ?>
    <?php $ruta= $baseUrl."/".$region_minuscula."/".$localidad_minuscula."/".$lugares_interes; ?>
    
    <url>
        <loc><?= $baseUrl ?>/bizcaia/plentzia/</loc>
        <lastmod><?= $fechaHoy ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>

    <url>
        <loc><?= $ruta ?>/playa-de-gorliz/</loc>
        <lastmod><?= $fechaHoy ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>

    <url>
        <loc><?= $ruta ?>/playa-de-plentzia/</loc>
        <lastmod><?= $fechaHoy ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>

    <url>
        <loc><?= $ruta ?>/puerto-deportivo/</loc>
        <lastmod><?= $fechaHoy ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>
        
    <url>
        <loc><?= $ruta ?>/ruta-senderista-plentzia-gorliz/</loc>
        <lastmod><?= $fechaHoy ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>
        

        
 
        
    <?php 
    $region_minuscula = "bizkaia";
    $localidad_minuscula = "sopelana";
    $lugares_interes = "lugares-interes"; ?>
    <?php $ruta= $baseUrl."/".$region_minuscula."/".$localidad_minuscula."/".$lugares_interes; ?>
    
    <url>
        <loc><?= $baseUrl ?>/bizcaia/sopelana/</loc>
        <lastmod><?= $fechaHoy ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>

    <url>
        <loc><?= $ruta ?>/parque-kortezubi/</loc>
        <lastmod><?= $fechaHoy ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>

    <url>
        <loc><?= $ruta ?>/mirador-de-arrietara/</loc>
        <lastmod><?= $fechaHoy ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>

    <url>
        <loc><?= $ruta ?>/playa-de-arrietara/</loc>
        <lastmod><?= $fechaHoy ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>
        
    <url>
        <loc><?= $ruta ?>/ruta-senderista-sopelana-plentzia/</loc>
        <lastmod><?= $fechaHoy ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>











    <?php 
    $region_minuscula = "cantabria";
    $localidad_minuscula = "ajo";
    $lugares_interes = "lugares-interes"; ?>
    <?php $ruta= $baseUrl."/".$region_minuscula."/".$localidad_minuscula."/".$lugares_interes; ?>
    
    <url>
        <loc><?= $baseUrl ?>/cantabria/ajo/</loc>
        <lastmod><?= $fechaHoy ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>

    <url>
        <loc><?= $baseUrl ?>/cantabria/ajo/lugares-interes/acantilados-de-cabo-de-ajo/</loc>
        <lastmod><?= $fechaHoy ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>

    <url>
        <loc><?= $ruta ?>/acantilados-de-cabo-de-ajo/</loc>
        <lastmod><?= $fechaHoy ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>

    <url>
        <loc><?= $ruta ?>/faro-de-cabo-de-ajo/</loc>
        <lastmod><?= $fechaHoy ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>
        
    <url>
        <loc><?= $ruta ?>/playa-de-antuerta/</loc>
        <lastmod><?= $fechaHoy ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>
        
    <url>
        <loc><?= $ruta ?>/playa-de-cuberris/</loc>
        <lastmod><?= $fechaHoy ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    
    </url>
        
    <url>
        <loc><?= $ruta ?>/ruta-de-la-costa-oriental/</loc>
        <lastmod><?= $fechaHoy ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>
        
    <url>
        <loc><?= $ruta ?>/z_mirador-del-cabo/</loc>
        <lastmod><?= $fechaHoy ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>

    <?php $localidad_minuscula = "castro-urdiales"; ?>
    <?php $ruta= $baseUrl."/".$region_minuscula."/".$localidad_minuscula."/".$lugares_interes; ?>
    <url>
        <loc><?= $baseUrl ?>/cantabria/castro-urdiales/</loc>
        <lastmod><?= $fechaHoy ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>

    <url>
        <loc><?= $ruta; ?>/asador-la-perla/</loc>
        <lastmod><?= $fechaHoy ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>

    <url>
        <loc><?= $ruta ?>/castillo-de-santa-ana/</loc>
        <lastmod><?= $fechaHoy ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>

    <url>
        <loc><?= $ruta ?>/club-nautico/</loc>
        <lastmod><?= $fechaHoy ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>
        
    <url>
        <loc><?= $ruta ?>/iglesia-santa-maria-de-la-asuncion/</loc>
        <lastmod><?= $fechaHoy ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>
        
    <url>
        <loc><?= $ruta ?>/mirador-de-cotolino/</loc>
        <lastmod><?= $fechaHoy ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>
        
    <url>
        <loc><?= $ruta ?>/palacio-de-ocharan/</loc>
        <lastmod><?= $fechaHoy ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>
        
    <url>
        <loc><?= $ruta ?>/parque-amestoy/</loc>
        <lastmod><?= $fechaHoy ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>
        
    <url>
        <loc><?= $ruta ?>/paseo-maritimo/</loc>
        <lastmod><?= $fechaHoy ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>
        
    <url>
        <loc><?= $ruta ?>/playa-de-brazomar/</loc>
        <lastmod><?= $fechaHoy ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>
        
    <url>
        <loc><?= $ruta ?>/playa-de-ostende/</loc>
        <lastmod><?= $fechaHoy ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>

    <url>
        <loc><?= $ruta ?>/playa-el-pedregal/</loc>
        <lastmod><?= $fechaHoy ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>

    <url>
        <loc><?= $ruta ?>/plaza-del-ayuntamiento/</loc>
        <lastmod><?= $fechaHoy ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>
        
    <url>
        <loc><?= $ruta ?>/puente-medieval/</loc>
        <lastmod><?= $fechaHoy ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>

    <url>
        <loc><?= $ruta ?>/puerto-pesquero/</loc>
        <lastmod><?= $fechaHoy ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>
        
    <url>
        <loc><?= $ruta ?>/senderos-costeros-rutas-oficiales/</loc>
        <lastmod><?= $fechaHoy ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>
        

    <?php $localidad_minuscula = "santona"; ?>
    <?php $ruta= $baseUrl."/".$region_minuscula."/".$localidad_minuscula."/".$lugares_interes; ?>
    <url>
        <loc><?= $baseUrl ?>/cantabria/santona/</loc>
        <lastmod><?= $fechaHoy ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>

    <url>
        <loc><?= $ruta; ?>/faro-del-caballo/</loc>
        <lastmod><?= $fechaHoy ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>

    <url>
        <loc><?= $ruta ?>/monte-buciero/</loc>
        <lastmod><?= $fechaHoy ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>

    <url>
        <loc><?= $ruta ?>/playa-de-berria/</loc>
        <lastmod><?= $fechaHoy ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>

    <url>
        <loc><?= $ruta ?>/puerto-de-santona/</loc>
        <lastmod><?= $fechaHoy ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
     </url>

    <?php $localidad_minuscula = "sonabia"; ?>
    <?php $ruta= $baseUrl."/".$region_minuscula."/".$localidad_minuscula."/".$lugares_interes; ?>
    
    <url>
        <loc><?= $baseUrl ?>/cantabria/sonabia/</loc>
        <lastmod><?= $fechaHoy ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>

    <url>
        <loc><?= $ruta; ?>/monte-candina/</loc>
        <lastmod><?= $fechaHoy ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>

    <url>
        <loc><?= $ruta ?>/ojo-del-diablo/</loc>
        <lastmod><?= $fechaHoy ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>

    <url>
        <loc><?= $ruta ?>/pena-candina/</loc>
        <lastmod><?= $fechaHoy ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>
        
    <url>
        <loc><?= $ruta ?>/playa-de-valdearenas/</loc>
        <lastmod><?= $fechaHoy ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
     </url>



    <?php 
    $region_minuscula = "nouvelle-aquitaine";
    $localidad_minuscula = "baiona";
    $lugares_interes = "lugares-interes"; ?>
    <?php $ruta= $baseUrl."/".$region_minuscula."/".$localidad_minuscula."/".$lugares_interes; ?>
    
    <url>
        <loc><?= $baseUrl ?>/nouvelle-aquitaine/baiona/</loc>
        <lastmod><?= $fechaHoy ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>

    <url>
        <loc><?= $ruta ?>/casco-antiguo/</loc>
        <lastmod><?= $fechaHoy ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>

    <url>
        <loc><?= $ruta ?>/catedral-de-santa-maria-de-baiona/</loc>
        <lastmod><?= $fechaHoy ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>

    <url>
        <loc><?= $ruta ?>/museo-vasco-de-la-historia-de-baiona/</loc>
        <lastmod><?= $fechaHoy ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>

    <url>
        <loc><?= $ruta ?>/playa-de-a-ladeira/</loc>
        <lastmod><?= $fechaHoy ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>

    <url>
        <loc><?= $ruta ?>/puente-saint-sprit/</loc>
        <lastmod><?= $fechaHoy ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>


    <?php 
    $region_minuscula = "nouvelle-aquitaine";
    $localidad_minuscula = "biarritz";
    $lugares_interes = "lugares-interes"; ?>
    <?php $ruta= $baseUrl."/".$region_minuscula."/".$localidad_minuscula."/".$lugares_interes; ?>
    
    <url>
        <loc><?= $baseUrl ?>/nouvelle-aquitaine/biarritz/</loc>
        <lastmod><?= $fechaHoy ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>

    <url>
        <loc><?= $ruta ?>/faro-de-biarritz/</loc>
        <lastmod><?= $fechaHoy ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>

    <url>
        <loc><?= $ruta ?>/grande-plage/</loc>
        <lastmod><?= $fechaHoy ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>

    <url>
        <loc><?= $ruta ?>/playa-de-milardy/</loc>
        <lastmod><?= $fechaHoy ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>

    <url>
        <loc><?= $ruta ?>/playa-de-miramar/</loc>
        <lastmod><?= $fechaHoy ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>
        
    <url>
        <loc><?= $ruta ?>/port-vieux/</loc>
        <lastmod><?= $fechaHoy ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>

    <url>
        <loc><?= $ruta ?>/rocher-de-la-vierge/</loc>
        <lastmod><?= $fechaHoy ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>





    <?php 
    $region_minuscula = "nouvelle-aquitaine";
    $localidad_minuscula = "capbreton";
    $lugares_interes = "lugares-interes"; ?>
    <?php $ruta= $baseUrl."/".$region_minuscula."/".$localidad_minuscula."/".$lugares_interes; ?>
    
    <url>
        <loc><?= $baseUrl ?>/nouvelle-aquitaine/capbreton/</loc>
        <lastmod><?= $fechaHoy ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>

    <url>
        <loc><?= $ruta ?>/foret-domaniale/</loc>
        <lastmod><?= $fechaHoy ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>

    <url>
        <loc><?= $ruta ?>/piste-cyclable-velodyssee/</loc>
        <lastmod><?= $fechaHoy ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>

    <url>
        <loc><?= $ruta ?>/plage-centrale/</loc>
        <lastmod><?= $fechaHoy ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>

    <url>
        <loc><?= $ruta ?>/puerto-pesquero/</loc>
        <lastmod><?= $fechaHoy ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>



    <?php 
    $region_minuscula = "nouvelle-aquitaine";
    $localidad_minuscula = "hendaia";
    $lugares_interes = "lugares-interes"; ?>
    <?php $ruta= $baseUrl."/".$region_minuscula."/".$localidad_minuscula."/".$lugares_interes; ?>
    
    <url>
        <loc><?= $baseUrl ?>/nouvelle-aquitaine/hendaia/</loc>
        <lastmod><?= $fechaHoy ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>

    <url>
        <loc><?= $ruta ?>/castillo-abbadia/</loc>
        <lastmod><?= $fechaHoy ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>

    <url>
        <loc><?= $ruta ?>/corniche-basque/</loc>
        <lastmod><?= $fechaHoy ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>

    <url>
        <loc><?= $ruta ?>/playa-de-ondarraitz/</loc>
        <lastmod><?= $fechaHoy ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>

    <url>
        <loc><?= $ruta ?>/puerto-deportivo/</loc>
        <lastmod><?= $fechaHoy ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>


    
    <?php 
    $region_minuscula = "nouvelle-aquitaine";
    $localidad_minuscula = "saint-jean-de-luz";
    $lugares_interes = "lugares-interes"; ?>
    <?php $ruta= $baseUrl."/".$region_minuscula."/".$localidad_minuscula."/".$lugares_interes; ?>
    
    <url>
        <loc><?= $baseUrl ?>/nouvelle-aquitaine/saint-jean-de-luz/</loc>
        <lastmod><?= $fechaHoy ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>

    <url>
        <loc><?= $ruta ?>/fuerte-socoa/</loc>
        <lastmod><?= $fechaHoy ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>

    <url>
        <loc><?= $ruta ?>/iglesia-san-juan-bautista/</loc>
        <lastmod><?= $fechaHoy ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>

    <url>
        <loc><?= $ruta ?>/la-grande-plage/</loc>
        <lastmod><?= $fechaHoy ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>

    <url>
        <loc><?= $ruta ?>/puerto-pesquero/</loc>
        <lastmod><?= $fechaHoy ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>


























    </urlset>

    <?php /*
    <url>
        <loc><?= $ruta ?>/playas/playa-de-sonabia/</loc>
        <lastmod><?= $fechaHoy ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url> */ ?>
    


<?php /*
    <url>
        <loc><?= $baseUrl ?>cantabria/ajo/lugares-interes/faro-de-cabo-de-ajo/</loc>
        <lastmod><?= $fechaHoy ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>


    <url>
        <loc><?= $baseUrl ?>playa-de-ostende-castro-urdiales-cantabria</loc>
        <lastmod><?= $fechaHoy ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>

    <url>
        <loc><?= $baseUrl ?>actividades-playa-de-ostende-castro-urdiales-cantabria</loc>
        <lastmod><?= $fechaHoy ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>

    
    <url>
    <loc><?= $baseUrl ?>como-llegar-playa-de-ostende-castro-urdiales-cantabria</loc>
    <lastmod><?= $fechaHoy ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>


    <url>
    <loc><?= $baseUrl ?>servicios-playa-de-ostende-castro-urdiales-cantabria</loc>
    <lastmod><?= $fechaHoy ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>

    <url>
    <loc><?= $baseUrl ?>eventos-festividades-playa-de-ostende-castro-urdiales-cantabria</loc>
    <lastmod><?= $fechaHoy ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>

    <url>
    <loc><?= $baseUrl ?>preguntas-frecuentes-playa-de-ostende-castro-urdiales-cantabria</loc>
    <lastmod><?= $fechaHoy ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>

    <!-- Barra de navegación -->
    <url>
    <loc><?= $baseUrl ?>restaurantes-castro-urdiales</loc>
    <lastmod><?= $fechaHoy ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>

    <url>
    <loc><?= $baseUrl ?>alojamientos-castro-urdiales</loc>
    <lastmod><?= $fechaHoy ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>

    <url>
    <loc><?= $baseUrl ?>rutas-costeras-castro-urdiales</loc>
    <lastmod><?= $fechaHoy ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>

    <url>
    <loc><?= $baseUrl ?>eventos-castro-urdiales</loc>
    <lastmod><?= $fechaHoy ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>

    <url>
    <loc><?= $baseUrl ?>blog-castro-urdiales</loc>
    <lastmod><?= $fechaHoy ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url> */ ?>



<?php /*

    <url>
        <loc><?= PATH_DOMINIO_RAIZ; ?>/turismo-norte-espana/playa-de-somo-loredo-somo-cantabria</loc>
        <lastmod>2025-05-15</lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>








    <url>
        <loc><?= PATH_DOMINIO_RAIZ; ?>/turismo-norte-espana/playa-de-noja-cantabria</loc>
        <lastmod>2025-05-15</lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>




    <url>
        <loc><?= PATH_DOMINIO_RAIZ; ?>/turismo-norte-espana/actividades-playa-de-noja-cantabria</loc>
        <lastmod>2025-05-16</lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>





    <url>
        <loc><?= PATH_DOMINIO_RAIZ; ?>/turismo-norte-espana/playa-de-berria-cantabria</loc>
        <lastmod>2025-05-15</lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>

    <url>
        <loc><?= PATH_DOMINIO_RAIZ; ?>/turismo-norte-espana/playa-de-sardinero-santander</loc>
        <lastmod>2025-05-15</lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>

    <url>
        <loc><?= PATH_DOMINIO_RAIZ; ?>/turismo-norte-espana/playa-de-laredo-cantabria</loc>
        <lastmod>2025-05-15</lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>

    <url>
        <loc><?= PATH_DOMINIO_RAIZ; ?>/turismo-norte-espana/playa-de-isla-cantabria</loc>
        <lastmod>2025-05-15</lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>

    <url>
        <loc><?= PATH_DOMINIO_RAIZ; ?>/turismo-norte-espana/playa-de-suances-cantabria</loc>
        <lastmod>2025-05-15</lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>
    <!-- Cantabria -->





    <!-- Vizcaya -->
    <url>
        <loc><?= PATH_DOMINIO_RAIZ; ?>/turismo-norte-espana/playa-de-gorliz-vizcaya</loc>
        <lastmod>2025-05-15</lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>

    <url>
        <loc><?= PATH_DOMINIO_RAIZ; ?>/turismo-norte-espana/playa-de-getxo-vizcaya</loc>
        <lastmod>2025-05-15</lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>

    <url>
        <loc><?= PATH_DOMINIO_RAIZ; ?>/turismo-norte-espana/playa-de-vizcaya</loc>
        <lastmod>2025-05-15</lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>

    <url>
        <loc><?= PATH_DOMINIO_RAIZ; ?>/turismo-norte-espana/playa-de-bakio-vizcaya</loc>
        <lastmod>2025-05-15</lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>

    <url>
        <loc><?= PATH_DOMINIO_RAIZ; ?>/turismo-norte-espana/playa-de-lekeitio-vizcaya</loc>
        <lastmod>2025-05-15</lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>

    <url>
        <loc><?= PATH_DOMINIO_RAIZ; ?>/turismo-norte-espana/playa-de-sopelana-vizcaya</loc>
        <lastmod>2025-05-15</lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>

    <url>
        <loc><?= PATH_DOMINIO_RAIZ; ?>/turismo-norte-espana/playa-de-muskiz-vizcaya</loc>
        <lastmod>2025-05-15</lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>

    <url>
        <loc><?= PATH_DOMINIO_RAIZ; ?>/turismo-norte-espana/playa-de-plentzia-vizcaya</loc>
        <lastmod>2025-05-15</lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>



    <!-- Guipuzkoa -->

    <url>
        <loc><?= PATH_DOMINIO_RAIZ; ?>/turismo-norte-espana/playa-de-fuenterrabia-gipuzkoa</loc>
        <lastmod>2025-05-15</lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>

    <url>
        <loc><?= PATH_DOMINIO_RAIZ; ?>/turismo-norte-espana/playa-de-zumaia-gipuzkoa</loc>
        <lastmod>2025-05-15</lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>

    <url>
        <loc><?= PATH_DOMINIO_RAIZ; ?>/turismo-norte-espana/playa-de-getaria-gipuzkoa</loc>
        <lastmod>2025-05-15</lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url> 

    <url>
        <loc><?= PATH_DOMINIO_RAIZ; ?>/turismo-norte-espana/playa-de-deba-gipuzkoa</loc>
        <lastmod>2025-05-15</lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>  

    <url>
        <loc><?= PATH_DOMINIO_RAIZ; ?>/turismo-norte-espana/playa-de-orio-gipuzkoa</loc>
        <lastmod>2025-05-15</lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>   

    <url>
        <loc><?= PATH_DOMINIO_RAIZ; ?>/turismo-norte-espana/playa-de-zarautz-gipuzkoa</loc>
        <lastmod>2025-05-15</lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>


    <!-- Francia -->

    <url>
        <loc><?= PATH_DOMINIO_RAIZ; ?>/turismo-norte-espana/playa-de-bayona-francia</loc>
        <lastmod>2025-05-15</lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>

    <url>
        <loc><?= PATH_DOMINIO_RAIZ; ?>/turismo-norte-espana/playa-de-hendaya-francia</loc>
        <lastmod>2025-05-15</lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>

    <url>
        <loc><?= PATH_DOMINIO_RAIZ; ?>/turismo-norte-espana/playa-de-saint-jean-de-luz-francia</loc>
        <lastmod>2025-05-15</lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>

    <url>
        <loc><?= PATH_DOMINIO_RAIZ; ?>/turismo-norte-espana/playa-de-biarritz-francia</loc>
        <lastmod>2025-05-15</lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>












    <url>
        <loc><?= PATH_DOMINIO_RAIZ; ?>/playadedeba/fichas/playa-de-deba.php</loc>
        <lastmod>2025-05-15</lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>



    <url>
        <loc><?= PATH_DOMINIO_RAIZ; ?>/playadesopelana/fichas/playa-de-sopelana.php</loc>
        <lastmod>2025-05-15</lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>



    <url>
        <loc><?= PATH_DOMINIO_RAIZ; ?>/playadeberria/fichas/playa-de-berria.php</loc>
        <lastmod>2025-05-15</lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>

    <url>
        <loc><?= PATH_DOMINIO_RAIZ; ?>/castrourdiales/fichas/ficha_castrourdiales.php</loc>
        <lastmod>2025-05-15</lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>



    
    <url>
        <loc><?= PATH_DOMINIO_RAIZ; ?>/castrourdiales/galeria.php</loc>
        <lastmod>2025-05-15</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
    </url>
    
    <url>
        <loc><?= PATH_DOMINIO_RAIZ; ?>/castrourdiales/eventos.php</loc>
        <lastmod>2025-05-15</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.7</priority>
    </url>
    
    <!-- Agrega más URLs aquí -->
*/?>



















