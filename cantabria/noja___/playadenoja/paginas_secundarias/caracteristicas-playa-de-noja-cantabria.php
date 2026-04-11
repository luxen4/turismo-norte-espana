<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Playa de Noja en Cantabria</title>
  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />
  <style>
    body {
      background-color: #f8f9fa;
    }
    .beach-info {
      background: #fff;
      border-radius: 12px;
      padding: 30px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
    }
    .beach-info ul {
      padding-left: 1.5rem;
    }
    .beach-info li {
      margin-bottom: 12px;
      font-size: 1rem;
    }
    .beach-info i {
      margin-right: 8px;
    }
    .cta-button {
      text-align: center;
      margin-top: 30px;
    }
  </style>
  <?php // Para anuncios de Adcash ?>
  <script src="https://static.adcash.com/js/aclib.js" async></script>
  <?php require "./../../../../bloques/estructura/anuncios/js/logica_anuncios_addcash.php"; ?>
</head>

<body>
<?php // Barra de Navegación Superior ?>
<?php require "./../../../../bloques/estructura/header.php"; ?>

<section class="py-5">
  <div class="container">
    <header class="text-center mb-5">
      <h2 class="text-primary">🏖️ Playa de Noja - Cantabria</h2>
      <p class="lead">Un paraíso natural entre dunas, marismas y arenas doradas</p>
    </header>

    <div class="beach-info">
      <p>La <strong>Playa de Noja</strong>, situada en el municipio del mismo nombre, es una de las más bellas y visitadas del litoral cántabro. A continuación, te detallamos sus principales características:</p>

      <ul class="list-unstyled">
        <li><i class="fas fa-sand" style="color: #e67e22;"></i> <strong>Arena:</strong> fina y clara, perfecta para familias y paseos.</li>
        <li><i class="fas fa-ruler-combined" style="color: #3498db;"></i> <strong>Longitud:</strong> más de <time datetime="2025-01-01">1.500 metros</time>.</li>
        <li><i class="fas fa-expand-arrows-alt" style="color: #1abc9c;"></i> <strong>Anchura:</strong> variable según mareas, muy extensa en bajamar.</li>
        <li><i class="fas fa-water" style="color: #1abc9c;"></i> <strong>Oleaje:</strong> moderado, ideal para <a href="/surf-en-cantabria/" title="Surf en Cantabria">surfistas y bañistas</a>.</li>
        <li><i class="fas fa-leaf" style="color: #2ecc71;"></i> <strong>Entorno natural:</strong> junto al Parque Natural de las Marismas de Santona, con gran riqueza ecológica.</li>
        <li><i class="fas fa-shower" style="color: #1abc9c;"></i> <strong>Servicios:</strong> duchas, socorrismo, aseos, bares y pasarelas accesibles.</li>
        <li><i class="fas fa-wheelchair" style="color: #e74c3c;"></i> <strong>Accesibilidad:</strong> adaptada a personas con movilidad reducida.</li>
        <li><i class="fas fa-car" style="color: #f39c12;"></i> <strong>Transporte:</strong> buena conexión por carretera, autobús y aparcamiento disponible.</li>
        <li><i class="fas fa-hiking" style="color: #9b59b6;"></i> <strong>Actividades recomendadas:</strong> surf, senderismo, observación de aves, kayak y turismo familiar.</li>
      </ul>

      <p>Consulta también nuestra <a href="/guia-playas-cantabria/" title="Guía completa de playas en Cantabria">guía completa de playas en Cantabria</a> para planificar tu escapada perfecta.</p>

      <div class="cta-button">
        <h5>¿Quieres descubrir más actividades en Cantabria?</h5>
        <a href="./experiencias-cantabria.php" class="btn btn-primary mt-2">
          <i class="fas fa-map-marked-alt"></i> Consulta esta guía de experiencias
        </a>

        <?php require './../../../../bloques/estructura/sections_generico/Carruseles_CSV/prueba_atuendo3.php'; ?>
      </div>        
    </div>
  </div>
</section>

<!-- Footer -->
<?php require './../../../../bloques/estructura/footer.php'; ?>

<!-- Bootstrap Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>