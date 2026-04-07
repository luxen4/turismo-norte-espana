A
<?php define('PATH_RAIZ',                                               rtrim($_SERVER['DOCUMENT_ROOT'], '/') . '/turismo-norte-espana'); ?>
<?php define('PATH_RAIZ_BLOQUES',                                       PATH_RAIZ. '/bloques'); ?> 
<?php define('PATH_RAIZ_BLOQUES_CONTROL',                               PATH_RAIZ_BLOQUES . '/control'); ?>
<?php define('PATH_RAIZ_BLOQUES_ESTRUCTURA',                            PATH_RAIZ_BLOQUES. '/estructura'); ?>
<?php //define('PATH_BLOQUES_SECTIONS_CARRUSELES_CSV', PATH_RAIZ_BLOQUES_ESTRUCTURA. "/sections_generico/Carruseles_CSV"); ?>



<?php
$archivos = [
  'botas-hombre'         => '/prueba_botas_hombre.php',  
  'sports-shirts-hombre' => '/prueba_sports_shirts_hombre.php',
  'sneakers'             => '/prueba_sneakers.php',
  'vaqueros-hombre'      => '/prueba_vaqueros_hombre.php',
  'shorts-hombre'       => '/prueba_shorts_hombre.php',
  'chaquetas-hombre'    => '/prueba_chaquetas_hombre.php',
  'dress_woman'         => '/prueba_dress_woman.php',
];

// Cargar rutas absolutas
$publicidadPaths = [];
foreach ($archivos as $clave => $archivo) {
  $publicidadPaths[$clave] = PATH_BLOQUES_SECTIONS_CARRUSELES_CSV . $archivo;
}
?>

<div id="bloque-publicidad" class="relative mb-6 transition-opacity duration-500">
  <button 
    onclick="cerrarPublicidad()"
    class="absolute top-0 right-0 mt-2 mr-2 text-gray-500 hover:text-red-600 text-xl font-bold z-10"
    aria-label="Cerrar publicidad"
  >
    &times;
  </button>

  <div class="row border border-gray-200 rounded shadow-sm p-1 bg-white" >
    <div class="col-xl-12 text-center col-lg-12 col-md-12 col-sm-12 col-12" style="padding: 0px;">
      <?php foreach ($publicidadPaths as $clave => $ruta): ?>
        <div class="bloque-anuncio" data-clave="<?= $clave ?>" style="display: none;">
          <?php require $ruta; ?>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>

<script>
  const bloques = document.querySelectorAll('.bloque-anuncio');
  let actual = Math.floor(Math.random() * bloques.length); // Elige uno aleatorio al inicio

  function mostrarBloque(index) {
    bloques.forEach((el, i) => el.style.display = i === index ? 'block' : 'none');
  }

  function cerrarPublicidad() {
    const contenedor = document.getElementById('bloque-publicidad');
    contenedor.style.display = 'none';

    // Espera 5 segundos, elige otro diferente y muestra
    setTimeout(() => {
      let nuevo;
      do {
        nuevo = Math.floor(Math.random() * bloques.length);
      } while (nuevo === actual && bloques.length > 1);
      actual = nuevo;

      mostrarBloque(actual);
      contenedor.style.display = 'block';
    }, 5000);
  }

  // Mostrar uno al azar al cargar
  window.addEventListener('DOMContentLoaded', () => mostrarBloque(actual));
</script>