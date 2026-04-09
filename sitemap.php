<?php
header("Content-Type: application/xml; charset=UTF-8");
$baseUrl = "http://alayag82.kesug.com/turismo-norte-espana";
$fechaHoy = date("Y-m-d");
echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">

    <?php
    $regiones = [
        "bizkaia/" => [
            "bakio" => ["playa-de-bakio", "san-juan-de-gaztelugatxe", "surf-en-la-playa-de-bakio", "_monte-serantes-bakio"],
            "gorliz" => ["faro-de-gorliz", "parque-acuatico", "playa-de-astondo", "ruta-senderista-gorliz-armintza"],
            "ibarrangelu" => ["cabo-ogono", "centro-interpretacion-urdaibai", "playa-de laga", "ruta-senderista-laga-ogono"],
            "musquiz" => [
                "castillo-de-munatones",
                "parque-natural-montes-triano",
                "paseo-itsalur",
                "playa-de-la-arena",
                "ruta-senderista-muskiz-punta-lucero",
                "zec-ordunte-kbe",
                "paseo-itsalur",
                "playa-de-la-arena",
                "ruta-senderista-muskiz-punta-lucero",
                "zec-ordunte-kbe"
            ],
            "plentzia" => ["playa-de-gorliz", "playa-de-plentzia", "puerto-deportivo", "ruta-senserista-plentzia-gorliz"],
            "sopelana" => ["mirador-de-arrietara", "playa-de-arrietara", "ruta-senderista-sopelana-plentzia", "ruta-senserista-plentzia-gorliz"]
        ],
        "cantabria/" => [
            "ajo" => [
                "acantilados-de-cabo-de-ajo",
                "faro-de-cabo-de-ajo",
                "mirador-del-cabo",
                "playa-de-antuerta",
                "playa-de-cuberris",
                "ruta-de-la-costa-oriental"
            ],
            "castro-urdiales" =>
            [
                "asador-la-perla",
                "castillo-de-santa-ana",
                "club-nautico",
                "iglesia-santa-maria-de-la-asuncion",
                "mirador-de-cotolino",
                "palacio-de-ocharan",
                "parque-amestoy",
                "paseo-maritimo",
                "playa-de-brazomar",
                "playa-de-ostende",
                "playa-el-pedregal",
                "plaza-del--ayuntamiento",
                "puente-medieval",
                "puerto-pesquero",
                "senderos-costeros-rutas-oficiales"
            ],
            "santona" =>
            [
                "faro-del-cabo",
                "monte-buciero",
                "playa-de-berria",
                "puerto-de-santona"
            ],
            "sonabia" =>
            [
                "monte-candina",
                "ojo-del-diablo",
                "pena-candina",
                "playa-devaldearenas"
            ],
        ],
        "gipuzkoa/" => [
            "deba" => ["mirador-de-sorginetxe", "playa-de-santiago", "ruta-senderista-deba-zumaia", "_monte-serantes-bakio"],
        ],

        "nouvelle-aquitaine/" => [
            "baiona" => ["casco-antiguao", "catedral-de-santa-maria", "museo-vasco-de-la-historia-de-baiona", "playa-de-a-ladeira", "puente-saint-sprit"],
            "biarritz" => ["faro-de-biarritz", "grande-plage", "playa-de-milardy", "playa-de-miramar", "port-vieux", "rocher-de-la-vierge"],
            "capbreton" => ["foret-domaniale", "piste-cyclable-velodissee", "plage-centrale", "puerto-pesquero"],
            "hendaia" => ["castillo-abbadia", "corniche-basque", "playa-de-ondarraitz", "puerto-deportivo"],
            "saint-jean-de-luz" => ["fuerte-de-socoa", "iglesia-san-juan-bautista", "la-grande-plage", "puerto-pesquero"]
        ]
    ];


    foreach ($regiones as $region => $localidades): ?>
        <url>
            <loc><?= $baseUrl . "/" . $region; ?></loc>
            <lastmod><?= $fechaHoy ?></lastmod>
            <changefreq>weekly</changefreq>
            <priority>1.0</priority>
        </url><?php

                foreach ($localidades as $localidad => $lugares_interes): ?>
            <url>
                <loc><?= $baseUrl . "/" . $region . "" . $localidad . "/"; ?></loc>
                <lastmod><?= $fechaHoy ?></lastmod>
                <changefreq>weekly</changefreq>
                <priority>1.0</priority>
            </url><?php


                    foreach ($lugares_interes as $lugar_interes): ?>

                <url>
                    <loc><?= $baseUrl . "/" . $region . "" . $localidad . "/lugares-interes/" . $lugar_interes . "/"; ?></loc>
                    <lastmod><?= $fechaHoy ?></lastmod>
                    <changefreq>weekly</changefreq>
                    <priority>1.0</priority>
                </url><?php
                    endforeach;

                endforeach;

            endforeach;
                        ?>

</urlset>