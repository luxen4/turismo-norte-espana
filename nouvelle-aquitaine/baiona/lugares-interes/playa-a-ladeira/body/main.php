<main>
  <h1 class="text-2xl md:text-3xl font-semibold text-blue-600 mb-4">
    🏖️ Playa de A Ladeira – Baiona:
    <span class="block mt-1 text-base md:text-lg text-blue-500 font-normal">
      Encanto natural en la costa gallega
    </span>
  </h1>

  <p class="mb-4 text-sm text-gray-700">
    La <strong class="text-gray-900">Playa de A Ladeira</strong>, ubicada en <span class="font-medium">Baiona</span>, Galicia, destaca por su arena dorada y aguas tranquilas, ideal para familias y quienes buscan relax en un entorno natural.
  </p>

  <p class="mb-6 text-sm text-gray-700">
    Con aproximadamente <span class="font-medium">1 km de longitud</span>, A Ladeira ofrece un paisaje privilegiado, rodeado de pinos y accesos cómodos para disfrutar del Atlántico gallego.
  </p>

  <?php $publicidad = PATH_BLOQUES_SECTIONS_CARRUSELES_CSV . '/prueba_sneakers.php'; ?>

  <section aria-label="Publicidad relacionada" class="mb-8">
    <div class="border border-gray-200 rounded shadow-sm bg-white p-4">
      <div class="text-center">
        <?php require $publicidad; ?>
      </div>
    </div>
  </section>

  <section aria-labelledby="servicios-baiona" class="mb-8">
    <h2 id="servicios-baiona" class="text-xl font-semibold text-blue-700 mb-3">
      Servicios en la Playa de A Ladeira
    </h2>
    <p class="mb-4 text-sm text-gray-700">
      Esta playa familiar cuenta con:
    </p>

    <ul class="list-none pl-0 space-y-2 text-gray-700 text-sm">
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-green-500" ...>
          <path d="M5 12l5 5L20 7"/>
        </svg>
        Accesos adaptados y pasarelas de madera
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-gray-500" ...>
          <path d="M3 7h18M3 12h18M3 17h18"/>
        </svg>
        Duchas y aseos públicos
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-yellow-500" ...>
          <path d="M12 2v20m9-9H3"/>
        </svg>
        Aparcamiento cercano y gratuito
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-indigo-500" ...>
          <path d="M4 6h16M4 12h16M4 18h16"/>
        </svg>
        Bares y restaurantes próximos al paseo marítimo
      </li>
    </ul>
  </section>

  <section aria-labelledby="actividades-baiona" class="mb-8">
    <h2 id="actividades-baiona" class="text-xl font-semibold text-blue-700 mb-3">
      Actividades en la Playa de A Ladeira
    </h2>

    <p class="mb-4 text-sm text-gray-700">
      A Ladeira es perfecta para disfrutar de:
    </p>

    <ul class="list-none pl-0 space-y-2 text-gray-700 text-sm">
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-blue-500" ...>
          <path d="M12 2a4 4 0 100 8 4 4 0 000-8zM4 20c1-4 5-6 8-6s7 2 8 6H4z"/>
        </svg>
        Natación y baño tranquilo
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-teal-500" ...>
          <path d="M12 2C6.5 2 2 12 2 12s4.5 10 10 10 10-10 10-10S17.5 2 12 2z"/>
        </svg>
        Paseos y senderismo costero
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-yellow-500" ...>
          <path d="M17 9V7H7v2h10zm0 4v-2H7v2h10zm0 4v-2H7v2h10z"/>
        </svg>
        Observación de la naturaleza y aves marinas
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-pink-500" ...>
          <path d="M9 12h6m-3-3v6m-7 4h14a2 2 0 002-2V5a2 2 0-00-2-2H5a2 2 0-00-2 2v14l4-4z"/>
        </svg>
        Relajación en áreas de césped y sombra natural
      </li>
    </ul>

    <p class="mb-4 text-sm text-gray-700">
      Un entorno ideal para familias y amantes de la naturaleza gallega.
    </p>
  </section>

  <!-- Galería de 4 imágenes -->
  <figure class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 my-8">
    <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_PLAYAS_IMG; ?>/playa-a-ladeira-baiona-1.jpg"
         alt="Vista panorámica de la Playa de A Ladeira en Baiona"
         class="aspect-video object-cover w-full rounded-lg shadow-sm" loading="lazy">
    <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_PLAYAS_IMG; ?>/playa-a-ladeira-baiona-2.jpg"
         alt="Zona de baño en A Ladeira"
         class="aspect-video object-cover w-full rounded-lg shadow-sm" loading="lazy">
    <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_PLAYAS_IMG; ?>/playa-a-ladeira-baiona-3.jpg"
         alt="Paseo cercano a la Playa de A Ladeira"
         class="aspect-video object-cover w-full rounded-lg shadow-sm" loading="lazy">
    <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_PLAYAS_IMG; ?>/playa-a-ladeira-baiona-4.jpg"
         alt="Vegetación y entorno natural alrededor de A Ladeira"
         class="aspect-video object-cover w-full rounded-lg shadow-sm" loading="lazy">
  </figure>

  <p class="mb-4 text-sm text-gray-700">Imágenes de la Playa de A Ladeira en Baiona</p>

  <p class="mb-4 text-sm text-gray-700">
    Ideal para quienes buscan naturaleza, tranquilidad y esencia gallega.
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
        <a href="tel:+34985242003" class="text-blue-500 hover:underline">+34 985 24 20 03</a>
      </li>
      <li>
        <strong>Sitio web:</strong>
        <a href="https://www.turismobaiona.com/" target="_blank" rel="noopener noreferrer" class="text-blue-500 hover:underline">
          turismobaiona.com
        </a>
      </li>
    </ul>
  </section>
  
  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/enlace-google-maps.php'; ?>
  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/anuncios/anuncios-fade-in.php'; ?>
  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/enlace-lugares-interes.php'; ?>
</main>
