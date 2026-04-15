<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Guía de Experiencias en Nouvelle-Aquitaine</title>
  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    #guia-experiencias-na article {
      border: 1px solid #dee2e6;
      border-radius: 10px;
      padding: 20px;
      height: 100%;
      transition: box-shadow 0.3s;
      background-color: #ffffff;
    }
    #guia-experiencias-na article:hover {
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    .btn i {
      margin-right: 5px;
    }
  </style>

  <?php // Para anuncios de Adcash ?> 
  <script src="https://static.adcash.com/js/aclib.js" async></script>
  <?php require "./../../../../bloques/estructura/anuncios/js/logica_anuncios_addcash.php"; ?>

</head>
<body>
<?php // Barra de Navegación Superior
require "./../../../../bloques/estructura/header.php"; ?>

<section id="guia-experiencias-na" class="py-5 bg-light">
  <div class="container">
    <header class="mb-5 text-center">
      <h2 class="text-primary">🌊 Guía de Experiencias en Nouvelle-Aquitaine</h2>
      <p class="lead">Descubre actividades únicas, eventos y visitas guiadas por toda Nouvelle-Aquitaine</p>
    </header>

    <div class="row g-4" itemscope itemtype="https://schema.org/ItemList">

      <!-- 1. Portal Oficial -->
      <div class="col-md-6" itemprop="itemListElement" itemscope itemtype="https://schema.org/Article">
        <article class="h-100">
          <h3 class="text-success">
            <i class="fas fa-globe-europe"></i>
            <span itemprop="name">Portal Oficial de Turismo de Nouvelle-Aquitaine</span>
          </h3>
          <p itemprop="description">
            El sitio oficial <strong>nouvelle-aquitaine-tourisme.com</strong> ofrece actividades para todos los gustos: playas, naturaleza, cultura, gastronomía, deportes y patrimonio histórico.
          </p>
          <a href="https://www.nouvelle-aquitaine-tourisme.com/" target="_blank" rel="noopener noreferrer nofollow" class="btn btn-outline-primary">
            <i class="fas fa-arrow-right"></i> Visitar Turismo NA
          </a>
        </article>
      </div>

      <!-- 2. Vive Biarritz -->
      <div class="col-md-6" itemprop="itemListElement" itemscope itemtype="https://schema.org/Article">
        <article class="h-100">
          <h3 class="text-warning">
            <i class="fas fa-map-marker-alt"></i>
            <span itemprop="name">Vive Biarritz</span>
          </h3>
          <p itemprop="description">
            Guía turística con información sobre <strong>Biarritz</strong>: playas, surf, eventos culturales, gastronomía y comercio local.
          </p>
          <a href="https://www.ot-biarritz.fr/" target="_blank" class="btn btn-outline-warning me-2">
            <i class="fas fa-arrow-right"></i> Oficina de Turismo Biarritz
          </a>
          <a href="https://www.biarritz.net/" target="_blank" class="btn btn-outline-secondary">
            <i class="fas fa-arrow-right"></i> Biarritz.net
          </a>
        </article>
      </div>

      <!-- 3. Agenda de Actividades -->
      <div class="col-md-6" itemprop="itemListElement" itemscope itemtype="https://schema.org/Event">
        <article class="h-100">
          <h3 class="text-danger">
            <i class="fas fa-calendar-alt"></i>
            <span itemprop="name">Agenda de Eventos en Nouvelle-Aquitaine</span>
          </h3>
          <p itemprop="description">
            Consulta la agenda actualizada de eventos culturales, festivales, exposiciones y deportes en toda la región.
          </p>
          <meta itemprop="startDate" content="2025-06-01" />
          <meta itemprop="endDate" content="2025-09-30" />
          <a href="https://www.nouvelle-aquitaine-tourisme.com/fr/evenements/" target="_blank" class="btn btn-outline-danger">
            <i class="fas fa-arrow-right"></i> Ver Agenda Cultural
          </a>
        </article>
      </div>

      <!-- 4. Visitas Guiadas -->
      <div class="col-md-6" itemprop="itemListElement" itemscope itemtype="https://schema.org/TouristTrip">
        <article class="h-100">
          <h3 class="text-info">
            <i class="fas fa-user-tie"></i>
            <span itemprop="name">Visitas Guiadas Oficiales</span>
          </h3>
          <p itemprop="description">
            Descubre <strong>Nouvelle-Aquitaine con guías profesionales</strong>: tours por Burdeos, excursiones al País Vasco francés y visitas a viñedos.
          </p>
          <a href="https://www.bordeaux-tourism.co.uk/" target="_blank" class="btn btn-outline-info me-2">
            <i class="fas fa-arrow-right"></i> Turismo Burdeos
          </a>
          <a href="https://www.tourisme-paysbasque.fr/" target="_blank" class="btn btn-outline-success me-2">
            <i class="fas fa-arrow-right"></i> Turismo País Vasco
          </a>
          <a href="https://www.levignoble-bordelais.com/en" target="_blank" class="btn btn-outline-dark">
            <i class="fas fa-arrow-right"></i> Ruta de Viñedos
          </a>
        </article>
      </div>

    </div>
  </div>
</section>

<?php require './../../../../bloques/estructura/sections_generico/Carruseles_CSV/prueba_atuendo2.php'; ?>

<!-- Footer -->
<?php require './../../../../bloques/estructura/footer.php'; ?>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>