<main>
    <?php require PATH_RAIZ . '/_estructura/semantica/componentes/breadcrums-generico.php'; ?>
  
  <h1 class="text-2xl md:text-3xl font-semibold text-blue-600 mb-4">
    🏄‍♂️ Playa de la Côte des Basques:
    <span class="block mt-1 text-base md:text-lg text-blue-500 font-normal">
      El paraíso del surf en Biarritz
    </span>
  </h1>

  <p class="mb-4 text-sm text-gray-700">
    La <strong class="text-gray-900">Playa de la Côte des Basques</strong>, situada en Biarritz (Francia), es uno de los spots de surf más famosos de Europa, conocida por sus impresionantes vistas y su entorno natural.
  </p>

  <p class="mb-6 text-sm text-gray-700">
    Con su extensa franja de arena durante la marea baja y sus altos acantilados, es un lugar perfecto para surfistas, paseos panorámicos y disfrutar del océano Atlántico en estado puro.
  </p>

  <?php $publicidad = PATH_BLOQUES_SECTIONS_CARRUSELES_CSV . '/prueba_sneakers.php'; ?>

  <section aria-label="Publicidad relacionada" class="mb-8">
    <div class="border border-gray-200 rounded shadow-sm bg-white p-4">
      <div class="text-center">
        <?php require $publicidad; ?>
      </div>
    </div>
  </section>

  <section aria-labelledby="servicios-cote-des-basques" class="mb-8">
    <h2 id="servicios-cote-des-basques" class="text-xl font-semibold text-blue-700 mb-3">
      Servicios en la Côte des Basques
    </h2>

    <ul class="list-none pl-0 space-y-2 text-gray-700 text-sm">
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-green-500" ...>
          <path d="M5 12l5 5L20 7"/>
        </svg>
        Acceso peatonal desde Biarritz centro
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-gray-500" ...>
          <path d="M3 7h18M3 12h18M3 17h18"/>
        </svg>
        Zona vigilada en temporada
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-yellow-500" ...>
          <path d="M12 2v20m9-9H3"/>
        </svg>
        Miradores naturales en acantilados
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-indigo-500" ...>
          <path d="M4 6h16M4 12h16M4 18h16"/>
        </svg>
        Escuela de surf y alquiler de material cercano
      </li>
    </ul>
  </section>

  <section aria-labelledby="actividades-cote-des-basques" class="mb-8">
    <h2 id="actividades-cote-des-basques" class="text-xl font-semibold text-blue-700 mb-3">
      Actividades en la Côte des Basques
    </h2>

    <ul class="list-none pl-0 space-y-2 text-gray-700 text-sm">
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-blue-500" ...>
          <path d="M12 2a4 4 0 100 8 4 4 0 000-8zM4 20c1-4 5-6 8-6s7 2 8 6H4z"/>
        </svg>
        Surf de nivel internacional
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-teal-500" ...>
          <path d="M12 2C6.5 2 2 12 2 12s4.5 10 10 10 10-10 10-10S17.5 2 12 2z"/>
        </svg>
        Paseos por los acantilados
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-yellow-500" ...>
          <path d="M17 9V7H7v2h10zm0 4v-2H7v2h10zm0 4v-2H7v2h10z"/>
        </svg>
        Fotografía de paisajes y olas
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-pink-500" ...>
          <path d="M9 12h6m-3-3v6m-7 4h14a2 2 0 002-2V5a2 2 0-00-2-2H5a2 2 0-00-2 2v14l4-4z"/>
        </svg>
        Atardeceres sobre el Atlántico
      </li>
    </ul>

    <p class="mb-4 text-sm text-gray-700">
      Una playa salvaje, ideal para desconectar y disfrutar del mar en estado puro.
    </p>
  </section>

  <!-- Galería de 4 imágenes -->
  <figure class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 my-8">
    <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/cote-des-basques-biarritz-nouvelle-aquitaine-1.jpg"
         alt="Vista panorámica de la Côte des Basques"
         class="aspect-video object-cover w-full rounded-lg shadow-sm" loading="lazy">
    <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/cote-des-basques-biarritz-nouvelle-aquitaine-2.jpg"
         alt="Surfistas en la Côte des Basques"
         class="aspect-video object-cover w-full rounded-lg shadow-sm" loading="lazy">
    <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/cote-des-basques-biarritz-nouvelle-aquitaine-3.jpg"
         alt="Acantilados de la Côte des Basques"
         class="aspect-video object-cover w-full rounded-lg shadow-sm" loading="lazy">
    <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/cote-des-basques-biarritz-nouvelle-aquitaine-4.jpg"
         alt="Atardecer en la Côte des Basques"
         class="aspect-video object-cover w-full rounded-lg shadow-sm" loading="lazy">
  </figure>

  <p class="mb-4 text-sm text-gray-700">Imágenes de la Côte des Basques en Biarritz</p>

  <p class="mb-4 text-sm text-gray-700">
    Uno de los lugares más icónicos del surf europeo y una parada obligatoria en Biarritz.
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
        <strong>Teléfono oficina de turismo:</strong>
        <a href="tel:+33559222007" class="text-blue-500 hover:underline">+33 5 59 22 20 07</a>
      </li>
      <li>
        <strong>Sitio web:</strong>
        <a href="https://tourisme.biarritz.fr/" target="_blank" rel="noopener noreferrer" class="text-blue-500 hover:underline">
          tourisme.biarritz.fr
        </a>
      </li>
    </ul>
  </section>
  
  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/enlace-google-maps.php'; ?>
  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/anuncios/anuncios-fade-in.php'; ?>
  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/enlace-lugares-interes.php'; ?>
</main>