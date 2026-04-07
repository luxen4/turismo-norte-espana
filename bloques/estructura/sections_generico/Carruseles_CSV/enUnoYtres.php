<div class="row">
    <!-- Imagen grande a la izquierda -->
    <div class="col-xl-9 text-center col-lg-10 col-md-10 col-sm-6 col-8">
        <div class="custom-carousel-image-container square-container">
            <a id="image-link_csv_0_<?php echo $arrayElementos[$numeroAleatorio]["nombre"]; ?>" href="<?php echo $productos[0]['href']; ?>">
                <img id="image_csv_0_<?php echo $arrayElementos[$numeroAleatorio]["nombre"]; ?>" src="<?php echo $productos[0]['src']; ?>" class="d-block w-100 custom-carousel-image" alt="<?php echo $productos[0]['alt']; ?>">
            </a>
        </div>
    </div>
    
    <!-- Imágenes pequeñas a la derecha -->
    <div class="col-xl-3 text-center col-lg-3 col-md-3 col-sm-6 col-4">
        <?php
        // Recorremos los productos pequeños para generar las imágenes pequeñas
        for ($i = 1; $i < 4; $i++) {
            // Generamos dinámicamente los id's basados en el nombre del producto y el índice
            $nombreElemento = $arrayElementos[$i]["nombre"];
            echo '
                <div class="custom-carousel-image-container square-container">
                    <a id="image-link_csv_' . $i . '_' . $arrayElementos[$numeroAleatorio]["nombre"] . '" href="' . $productos[$i]['href'] . '">
                        <img id="image_csv_' . $i . '_' . $arrayElementos[$numeroAleatorio]["nombre"] . '" src="' . $productos[$i]['src'] . '" class="d-block w-100 custom-carousel-image" alt="' . $productos[$i]['alt'] . '">
                    </a>
                </div>
            ';
        }
        ?>
    </div>
    <div class="text-left">
                    <img src="/turismo-norte-espana/logo_amazon.png" alt="ddd" style="width: 80px; height: auto; margin-top: 1em;">
                </div>
</div>
