<?php
require_once "generico_CSV.php";
//$productos = leer_CSV_atuendo1($arrayElementos, 7); 
$nombreAtuendo = 'atuendo4'; // Nombre del atuendo
$productos = leer_CSV("atuendo4"); // Llamamos a la función para leer el CSV y obtener los productos correspondientes

$numeroAleatorio = rand(0, 7); // Generamos un número aleatorio entre 0 y 7
$numeroAleatorio = 8; ?>

<div class="container carrusel_auxiliar4">
    <div class="row" style="max-width: 1300px; margin:auto;">
        

        <div class="col-xl-12 text-center col-lg-12 col-md-12 col-sm-12 col-12">
            <?php //<h6 class="text-publicidad">Publicidad</h6>?>
            <div class="text-left">
                <img src="/turismo-norte-espana/logo_amazon.png" alt="ddd" style="width: 80px; height: auto; margin-top: 1em;">
            </div>
            <?php require 'elementos_atuendo_en_linea.php'; ?>
        </div>

        
    </div>
</div>


<script>
    
/*
let currentIndex_atuendo3 = 0; 
const productos_atuendo3 = <?php // echo json_encode($productos); ?>; // Pasamos los productos a JavaScript

// Inicializamos los arrays para las imágenes y los enlaces
const imagenesPequenas_atuendo3 = [];
const linksPequenos_atuendo3 = [];


    const nombreElemento_atuendo3 = "atuendo3";

    // Asegurándonos de que los elementos con el ID correcto existen en el DOM
    for (let i = 0; i < 4; i++) {
        try {
            const imagen = document.getElementById('image_csv_' + i + '_' + nombreElemento_atuendo3);
            const enlace = document.getElementById('image-link_csv_' + i + '_' + nombreElemento_atuendo3);

            // Si los elementos existen, los agregamos a los arrays
            if (imagen && enlace) {
                imagenesPequenas_atuendo3.push(imagen);
                linksPequenos_atuendo3.push(enlace);
            } else {
                //console.warn(`Elementos con ID 'image_csv_${i}_${nombreElemento}' no encontrados.`);
            }
        } catch (error) {
            console.error(`Error al obtener los elementos con ID 'image_csv_${i}_${nombreElemento_atuendo3}': `, error);
        }
       
    }
   
// Función para actualizar el carrusel
function actualizarCarrusel_atuendo3() {
    // Alternar el índice para obtener productos de manera fluida
    currentIndex_atuendo3 = (currentIndex_atuendo3 + 1) % productos_atuendo3.length; // Cambiar el índice de manera alternada, saltando 1 en 1


    // Actualizamos todas las imágenes pequeñas
    for (let i = 0; i < 4; i++) {
        const productoPequeno_atuendo3 = productos_atuendo3[(currentIndex_atuendo3 + i) % productos_atuendo3.length]; // Usamos el índice de manera circular

        // Comprobamos que las imágenes y los enlaces existen antes de actualizarlos
        if (imagenesPequenas_atuendo3[i] && linksPequenos_atuendo3[i]) {
            imagenesPequenas_atuendo3[i].src = productoPequeno_atuendo3['src'];
            imagenesPequenas_atuendo3[i].alt = productoPequeno_atuendo3['alt'];
            linksPequenos_atuendo3[i].href = productoPequeno_atuendo3['href'];
        } else {
            console.warn(`Elemento de imagen o enlace no encontrado en el índice ${i}`);
        }
    } 
}

// Ejecutar la función cada 4 segundos para cambiar las imágenes
setInterval(actualizarCarrusel_atuendo3, 4000); // Cambiar cada 4 segundos*/
</script>