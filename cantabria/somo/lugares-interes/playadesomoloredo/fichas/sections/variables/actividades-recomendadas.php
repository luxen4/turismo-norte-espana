<section id="actividades" class="seccion-actividades container py-5">

  <div class="info-box">

    <!-- Cabecera -->
    <header class="text-center mb-4">
      <h1 class="text-primary">🏄‍♀️ Actividades Recomendadas</h1>
      <p>
        Descubre las <strong>mejores actividades turísticas y deportivas</strong> que ofrece la Playa de Somo-Loredo en 
        <a href="https://es.wikipedia.org/wiki/Somo_(Cantabria)" title="Más sobre Somo en Cantabria" target="_blank">
          Cantabria
        </a>. Un destino imprescindible para los amantes del surf, la naturaleza y el turismo activo.
      </p>
    </header>

    <!-- Descripción General -->
    <div class="mb-4">
      <h5><i class="fas fa-sun me-2" style="color: #f1c40f;"></i>Deportes y Naturaleza en la Playa de Somo-Loredo</h5>
      <p>
        La <strong>Playa de Somo-Loredo</strong> es considerada uno de los <strong>mejores spots de surf de España</strong>, 
        con olas constantes y extensas áreas de arena ideales para la práctica de <strong>surf, bodyboard y paddle surf</strong>.
      </p>
      <p>
        En la zona encontrarás múltiples 
        <a href="https://escueladesurf.es/" target="_blank" rel="noopener noreferrer" title="Escuelas de Surf en Somo">
          escuelas de surf
        </a> que ofrecen clases para todos los niveles, así como alquiler de tablas, neoprenos y SUP.
      </p>
      <p>
        <i class="fas fa-calendar-alt me-2" style="color: #e67e22;"></i>
        A lo largo del año se celebran <strong>eventos deportivos y festivales</strong> relacionados con el surf, la música y la sostenibilidad.
      </p>
    </div>

    <!-- Lista de actividades -->
    <ul class="list-unstyled">
      <li class="my-4">
        <i class="fas fa-water me-2" style="color: #1abc9c;"></i>
        <strong>Surf y Paddle Surf en Somo:</strong><br>
        Somo es una <strong>Reserva Natural del Surf</strong> reconocida por sus excelentes olas. Ideal para <strong>surfistas novatos y avanzados</strong>. 
        Actividades disponibles todo el año, con mayor afluencia de <time datetime="2025-06">junio</time> a <time datetime="2025-09">septiembre</time>.
      </li>

      <li class="my-4">
        <i class="fas fa-hiking me-2" style="color: #27ae60;"></i>
        <strong>Senderismo por la Costa Quebrada:</strong><br>
        Disfruta de <strong>rutas costeras</strong> entre Somo, Loredo y Langre, con acantilados, miradores y naturaleza virgen. 
        Consulta nuestros 
        <a href="https://www.turismodecantabria.com" 
           title="Rutas de senderismo en Cantabria" 
           target="_blank" 
           rel="noopener"
           style="color:#2980b9;">
          itinerarios recomendados
        </a>. Ideal entre <time datetime="2025-04">abril</time> y <time datetime="2025-10">octubre</time>.
      </li>

      <li class="my-4">
        <i class="fas fa-ship me-2" style="color: #3498db;"></i>
        <strong>Rutas en barco a Santander:</strong><br>
        Desde el puerto de Somo puedes tomar <strong>barcos turísticos hasta Santander</strong>, disfrutando de la bahía, sus playas y la vista del Palacio de la Magdalena. Servicio activo todo el año, con mayor frecuencia en verano.
      </li>

      <li class="my-4">
        <i class="fas fa-volleyball-ball me-2" style="color: #e67e22;"></i>
        <strong>Vóley Playa y Actividades al Aire Libre:</strong><br>
        La playa cuenta con <strong>zonas habilitadas para vóley playa</strong> y espacio suficiente para yoga, juegos y picnics. Ideal para disfrutar en grupo o familia.
      </li>
    </ul>

  </div>

  <!-- Carrusel solo visible en escritorio -->
  <div class="solo-escritorio">
    <?php PATH_BLOQUES_SECTIONS_CARRUSELES_CSV.'/prueba_shorts_hombre.php'; ?>
  </div>

  <style>
    @media (max-width: 768px) {
      .solo-escritorio {
        display: none;
      }
    }

    header h1 {
      margin: 1em;
    }
  </style>

</section>
