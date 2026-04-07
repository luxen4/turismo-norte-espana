<?php //define('PATH_HREF_RAIZ_BLOQUES', "/turismo-norte-espana/bloques"); ?>

<!-- Sidebar con anuncios -->
<aside class="sticky-top" style="top: 4rem; max-height: calc(100vh - 4rem); overflow-y: auto;">
    <div class="mb-4">
        <p class="text-sm text-muted">Publicidad</p>
        <div style="width: 100%; text-align: center;">
            <?php
            $href = "https://www.amazon.es/Irevial-Cuadros-Franela-Boyfriend-Bolsillo/dp/B09QKHXFX7?tag=adrian8204-21";
            $src = "https://m.media-amazon.com/images/I/71GrO7q8jhL._AC_SX569_.jpg";
            $alt = "Camisa cuadros mujer";
            $nombre_producto = "Irevial Camisa Manga Larga Mujer Oficina Elegante";
            $price = "";
            //require PATH_RAIZ_BLOQUES . '/anuncios_derecha.php'; 
            ?>

            <iframe
                src="<?= PATH_HREF_RAIZ_BLOQUES . '/anuncios_derecha2.php' ?>"
                width="100%"
                height="640px"
                scrolling="no"
                style="border:1px solid #ccc; overflow:hidden;"
                title="Ejemplo"
                frameborder="0"
                allowfullscreen>
            </iframe>

            <?php require PATH_RAIZ_BLOQUES . '/anuncios_derecha_1item.php'; ?>

            <?php
            $href = "https://amzn.to/3XkGL8G";
            $src = "https://m.media-amazon.com/images/I/914XCovYMuL._AC_SX625_.jpg";
            $alt = "Bolso mujer gris";
            $nombre_producto = "Tom Tailor lari, Bolsa para Mujer";
            $price = "44,79€";
            require PATH_RAIZ_BLOQUES . '/anuncios_derecha.php';
            ?>

            <script id="aclib" type="text/javascript" src="//acscdn.com/script/aclib.js"></script>
            <script type="text/javascript">
                aclib.runAutoTag({
                    zoneId: 'qfow4eeyo8',
                });
            </script>
        </div>
    </div>
</aside>