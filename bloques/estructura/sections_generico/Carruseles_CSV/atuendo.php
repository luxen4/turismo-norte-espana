<div class="row box_atuendo">
    <!-- Imagen grande a la izquierda -->
    <div class="col-xl-3 text-center col-lg-6 col-md-6 col-sm-6 col-6">
        <div class="custom-carousel-image-container square-container image_izda">
            <a id="image-link_csv_0_<?php echo $arrayElementos[$numeroAleatorio]["nombre"]; ?>" href="<?php echo $productos[0]['href']; ?>">
                <img id="image_csv_0_<?php echo $arrayElementos[$numeroAleatorio]["nombre"]; ?>" src="<?php echo $productos[0]['src']; ?>" class="d-block w-100 custom-carousel-image" alt="<?php echo $productos[0]['alt']; ?>">
            </a>
        </div>

        <div class="custom-carousel-image-container square-container image_izda">
            <a id="image-link_csv_1_<?php echo $arrayElementos[$numeroAleatorio]["nombre"]; ?>" href="<?php echo $productos[1]['href']; ?>">
                <img id="image_csv_1_<?php echo $arrayElementos[$numeroAleatorio]["nombre"]; ?>" src="<?php echo $productos[1]['src']; ?>" class="d-block w-100 custom-carousel-image" alt="<?php echo $productos[0]['alt']; ?>">
            </a>
        </div>
    </div>

    <!-- Imágenes pequeñas a la derecha -->
    <div class="col-xl-3 text-center col-lg-6 col-md-6 col-sm-6 col-6">
        <?php
        // Recorremos los productos pequeños para generar las imágenes pequeñas
        for ($i = 2; $i < 5; $i++) {
            // Generamos dinámicamente los id's basados en el nombre del producto y el índice
            $nombreElemento = $arrayElementos[$i]["nombre"];
            echo '
                <div class="custom-carousel-image-container square-container image_atuendo image-small">
                    <a id="image-link_csv_' . $i . '_' . $arrayElementos[$numeroAleatorio]["nombre"] . '" href="' . $productos[$i]['href'] . '">
                        <img id="image_csv_' . $i . '_' . $arrayElementos[$numeroAleatorio]["nombre"] . '" src="' . $productos[$i]['src'] . '" class="d-block w-100 custom-carousel-image" alt="' . $productos[$i]['alt'] . '">
                    </a>
                </div>
            ';
        }
        ?>
    </div>
    <div class="text-left">
        <img src="/turismo-norte-espana/logo_amazon.png" alt="Logo Amazon" style="width: 80px; height: auto; margin-top: 1em;">
    </div>
</div>

<style>
    .custom-carousel-image-container {
    padding: 0.5em;
    border-radius: 1rem;
    overflow: hidden;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    margin-bottom: 1em;
    background-color: #fff;
    transition: transform 0.3s ease;
}

.custom-carousel-image-container:hover {
    transform: scale(1.02);
}

.custom-carousel-image {
    width: 50%;
    height: auto;
    object-fit: cover;
    border-radius: 0.75rem;
    max-height: 220px; /* Ajusta el alto máximo */
}

.image-small img {
    max-height: 380px;
}
</style>