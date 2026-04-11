<main>
    <?php require PATH_RAIZ . '/_estructura/semantica/componentes/breadcrums-generico.php'; ?>
  <h1 class="text-2xl md:text-3xl font-semibold text-<?= COLOR_PAGE; ?>-600 mb-4">
    ⛪ Ermita de San Telmo en Deba:
    <span class="block mt-1 text-base md:text-lg text-<?= COLOR_PAGE; ?>-500 font-normal">
      Patrimonio cultural y mirador sobre el Cantábrico
    </span>
  </h1>

  <p class="mb-4 text-sm text-gray-700">
    La <strong class="text-gray-900">Ermita de San Telmo</strong>, ubicada en <span class="font-medium">Deba</span>, Gipuzkoa, es uno de los rincones más emblemáticos de la costa vasca. 
    Situada en lo alto de los acantilados, ofrece unas <span class="font-medium">vistas espectaculares</span> del mar Cantábrico y conserva un gran valor histórico y cultural.
  </p>

  <p class="mb-6 text-sm text-gray-700">
    Este templo, ligado a la tradición marinera, es un lugar perfecto para quienes buscan <span class="font-medium">conectar con la espiritualidad, la naturaleza y la historia</span> de la costa guipuzcoana.
  </p>

  <?php $publicidad = PATH_BLOQUES_SECTIONS_CARRUSELES_CSV . '/prueba_sneakers.php'; ?>

  <section aria-label="Publicidad relacionada" class="mb-8">
    <div class="border border-gray-200 rounded shadow-sm bg-white p-4">
      <div class="text-center">
        <?php require $publicidad; ?>
      </div>
    </div>
  </section>

  <section aria-labelledby="servicios-san-telmo" class="mb-8">
    <h2 id="servicios-san-telmo" class="text-xl font-semibold text-<?= COLOR_PAGE; ?>-700 mb-3">
      Servicios en la Ermita de San Telmo
    </h2>
    <p class="mb-4 text-sm text-gray-700">
      La ermita cuenta con accesos y servicios básicos para los visitantes:
    </p>

    <ul class="list-none pl-0 space-y-2 text-gray-700 text-sm">
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" stroke-width="2"
             viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path d="M5 12l5 5L20 7"/>
        </svg>
        Acceso peatonal desde el casco urbano
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" stroke-width="2"
             viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path d="M3 7h18M3 12h18M3 17h18"/>
        </svg>
        Paneles informativos y señalización
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-yellow-500" fill="none" stroke="currentColor" stroke-width="2"
             viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path d="M12 2v20m9-9H3"/>
        </svg>
        Miradores con vistas al mar
      </li>
    </ul>
  </section>

  <section aria-labelledby="actividades-san-telmo" class="mb-8">
    <h2 id="actividades-san-telmo" class="text-xl font-semibold text-<?= COLOR_PAGE; ?>-700 mb-3">
      Actividades en la Ermita de San Telmo
    </h2>

    <p class="mb-4 text-sm text-gray-700">
      Disfruta de este entorno único con actividades culturales y naturales:
    </p>

    <ul class="list-none pl-0 space-y-2 text-gray-700 text-sm">
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-<?= COLOR_PAGE; ?>-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 2a4 4 0 100 8 4 4 0 000-8zM4 20c1-4 5-6 8-6s7 2 8 6H4z"/>
        </svg>
        Visitas culturales y religiosas
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-teal-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 2C6.5 2 2 12 2 12s4.5 10 10 10 10-10 10-10S17.5 2 12 2z"/>
        </svg>
        Rutas de senderismo por los acantilados
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
          <path d="M17 9V7H7v2h10zm0 4v-2H7v2h10zm0 4v-2H7v2h10z"/>
        </svg>
        Fotografía panorámica
      </li>
    </ul>

    <p class="mb-4 text-sm text-gray-700">
      Un espacio ideal para la contemplación y el contacto con la naturaleza.
    </p>
  </section>

  <figure class="grid grid-cols-1 md:grid-cols-2 gap-4 my-8">
    <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/ermita-san-telmo-deba-1.jpg"
         alt="Vista de la Ermita de San Telmo en Deba"
         class="aspect-video object-cover w-full rounded-lg shadow-sm" loading="lazy">
    <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/ermita-san-telmo-deba-2.jpg"
         alt="Ermita de San Telmo en los acantilados de Deba"
         class="aspect-video object-cover w-full rounded-lg shadow-sm" loading="lazy">
  </figure>

  <p class="mb-4 text-sm text-gray-700">Imágenes de la Ermita de San Telmo en Deba (Gipuzkoa)</p>

  <p class="mb-4 text-sm text-gray-700">
    Descubre uno de los rincones más especiales de la costa vasca.
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
    <h2 class="text-xl font-semibold text-<?= COLOR_PAGE; ?>-700 mb-2">📞 Información de contacto</h2>
    <ul class="list-none pl-0 space-y-1 text-gray-700 mb-6">
      <li>
        <strong>Teléfono:</strong>
        <a href="tel:+34943567012" class="text-<?= COLOR_PAGE; ?>-500 hover:underline">+34 943 56 70 12</a>
      </li>
      <li>
        <strong>Sitio web:</strong>
        <a href="https://www.deba.eus" target="_blank" rel="noopener noreferrer" class="text-<?= COLOR_PAGE; ?>-500 hover:underline">
          www.deba.eus
        </a>
      </li>
    </ul>
  </section>

  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/enlace-google-maps.php'; ?>
  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/anuncios/anuncios-fade-in.php'; ?>
  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/enlace-lugares-interes.php'; ?>
</main>
