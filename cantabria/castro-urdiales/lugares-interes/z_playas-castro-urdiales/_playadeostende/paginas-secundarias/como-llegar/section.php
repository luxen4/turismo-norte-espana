<?php require PATH_RAIZ_ESTRUCTURA_PAGINAS_PRINCIPALES_BODY_MAIN . '/breadcrums-playa.php'; ?>

<article itemscope itemtype="https://schema.org/Article">
  <meta itemprop="author" content=<?= AUTHOR; ?> />
  <meta itemprop="datePublished" content="<?= $hoy; ?>" />
  <meta itemprop="dateModified" content="2025-06-02" />
  <meta itemprop="inLanguage" content="es-ES" />
  <meta itemprop="headline" content="Senderos costeros señalizados en Playa de Ostende" />
  <meta itemprop="mainEntityOfPage" content="https://alayag82.kesug.com/turismo-norte-espana/senderos-costeros-ostende/" />
  <meta itemprop="image" content="https://alayag82.kesug.com/turismo-norte-espana/cantabria/castrourdiales/img/senderismo-naturaleza-Castro-Urdiales-Cantabria.jpg" />

  <div itemprop="articleBody">

    <section id="como-llegar-ostende" class="container">

      <!-- Cabecera -->
      <header class="text-center mb-4">
        <h1 class="text-success">🗺️ Cómo llegar a la Playa de Ostende</h1>
        <p>
          Descubre las <strong>mejores rutas para acceder a la Playa de Ostende</strong> en
          <a href="https://es.wikipedia.org/wiki/Castro-Urdiales" title="Más sobre Castro Urdiales">
            Castro Urdiales, Cantabria
          </a>. Accesible en coche, transporte público, bicicleta o caminando, esta playa urbana te espera con todo tipo de servicios.
        </p>
      </header>

      <div class="info-box">
        <ul class="list-unstyled">
          <li>
            <i class="fas fa-car" style="color:#3498db;"></i>
            <strong>En coche:</strong><br>
            Desde <strong>Santander</strong>, toma la <abbr title="Autovía del Cantábrico">A-67</abbr> (dirección Bilbao) y continúa durante unos 25 minutos. Hay <em>aparcamientos gratuitos y de pago</em> a 5 minutos a pie de la playa.
          </li>
          <li>
            <i class="fas fa-bus" style="color:#e67e22;"></i>
            <strong>En autobús:</strong><br>
            Conexiones regulares con
            <a href="https://www.bizkaia.eus/es/web/bizkaibus" target="_blank" rel="noopener noreferrer" style="color:#2980b9;" title="Horarios Bizkaibus">Bizkaibus</a>
            desde Bilbao, Santander y localidades cercanas. La parada <em>“Ostende Playa”</em> se encuentra muy próxima al acceso principal.
          </li>
          <li>
            <i class="fas fa-bicycle" style="color:#2ecc71;"></i>
            <strong>A pie o en bicicleta:</strong><br>
            Disfruta del paseo por los

            <?php

            if ($_SERVER['SERVER_NAME'] == "localhost") { ?>
              <a href="<?= PATH_HREF_RAIZ ?>/ruta-costera-ostende" style="color:#2980b9;" title="Ruta costera">senderos costeros señalizados</a> <?php
                                                                                                                                                } else { ?>
              <a href="./../senderos-costeros-senalizados/index.php" style="color:#2980b9;" title="Ruta costera">senderos costeros señalizados</a><?php
                                                                                                                                                  }?>
            ,
            ideales para caminar o pedalear desde el centro urbano (20 minutos aprox.).
          </li>
        </ul>
      </div>

      <h5 class="mt-5 mb-3 text-primary"><i class="fas fa-map"></i> Mapa interactivo</h5>
      <div class="map-responsive mb-4">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5831.651444241797!2d-3.8591253222141294!3d43.45938808069519!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd493580c7f8b1cf%3A0x4f643bc98d20e61e!2sPlaya%20de%20Ostende!5e0!3m2!1ses!2ses!4v1692110560672!5m2!1ses!2ses" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Ubicación Playa de Ostende">
        </iframe>
      </div>

      <p class="text-center">
        ¿Desde otro punto? Usa
        <a href="https://www.google.com/maps/dir//Playa+de+Ostende" target="_blank" rel="noopener noreferrer" title="Ruta en Google Maps" style="color:#2980b9;">
          Google Maps
        </a> para trazar tu ruta personalizada.
      </p>
    </section>
  </div>
</article>