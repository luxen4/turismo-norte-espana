
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Guía de Experiencias en Asturias</title>
  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    #guia-experiencias-asturias article {
      border: 1px solid #dee2e6;
      border-radius: 10px;
      padding: 20px;
      height: 100%;
      transition: box-shadow 0.3s;
      background-color: #ffffff;
    }
    #guia-experiencias-asturias article:hover {
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
<?php //Barra de Navegación Superior
require "./../../../../bloques/estructura/header.php"; ?>

<section id="guia-experiencias-asturias" class="py-5 bg-light">
  <div class="container">
    <header class="mb-5 text-center">
      <h2 class="text-primary">🏞️ Guía de Experiencias en Asturias</h2>
      <p class="lead">Explora actividades únicas, eventos y visitas guiadas por toda Asturias</p>
    </header>

    <div class="row g-4" itemscope itemtype="https://schema.org/ItemList">
      <!-- 1. Portal Oficial -->
      <div class="col-md-6" itemprop="itemListElement" itemscope itemtype="https://schema.org/Article">
        <article class="h-100">
          <h3 class="text-success">
            <i class="fas fa-globe-europe"></i>
            <span itemprop="name">Portal Oficial de Turismo de Asturias</span>
          </h3>
          <p itemprop="description">
            El sitio oficial <strong>turismoasturias.es</strong> ofrece actividades para todos los gustos: costa, montaña, cultura, gastronomía y rutas de naturaleza. Perfecto para planificar tu visita.
          </p>
          <a href="https://turismoasturias.es/" target="_blank" rel="noopener noreferrer nofollow" class="btn btn-outline-success">
            <i class="fas fa-arrow-right"></i> Visitar Turismo Asturias
          </a>
        </article>
      </div>

      <!-- 2. Vive Asturias -->
      <div class="col-md-6" itemprop="itemListElement" itemscope itemtype="https://schema.org/Article">
        <article class="h-100">
          <h3 class="text-warning">
            <i class="fas fa-map-marker-alt"></i>
            <span itemprop="name">Vive Asturias</span>
          </h3>
          <p itemprop="description">
            Guía turística completa con información sobre <strong>Asturias</strong>: rutas, cultura, gastronomía, eventos y alojamientos.
          </p>
          <a href="https://www.viveasturias.com/" target="_blank" class="btn btn-outline-warning me-2">
            <i class="fas fa-arrow-right"></i> Vive Asturias
          </a>
          <a href="https://www.asturiasnatural.com/" target="_blank" class="btn btn-outline-secondary">
            <i class="fas fa-arrow-right"></i> Asturias Natural
          </a>
        </article>
      </div>

      <!-- 3. Agenda de Actividades -->
      <div class="col-md-6" itemprop="itemListElement" itemscope itemtype="https://schema.org/Event">
        <article class="h-100">
          <h3 class="text-danger">
            <i class="fas fa-calendar-alt"></i>
            <span itemprop="name">Agenda de Actividades en Asturias</span>
          </h3>
          <p itemprop="description">
            Consulta la agenda oficial del <strong>Principado de Asturias</strong>: ferias, conciertos, exposiciones y actividades culturales.
          </p>
          <meta itemprop="startDate" content="2025-06-01" />
          <meta itemprop="endDate" content="2025-09-30" />
          <a href="https://www.asturias.es/agenda-cultural" target="_blank" class="btn btn-outline-danger">
            <i class="fas fa-arrow-right"></i> Ver Agenda Cultural
          </a>
        </article>
      </div>

      <!-- 4. Visitas Guiadas -->
      <div class="col-md-6" itemprop="itemListElement" itemscope itemtype="https://schema.org/TouristTrip">
        <article class="h-100">
          <h3 class="text-info">
            <i class="fas fa-user-tie"></i>
            <span itemprop="name">Visitas Guiadas con Guías Oficiales</span>
          </h3>
          <p itemprop="description">
            Descubre <strong>Asturias con guías profesionales</strong>: rutas culturales, naturales y excursiones personalizadas.
          </p>
          <a href="https://www.turismoasturias.es/que-hacer/experiencias" target="_blank" class="btn btn-outline-info me-2">
            <i class="fas fa-arrow-right"></i> Turismo Asturias
          </a>
          <a href="https://www.vamosrural.com/" target="_blank" class="btn btn-outline-success me-2">
            <i class="fas fa-arrow-right"></i> VamosRural
          </a>
          <a href="https://guiasasturias.com/" target="_blank" class="btn btn-outline-dark">
            <i class="fas fa-arrow-right"></i> Guías Asturias
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