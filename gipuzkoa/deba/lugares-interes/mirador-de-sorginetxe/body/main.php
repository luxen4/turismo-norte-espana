<main>
    <?php require PATH_RAIZ . '/_estructura/semantica/componentes/breadcrums-generico.php'; ?>
  <h1 class="text-2xl md:text-3xl font-semibold text-emerald-600 mb-4">
    🌄 Mirador de Sorginetxe en Deba:
    <span class="block mt-1 text-base md:text-lg text-emerald-500 font-normal">
      Naturaleza y vistas espectaculares de la costa vasca
    </span>
  </h1>

  <p class="mb-4 text-sm text-gray-700">
    El <strong class="text-gray-900">Mirador de Sorginetxe</strong>, ubicado en <span class="font-medium">Deba</span>, Gipuzkoa, es uno de los rincones más impresionantes de la costa vasca. 
    Desde este punto elevado se pueden contemplar los <span class="font-medium">acantilados y panorámicas únicas</span> del mar Cantábrico y del Geoparque de la Costa Vasca.
  </p>

  <p class="mb-6 text-sm text-gray-700">
    Es un lugar ideal para los amantes de la <span class="font-medium">naturaleza, la fotografía y el senderismo</span>, ofreciendo un entorno tranquilo y vistas inolvidables.
  </p>

  <?php $publicidad = PATH_BLOQUES_SECTIONS_CARRUSELES_CSV . '/prueba_sneakers.php'; ?>

  <section aria-label="Publicidad relacionada" class="mb-8">
    <div class="border border-gray-200 rounded shadow-sm bg-white p-4">
      <div class="text-center">
        <?php require $publicidad; ?>
      </div>
    </div>
  </section>

  <section aria-labelledby="servicios-sorginetxe" class="mb-8">
    <h2 id="servicios-sorginetxe" class="text-xl font-semibold text-emerald-700 mb-3">
      Servicios en el Mirador de Sorginetxe
    </h2>
    <p class="mb-4 text-sm text-gray-700">
      El mirador cuenta con accesos y señalización para facilitar la visita:
    </p>

    <ul class="list-none pl-0 space-y-2 text-gray-700 text-sm">
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" stroke-width="2"
             viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path d="M5 12l5 5L20 7"/>
        </svg>
        Acceso a pie mediante rutas de senderismo
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" stroke-width="2"
             viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path d="M3 7h18M3 12h18M3 17h18"/>
        </svg>
        Paneles informativos del entorno natural
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-yellow-500" fill="none" stroke="currentColor" stroke-width="2"
             viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path d="M12 2v20m9-9H3"/>
        </svg>
        Zona de observación panorámica
      </li>
    </ul>
  </section>

  <section aria-labelledby="actividades-sorginetxe" class="mb-8">
    <h2 id="actividades-sorginetxe" class="text-xl font-semibold text-emerald-700 mb-3">
      Actividades en el Mirador de Sorginetxe
    </h2>

    <p class="mb-4 text-sm text-gray-700">
      Descubre este entorno único a través de actividades en contacto con la naturaleza:
    </p>

    <ul class="list-none pl-0 space-y-2 text-gray-700 text-sm">
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-emerald-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 2a4 4 0 100 8 4 4 0 000-8zM4 20c1-4 5-6 8-6s7 2 8 6H4z"/>
        </svg>
        Observación de la naturaleza y la geología
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
        Fotografía panorámica y paisajística
      </li>
    </ul>

    <p class="mb-4 text-sm text-gray-700">
      Un espacio perfecto para desconectar y disfrutar de la belleza natural de Deba.
    </p>
  </section>

  <figure class="grid grid-cols-1 md:grid-cols-2 gap-4 my-8">
    <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/mirador-de-sorginetxe-deba-gipuzkoa-1.jpg"
         alt="Vistas desde el Mirador de Sorginetxe en Deba"
         class="aspect-video object-cover w-full rounded-lg shadow-sm" loading="lazy">
    <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/mirador-de-sorginetxe-deba-gipuzkoa-2.png"
         alt="Mirador de Sorginetxe en los acantilados de Deba"
         class="aspect-video object-cover w-full rounded-lg shadow-sm" loading="lazy">
  </figure>

  <p class="mb-4 text-sm text-gray-700">Imágenes del Mirador de Sorginetxe en Deba (Gipuzkoa)</p>

  <p class="mb-4 text-sm text-gray-700">
    Vive una experiencia inolvidable en este balcón natural sobre el mar Cantábrico.
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
    <h2 class="text-xl font-semibold text-emerald-700 mb-2">📞 Información de contacto</h2>
    <ul class="list-none pl-0 space-y-1 text-gray-700 mb-6">
      <li>
        <strong>Teléfono:</strong>
        <a href="tel:+34943567012" class="text-emerald-500 hover:underline">+34 943 56 70 12</a>
      </li>
      <li>
        <strong>Sitio web:</strong>
        <a href="https://www.deba.eus" target="_blank" rel="noopener noreferrer" class="text-emerald-500 hover:underline">
          www.deba.eus
        </a>
      </li>
    </ul>
  </section>

  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/enlace-google-maps.php'; ?>
  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/anuncios/anuncios-fade-in.php'; ?>
  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/enlace-lugares-interes.php'; ?>
</main>
