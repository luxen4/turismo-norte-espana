<main>
  <h1 class="text-2xl md:text-3xl font-semibold text-blue-600 mb-4">
    🏖️ Playa de Gorliz:
    <span class="block mt-1 text-base md:text-lg text-blue-500 font-normal">
      Un rincón costero ideal para familias y deportes acuáticos en bizkaia
    </span>
  </h1>

  <p class="mb-4 text-sm text-gray-700">
    La <strong class="text-gray-900">Playa de Gorliz</strong>, situada en el municipio de <span class="font-medium">Gorliz</span>, bizkaia, es una playa amplia de arena fina y dorada, perfecta para familias y amantes de los deportes acuáticos. Cuenta con un agradable paseo marítimo y un entorno natural muy cuidado.
  </p>

  <p class="mb-6 text-sm text-gray-700">
    Con aproximadamente <span class="font-medium">1.3 kilómetros</span> de longitud, Gorliz ofrece servicios variados, acceso fácil y un ambiente tranquilo, siendo un destino muy popular en la costa vasca.
  </p>

  <?php $publicidad = PATH_BLOQUES_SECTIONS_CARRUSELES_CSV . '/prueba_sneakers.php'; ?>

  <section aria-label="Publicidad relacionada" class="mb-8">
    <div class="border border-gray-200 rounded shadow-sm bg-white p-4">
      <div class="text-center">
        <?php require $publicidad; ?>
      </div>
    </div>
  </section>

  <section aria-labelledby="servicios-gorliz" class="mb-8">
    <h2 id="servicios-gorliz" class="text-xl font-semibold text-blue-700 mb-3">
      Servicios en la Playa de Gorliz
    </h2>
    <p class="mb-4 text-sm text-gray-700">
      Esta playa está equipada con servicios para garantizar una estancia cómoda y segura:
    </p>

    <ul class="list-none pl-0 space-y-2 text-gray-700 text-sm">
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" stroke-width="2"
             viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path d="M5 12l5 5L20 7"/>
        </svg>
        Accesos adaptados para personas con movilidad reducida
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" stroke-width="2"
             viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path d="M3 7h18M3 12h18M3 17h18"/>
        </svg>
        Duchas, aseos y vestuarios públicos
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-yellow-500" fill="none" stroke="currentColor" stroke-width="2"
             viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path d="M12 2v20m9-9H3"/>
        </svg>
        Aparcamiento cercano y accesible
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-pink-500" fill="none" stroke="currentColor" stroke-width="2"
             viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path d="M4 6h16M4 12h16M4 18h16"/>
        </svg>
        Chiringuitos y cafeterías en las proximidades
      </li>
    </ul>
  </section>

  <section aria-labelledby="actividades-gorliz" class="mb-8">
    <h2 id="actividades-gorliz" class="text-xl font-semibold text-blue-700 mb-3">
      Actividades en la Playa de Gorliz
    </h2>

    <p class="mb-4 text-sm text-gray-700">
      En Gorliz podrás disfrutar de diversas actividades al aire libre y deportivas:
    </p>

    <ul class="list-none pl-0 space-y-2 text-gray-700 text-sm">
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 2a4 4 0 100 8 4 4 0 000-8zM4 20c1-4 5-6 8-6s7 2 8 6H4z"/>
        </svg>
        Surf y bodyboard
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-teal-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 2C6.5 2 2 12 2 12s4.5 10 10 10 10-10 10-10S17.5 2 12 2z"/>
        </svg>
        Paseos y senderismo por la costa
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
          <path d="M17 9V7H7v2h10zm0 4v-2H7v2h10zm0 4v-2H7v2h10z"/>
        </svg>
        Paseos en familia y juegos en la arena
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-purple-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
          <path d="M9 12h6m-3-3v6m-7 4h14a2 2 0 002-2V5a2 2 0-00-2-2H5a2 2 0-00-2 2v14l4-4z"/>
        </svg>
        Observación de aves y naturaleza en los alrededores
      </li>
    </ul>

    <p class="mb-4 text-sm text-gray-700">
      Gracias a su localización y servicios, la Playa de Gorliz es perfecta para disfrutar del mar y la naturaleza en cualquier época del año.
    </p>
  </section>

  <figure class="grid grid-cols-1 md:grid-cols-2 gap-4 my-8">
    <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_PLAYAS_IMG; ?>/playa-de-gorliz-1.jpg"
         alt="Vista aérea de la Playa de Gorliz"
         class="aspect-video object-cover w-full rounded-lg shadow-sm" loading="lazy">
    <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_PLAYAS_IMG; ?>/playa-de-gorliz-2.jpg"
         alt="Zona de arena y paseo marítimo en la Playa de Gorliz"
         class="aspect-video object-cover w-full rounded-lg shadow-sm" loading="lazy">
  </figure>

  <p class="mb-4 text-sm text-gray-700">Imágenes de la Playa de Gorliz, bizkaia</p>

  <p class="mb-4 text-sm text-gray-700">
    Disfruta de una de las playas más emblemáticas de la costa vasca, perfecta para el descanso, el deporte y el contacto con la naturaleza.
  </p>

  <div class="block lg:hidden">
    <iframe
      src="<?= PATH_HREF_RAIZ_BLOQUES . '/anuncios_derecha2.php' ?>"
      width="100%"
      height="640px"
      scrolling="no"
      style="border:1px solid #ccc; overflow:hidden;"
      title="Publicidad"
      frameborder="0"
      allowfullscreen>
    </iframe>
  </div>

  <section class="mb-6 text-gray-700">
    <h2 class="text-xl font-semibold text-blue-700 mb-2">📞 Información de contacto</h2>
    <ul class="list-none pl-0 space-y-1 text-gray-700 mb-6">
      <li>
        <strong>Teléfono:</strong>
        <a href="tel:+34944565500" class="text-blue-500 hover:underline">+34 944 56 55 00</a>
      </li>
      <li>
        <strong>Sitio web:</strong>
        <a href="https://www.gorliz.eus" target="_blank" rel="noopener noreferrer" class="text-blue-500 hover:underline">
          www.gorliz.eus
        </a>
      </li>
    </ul>
  </section>

  <?php require PATH_RAIZ_LOCALIDAD_LUGARES_INTERES_ESTRUCTURA_BODY_MAIN . '/enlace-google-maps.php'; ?>
  <?php require PATH_RAIZ_LOCALIDAD_LUGARES_INTERES_ESTRUCTURA_BODY_MAIN . '/anuncios/anuncios-fade-in.php'; ?>
  <?php require PATH_RAIZ_LOCALIDAD_LUGARES_INTERES_ESTRUCTURA_BODY_MAIN . '/enlace-lugares-interes.php'; ?>
</main>
