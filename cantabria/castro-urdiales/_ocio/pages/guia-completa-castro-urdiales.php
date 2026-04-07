<?php $region = "Cantabria"; $region_minuscula = strtolower($region); $localidad_minuscula = 'castro-urdiales';  $localidad_minuscula = "Castro-Urdiales"; lugar_minuscula='eventos';?>
<?php require $_SERVER['DOCUMENT_ROOT'] . "/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/ocio/pages/previo.php"; ?>


<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Guía completa de Castro-Urdiales | Turismo en <?= $region; ?></title>
  <meta name="description" content="Guía completa para visitar Castro-Urdiales en Cantabria: historia, monumentos, rutas naturales, gastronomía, eventos y alojamiento. Todo lo que necesitas saber para disfrutar esta joya costera." />
  <meta name="keywords" content="Castro-Urdiales, Cantabria, turismo, guía completa, playas, rutas costeras, gastronomía, eventos, alojamiento" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />
  <style>
    .icon-color { color: #2c3e50; }
    .icon-history { color: #d35400; }
    .icon-nature { color: #27ae60; }
    .icon-food { color: #c0392b; }
    .icon-events { color: #2980b9; }
    .icon-accommodation { color: #8e44ad; }
    a.external::after {
      content: " \f08e";
      font-family: "Font Awesome 6 Free"; font-weight: 900;
      margin-left: 0.2em;
      color: #7f8c8d;
    }
  </style>





    <?php require PATH_RAIZ_LOCALIDADES_OCIO_SCHEMAS_HEAD . "/schema-org_guia-completa-head.php"; ?>

</head>
<body>
  <main class="container py-5">
    <header class="mb-5 text-center">
      <h1 class="display-4 text-primary"><i class="fas fa-map-marker-alt icon-color"></i> Guía completa de <?= $localidad_minuscula; ?></h1>
      <p class="lead text-secondary">Descubre todo sobre esta joya costera de <?= $region; ?>: historia, rutas, gastronomía, eventos y alojamiento.</p>
    </header>

    <section id="historia" class="mb-5">
      <h2><i class="fas fa-landmark icon-history"></i> Historia y Patrimonio</h2>
      <p>
        Fundada en época romana como <em>Flaviobriga</em>, <?= $localidad_minuscula; ?> conserva vestigios arqueológicos prehistóricos y romanos, como la <strong>Peña del Cuco</strong>. Su casco histórico medieval está declarado Bien de Interés Cultural, con calles estrechas y arquitectura gótica impresionante.
      </p>
      <ul>
        <li><strong>Iglesia de Santa María de la Asunción:</strong> gótico entre los siglos XIII y XV.</li>
        <li><strong>Castillo-Faro de Santa Ana:</strong> fortaleza medieval con faro del siglo XIX.</li>
        <li><strong>Puente Romano-Medieval:</strong> histórico paso sobre el río.</li>
        <li><strong>Ermita de Santa Ana:</strong> con vistas al mar desde un saliente rocoso.</li>
      </ul>
      <p>Más detalles en el sitio oficial: 
        <a href="<?= $url_ayuntamiento; ?>" target="_blank" rel="noopener noreferrer" class="external">Ayuntamiento de Castro-Urdiales</a>
      </p>
    </section>

    <section id="rutas" class="mb-5">
      <h2><i class="fas fa-route icon-nature"></i> Rutas y Naturaleza</h2>
      <p>
        La zona ofrece múltiples rutas costeras y senderos señalizados para disfrutar de paisajes naturales, acantilados y playas.
      </p>
      <ul>
        <li><strong>Senderos costeros señalizados:</strong> paseos con vistas al Cantábrico.</li>
        <li><strong>Ruta al Monte Cueto:</strong> para los amantes del trekking con vistas panorámicas.</li>
        <li><strong>Playas:</strong> Brazomar, Ostende y pequeñas calas vírgenes.</li>
        <li><strong>Camino de Santiago de la Costa:</strong> pasa por Castro-Urdiales.</li>
      </ul>
      <p>Consulta más en: 
        <a href="<?= $url_turismo_cantabria; ?>" target="_blank" rel="noopener noreferrer" class="external">Turismo de Cantabria</a>
      </p>
    </section>

    <section id="gastronomia" class="mb-5">
      <h2><i class="fas fa-utensils icon-food"></i> Gastronomía</h2>
      <p>
        La cocina local es una delicia para los amantes del marisco y la tradición cántabra.
      </p>
      <ul>
        <li><strong>Platos típicos:</strong> cocido montañés, rabas, marmita de bonito, chuletón de buey.</li>
        <li><strong>Restaurantes recomendados:</strong> Miramar, La Arboleda, El Puerto.</li>
        <li><strong>Bares de pintxos:</strong> en la Calle Santander, perfectos para probar vinos locales y txakolí.</li>
      </ul>
      <p>Consulta opiniones y rankings en: 
        <a href="<?= $url_tripadvisor; ?>" target="_blank" rel="noopener noreferrer" class="external">TripAdvisor Castro-Urdiales</a>
      </p>
    </section>

    <section id="eventos" class="mb-5">
      <h2><i class="fas fa-calendar-alt icon-events"></i> Eventos y Fiestas</h2>
      <p>
        No te pierdas las festividades más emblemáticas de la ciudad:
      </p>
      <ul>
        <li><strong>La Pasión Viviente (Semana Santa):</strong> recreación histórica de gran impacto.</li>
        <li><strong>Semana Grande:</strong> conciertos, ferias, fuegos artificiales y ambiente festivo en julio.</li>
        <li><strong>Día del Carmen:</strong> procesiones y celebraciones en honor a la Virgen del Carmen, patrona de los pescadores.</li>
        <li><strong>Carnaval:</strong> color, disfraces y desfiles en febrero.</li>
      </ul>
      <p>Consulta la agenda oficial en: 
        <a href="<?= $url_ayuntamiento; ?>" target="_blank" rel="noopener noreferrer" class="external">Agenda Ayuntamiento</a>
      </p>
    </section>

    <section id="alojamiento" class="mb-5">
      <h2><i class="fas fa-bed icon-accommodation"></i> Alojamiento</h2>
      <p>
        Amplia variedad para todos los gustos y presupuestos: hoteles, hostales, apartamentos y casas rurales. Cerca de la playa y el centro histórico.
      </p>
      <ul>
        <li><strong>Hoteles céntricos:</strong> ideales para explorar la ciudad a pie.</li>
        <li><strong>Casas rurales:</strong> para un contacto directo con la naturaleza.</li>
        <li><strong>Opciones económicas:</strong> pensiones y hostales familiares.</li>
      </ul>
    </section>

    <section class="text-center my-5">
      <h3>Planifica tu viaje a <?= $localidad_minuscula; ?></h3>
      <a href="<?= $url_ayuntamiento; ?>" target="_blank" class="btn btn-success btn-lg me-2 external" rel="noopener noreferrer">
        <i class="fas fa-info-circle"></i> Más información oficial
      </a>
      <a href="<?= $url_tripadvisorVacations; ?>" target="_blank" class="btn btn-primary btn-lg external" rel="noopener noreferrer">
        <i class="fab fa-tripadvisor"></i> Opiniones y rankings
      </a>
    </section>
  </main>

  <footer class="text-center py-4 bg-light">
    <small>&copy; <?= date('Y'); ?> Playas2026 | Guía turística de <?= $localidad_minuscula; ?> y la costa de <?= $region; ?></small>
  </footer>

  <!-- Datos estructurados para Guía turística -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "TouristGuide",
    "name": "Guía completa de <?= $localidad_minuscula; ?>",
    "description": "Guía turística para visitar <?= $localidad_minuscula; ?> en <?= $region; ?>. Historia, rutas, gastronomía, eventos y alojamiento.",
    "url": "https://tusitio.com/guia-castro-urdiales",
    "hasPart": [
      {
        "@type": "TouristAttraction",
        "name": "Iglesia de Santa María de la Asunción",
        "description": "Iglesia gótica del siglo XIII al XV.",
        "address": {
          "@type": "PostalAddress",
          "addressLocality": "<?= $localidad_minuscula; ?>",
          "addressRegion": "<?= $region; ?>",
          "addressCountry": "ES"
        }
      },
      {
        "@type": "TouristAttraction",
        "name": "Castillo-Faro de Santa Ana",
        "description": "Fortaleza medieval con faro.",
        "address": {
          "@type": "PostalAddress",
          "addressLocality": "<?= $localidad_minuscula; ?>",
          "addressRegion": "<?= $region; ?>",
          "addressCountry": "ES"
        }
      }
    ],
    "event": [
      {
        "@type": "Event",
        "name": "La Pasión Viviente",
        "startDate": "2025-04-13",
        "location": {
          "@type": "Place",
          "name": "Casco Antiguo de <?= $localidad_minuscula; ?>"
        }
      },
      {
        "@type": "Event",
        "name": "Semana Grande",
        "startDate": "2025-07-15",
        "endDate": "2025-07-21",
        "location": {
          "@type": "Place",
          "name": "<?= $localidad_minuscula; ?>"
        }
      }
    ]
  }
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
