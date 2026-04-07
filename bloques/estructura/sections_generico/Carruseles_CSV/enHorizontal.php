<div class="w-full my-2 py-2 px-1 rounded-lg" id="carouselExampleIndicators">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="max-w-screen-xl mx-auto">

                <!-- Logo Amazon más grande y con margen inferior -->
                <div class="mt-1 ml-1 mb-3 text-left">
                    <img src="/turismo-norte-espana/assets/logo_amazon1.png" alt="Amazon" class="w-20 h-auto">
                </div>
                
                <!-- Grid de productos -->
                <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-4 gap-4">
                    <?php 
                        // Ajustamos el ciclo para mostrar 4 imágenes
                        for ($i = 0; $i < 4; $i++) {
                            echo '
                                <div class="text-center">
                                    <div class="aspect-square overflow-hidden rounded-lg shadow-sm bg-white p-2">
                                        <a id="image-link_csv_' . $i . '_' . $arrayElementos[$numeroAleatorio]["nombre"] . '" href="' . $productos[$i]['href'] . '">
                                            <img 
                                                id="image_csv_' . $i . '_' . $arrayElementos[$numeroAleatorio]["nombre"] . '" 
                                                src="' . $productos[$i]['src'] . '" 
                                                alt="' . $productos[$i]['alt'] . '" 
                                                class="w-full h-full object-contain transition-transform duration-300 hover:scale-105"
                                            >
                                        </a>
                                    </div>
                                </div>
                            ';
                        }
                    ?>
                </div>

            </div>
        </div>
    </div>
</div>