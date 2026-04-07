<?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_SECUNDARIAS_HEADER . '/breadcrums-paginas-secundarias.php'; ?>

<section id="actividades-recomendadas" class="max-w-screen-xl mx-auto px-4 py-8">

  <!-- Cabecera -->
  <header class="text-center mb-8">
    <h1 class="text-2xl md:text-3xl font-bold text-blue-700 mb-2">🏖️ Actividades en Playa de Ostende</h1>
    <p class="text-gray-700 max-w-2xl mx-auto">
      Descubre las <strong>actividades más destacadas</strong> que ofrece la <strong>Playa de Ostende</strong> en 
      <a href="https://es.wikipedia.org/wiki/Castro-Urdiales" 
         class="text-blue-600 hover:underline" 
         title="Más sobre Castro-Urdiales" target="_blank" rel="noopener">
        Castro-Urdiales, Cantabria
      </a>. Perfecta para relajarse, hacer deporte y disfrutar del entorno histórico-marítimo.
    </p>
  </header>

  <!-- Descripción General -->
  <div class="mb-6 text-gray-800">
    <h2 class="text-lg font-semibold mb-2 flex items-center gap-2">
      <i class="fas fa-sun text-yellow-400"></i>
      Qué hacer en la Playa de Ostende
    </h2>
    <p class="mb-2">
      La <strong>Playa de Ostende</strong> combina una amplia zona de arena con una excelente accesibilidad urbana. Ideal para disfrutar de 
      <strong>baños, deportes de playa</strong> y paseos relajantes por el paseo marítimo.
    </p>
    <p class="mb-2">
      Además, su proximidad al casco antiguo y al <strong>Puerto de Castro-Urdiales</strong> permite combinar actividades acuáticas con turismo cultural y gastronómico.
    </p>
    <p class="flex items-center gap-2">
      <i class="fas fa-calendar-alt text500"></i>
      Durante el verano se celebran conciertos, mercadillos y actividades familiares, convirtiendo a Ostende en un punto clave del ocio costero cántabro.
    </p>
  </div>

  <!-- Lista de actividades -->
  <ul class="space-y-6 text-gray-800">
    <li class="flex flex-col gap-2">
      <div class="flex items-center text-teal-500 font-semibold">
        <i class="fas fa-swimmer mr-2"></i> Natación y relax en la playa
      </div>
      <p>
        Disfruta de un baño en aguas tranquilas con servicios de socorrismo, duchas y zonas accesibles. Ideal para familias y personas mayores.
      </p>
    </li>

    <li class="flex flex-col gap-2">
      <div class="flex items-center text-green-600 font-semibold">
        <i class="fas fa-walking mr-2"></i> Paseos por el litoral y casco histórico
      </div>
      <p>
        Recorre el <strong>paseo marítimo de Ostende</strong> hasta llegar al <strong>Castillo Faro</strong> o la Iglesia de Santa María. Una combinación perfecta de naturaleza y patrimonio.
      </p>
    </li>

    <li class="flex flex-col gap-2">
      <div class="flex items-center text-blue-600 font-semibold">
        <i class="fas fa-ship mr-2"></i> Paseos en barco y pesca deportiva
      </div>
      <p>
        Participa en 
        <a href="https://www.yumping.com/paseos-en-barco/cantabria/castro-urdiales" 
           title="Excursiones en barco desde Castro-Urdiales" 
           class="text-blue-600 hover:underline" 
           target="_blank" rel="noopener">
           excursiones en barco
        </a> o salidas de pesca deportiva desde el puerto. La temporada alta va de <time datetime="2025-06">junio</time> a <time datetime="2025-09">septiembre</time>.
      </p>
    </li>

    <li class="flex flex-col gap-2">
      <div class="flex items-center text500 font-semibold">
        <i class="fas fa-volleyball-ball mr-2"></i> Actividades deportivas
      </div>
      <p>
        La playa dispone de zonas para <strong>voleibol playa, yoga y juegos infantiles</strong>. Un entorno perfecto para compartir en grupo o mantenerte activo.
      </p>
    </li>
  </ul>

  <!-- Carrusel visible solo en pantallas grandes -->
  <div class="hidden lg:block mt-10">
    <?php require PATH_BLOQUES_SECTIONS_CARRUSELES_CSV . '/prueba_shorts_hombre.php'; ?>
  </div>

</section>



<?php 
  //define('BLOQUES_PATH',  './../../../../bloques/estructura/sections_generico'); 
  //require PATH_BLOQUES_SECTIONS_CARRUSELES_CSV.'/prueba_atuendo.php'; 
  //require PATH_BLOQUES_SECTIONS_CARRUSELES_CSV.'/prueba_sneakers.php'; 
?>
