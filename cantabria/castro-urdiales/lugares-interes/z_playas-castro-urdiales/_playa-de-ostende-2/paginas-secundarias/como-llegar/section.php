<?php require PATH_RAIZ . '/_estructura/semantica/breadcrums-playa.php'; ?>

<article itemscope itemtype="https://schema.org/Article" class="w-full">
  <meta itemprop="author" content=<?= AUTHOR; ?> />
  <meta itemprop="datePublished" content="<?= $hoy; ?>" />
  <meta itemprop="dateModified" content="<?= $hoy; ?>" />
  <meta itemprop="inLanguage" content="es-ES" />
  <meta itemprop="headline" content="Senderos costeros señalizados en Playa de Ostende" />
  <meta itemprop="mainEntityOfPage" content="https://Playas2026.kesug.com/Blog_Playas2026/senderos-costeros-ostende/" />
  <meta itemprop="image" content="https://Playas2026.kesug.com/Blog_Playas2026/cantabria/castrourdiales/img/senderismo-naturaleza-Castro-Urdiales-Cantabria.jpg" />

  <div itemprop="articleBody" class="w-full bg-white px-4 md:px-10 py-8 mx-auto max-w-screen-xl">

    <!-- Sección Cómo llegar -->
    <section id="como-llegar-ostende" class="w-full">

      <!-- Cabecera -->
      <header class="text-center mb-6">
        <h1 class="text-2xl md:text-3xl font-bold text-green-600 mb-2">🗺️ Cómo llegar a la Playa de Ostende</h1>
        <p class="text-gray-700 max-w-3xl mx-auto">
          Descubre las <strong>mejores rutas para acceder a la Playa de Ostende</strong> en 
          <a href="https://es.wikipedia.org/wiki/Castro-Urdiales" class="text-blue-600 hover:underline" title="Más sobre Castro Urdiales" target="_blank" rel="noopener">
            Castro Urdiales, Cantabria
          </a>. Accesible en coche, transporte público, bicicleta o caminando, esta playa urbana te espera con todo tipo de servicios.
        </p>
      </header>

      <!-- Información de acceso -->
      <div class="bg-gray-100 rounded-xl p-6 shadow-sm text-gray-800">
        <ul class="space-y-6">
          <li class="flex items-start gap-3">
            <i class="fas fa-car text-blue-500 text-xl mt-1"></i>
            <div>
              <strong class="text-base">En coche:</strong><br>
              Desde <strong>Santander</strong>, toma la <abbr title="Autovía del Cantábrico">A-67</abbr> (dirección Bilbao) y continúa durante unos 25 minutos. Hay <em>aparcamientos gratuitos y de pago</em> a 5 minutos a pie de la playa.
            </div>
          </li>

          <li class="flex items-start gap-3">
            <i class="fas fa-bus text-orange-500 text-xl mt-1"></i>
            <div>
              <strong class="text-base">En autobús:</strong><br>
              Conexiones regulares con 
              <a href="https://www.bizkaia.eus/es/web/bizkaibus" class="text-blue-600 hover:underline" target="_blank" rel="noopener" title="Horarios Bizkaibus">Bizkaibus</a> 
              desde Bilbao, Santander y localidades cercanas. La parada <em>“Ostende Playa”</em> se encuentra muy próxima al acceso principal.
            </div>
          </li>

          <li class="flex items-start gap-3">
            <i class="fas fa-bicycle text-green-500 text-xl mt-1"></i>
            <div>
              <strong class="text-base">A pie o en bicicleta:</strong><br>
              Disfruta del paseo por los 
              <?php if ($_SERVER['SERVER_NAME'] == "localhost") { ?>
                <a href="<?= PATH_HREF_RAIZ ?>/ruta-costera-ostende" class="text-blue-600 hover:underline" title="Ruta costera">senderos costeros señalizados</a>
              <?php } else { ?>
                <a href="./../senderos-costeros-senalizados/index.php" class="text-blue-600 hover:underline" title="Ruta costera">senderos costeros señalizados</a>
              <?php } ?>,
              ideales para caminar o pedalear desde el centro urbano (20 minutos aprox.).
            </div>
          </li>
        </ul>
      </div>

      <!-- Mapa interactivo -->
      <div class="mt-10">
        <h2 class="text-xl font-semibold text-blue-700 mb-3 flex items-center gap-2">
          <i class="fas fa-map text-blue-500"></i> Mapa interactivo
        </h2>
        <div class="aspect-w-16 aspect-h-9 mb-6 rounded-xl overflow-hidden shadow-lg">
          <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5831.651444241797!2d-3.8591253222141294!3d43.45938808069519!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd493580c7f8b1cf%3A0x4f643bc98d20e61e!2sPlaya%20de%20Ostende!5e0!3m2!1ses!2ses!4v1692110560672!5m2!1ses!2ses" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade" 
            class="w-full h-full border-0" 
            allowfullscreen 
            title="Ubicación Playa de Ostende">
          </iframe>
        </div>

        <p class="text-center text-gray-700">
          ¿Desde otro punto? Usa 
          <a href="https://www.google.com/maps/dir//Playa+de+Ostende" 
             target="_blank" rel="noopener noreferrer" 
             class="text-blue-600 hover:underline" 
             title="Ruta en Google Maps">
            Google Maps
          </a> para trazar tu ruta personalizada.
        </p>
      </div>
    </section>
  </div>
</article>
