<main>
    <?php require PATH_RAIZ . '/_estructura/semantica/componentes/breadcrums-generico.php'; ?>
  <h1 class="text-2xl md:text-3xl font-semibold text-<?= COLOR_PAGE; ?>-600 mb-4">
    🥾 Ruta Senderista Deba – Zumaia:
    <span class="block mt-1 text-base md:text-lg text-<?= COLOR_PAGE; ?>-500 font-normal">
      Paisajes espectaculares del Geoparque de la Costa Vasca
    </span>
  </h1>

  <p class="mb-4 text-sm text-gray-700">
    La <strong class="text-gray-900">Ruta Senderista Deba – Zumaia</strong> atraviesa el Geoparque de la Costa Vasca, ofreciendo impresionantes vistas de los <span class="font-medium">acantilados y formaciones de Flysch</span>. Es un recorrido ideal para <span class="font-medium">senderismo, naturaleza y fotografía de paisaje</span>.
  </p>

  <p class="mb-6 text-sm text-gray-700">
    La ruta permite disfrutar de un entorno natural único y conocer de cerca la geología y biodiversidad del litoral guipuzcoano.
  </p>

  <?php $publicidad = PATH_BLOQUES_SECTIONS_CARRUSELES_CSV . '/prueba_sneakers.php'; ?>

  <section aria-label="Publicidad relacionada" class="mb-8">
    <div class="border border-gray-200 rounded shadow-sm bg-white p-4">
      <div class="text-center">
        <?php require $publicidad; ?>
      </div>
    </div>
  </section>

  <section aria-labelledby="informacion-ruta" class="mb-8">
    <h2 id="informacion-ruta" class="text-xl font-semibold text-<?= COLOR_PAGE; ?>-700 mb-3">
      Información de la Ruta Deba – Zumaia
    </h2>
    <p class="mb-4 text-sm text-gray-700">
      La ruta cuenta con señalización y accesos adecuados, ofreciendo seguridad y comodidad durante el recorrido:
    </p>

    <ul class="list-none pl-0 space-y-2 text-gray-700 text-sm">
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" stroke-width="2"
             viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path d="M5 12l5 5L20 7"/>
        </svg>
        Señalización de senderos
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" stroke-width="2"
             viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path d="M3 7h18M3 12h18M3 17h18"/>
        </svg>
        Puntos de descanso y miradores naturales
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-yellow-500" fill="none" stroke="currentColor" stroke-width="2"
             viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path d="M12 2v20m9-9H3"/>
        </svg>
        Información sobre geología y fauna local
      </li>
    </ul>
  </section>

  <section aria-labelledby="actividades-ruta" class="mb-8">
    <h2 id="actividades-ruta" class="text-xl font-semibold text-<?= COLOR_PAGE; ?>-700 mb-3">
      Actividades en la Ruta Deba – Zumaia
    </h2>

    <p class="mb-4 text-sm text-gray-700">
      Disfruta del recorrido realizando actividades en plena naturaleza:
    </p>

    <ul class="list-none pl-0 space-y-2 text-gray-700 text-sm">
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-<?= COLOR_PAGE; ?>-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 2a4 4 0 100 8 4 4 0 000-8zM4 20c1-4 5-6 8-6s7 2 8 6H4z"/>
        </svg>
        Observación de formaciones geológicas Flysch
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-teal-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 2C6.5 2 2 12 2 12s4.5 10 10 10 10-10 10-10S17.5 2 12 2z"/>
        </svg>
        Senderismo por acantilados y bosques costeros
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
          <path d="M17 9V7H7v2h10zm0 4v-2H7v2h10zm0 4v-2H7v2h10z"/>
        </svg>
        Fotografía de paisajes y fauna
      </li>
    </ul>

    <p class="mb-4 text-sm text-gray-700">
      Ideal para un día de contacto con la naturaleza y exploración costera.
    </p>
  </section>

  <figure class="grid grid-cols-1 md:grid-cols-2 gap-4 my-8">
    <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/ruta-senderista-deba-zumaia-1.jpg"
         alt="Vista del Flysch desde la Ruta Senderista Deba – Zumaia"
         class="aspect-video object-cover w-full rounded-lg shadow-sm" loading="lazy"> <?php /* https://masrutasymenosrutinas.com/ruta-del-flysch-de-zumaia-a-deba/ */ ?>
    <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/ruta-senderista-deba-zumaia-2.jpg"
         alt="Paisaje costero de la Ruta Senderista Deba – Zumaia"
         class="aspect-video object-cover w-full rounded-lg shadow-sm" loading="lazy"><?php /* https://inviernoenlaplaya.com/ruta-del-flysch-deba-zumaia/ */ ?>
  </figure>

  <p class="mb-4 text-sm text-gray-700">Imágenes de la Ruta Senderista Deba – Zumaia (Gipuzkoa)</p>

  <p class="mb-4 text-sm text-gray-700">
    Una experiencia única de senderismo con vistas al mar Cantábrico y la geología del Flysch.
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
