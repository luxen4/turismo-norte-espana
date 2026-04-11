<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>FAQ & Consejos – Playa de Noja</title>
  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />
  <meta name="description" content="Resuelve tus dudas y descubre los mejores consejos para disfrutar tu experiencia en la Playa de Noja, una joya natural en la costa de Cantabria." />
  <meta name="keywords" content="FAQ Playa de Noja, consejos Noja, turismo Cantabria, qué llevar Noja, playa Ris Trengandín" />
  <style>
    body {
      background-color: #f8f9fa;
    }
    .faq-section, .consejos-section {
      background: #ffffff;
      border-radius: 12px;
      padding: 30px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
      margin-bottom: 30px;
    }
    dt {
      font-weight: bold;
      margin-top: 20px;
      color: #2c3e50;
    }
    dd {
      margin-bottom: 20px;
    }
    i.fas {
      margin-right: 8px;
    }
    .section-header {
      text-align: center;
      margin-bottom: 40px;
      color: #2980b9;
    }
    .consejos-section h3 {
      margin-bottom: 20px;
      color: #8e44ad;
    }
  </style>
</head>
<body>
<?php require "./../../../../bloques/estructura/header.php"; ?>

<section class="py-5">
  <div class="container">

    <!-- FAQ -->
    <header class="section-header">
      <h2><i class="fas fa-question-circle"></i> Preguntas Frecuentes</h2>
      <p class="lead">Todo lo que necesitas saber para tu visita a la Playa de Noja</p>
    </header>
    <div class="faq-section">
      <dl>
        <dt><i class="fas fa-question-circle" style="color: #3498db;"></i> ¿Qué playas hay en Noja?</dt>
        <dd><i class="fas fa-check-circle" style="color: #2ecc71;"></i> Noja cuenta con dos playas principales: **Ris** y **Trengandín**, ambas de arena fina y aguas limpias, ideales para el baño y el surf.</dd>

        <dt><i class="fas fa-question-circle" style="color: #3498db;"></i> ¿Es una playa segura para niños?</dt>
        <dd><i class="fas fa-check-circle" style="color: #2ecc71;"></i> Sí, especialmente Trengandín por su pendiente suave. Además, hay servicio de socorrismo durante la temporada alta.</dd>

        <dt><i class="fas fa-question-circle" style="color: #3498db;"></i> ¿Hay acceso para personas con movilidad reducida?</dt>
        <dd><i class="fas fa-check-circle" style="color: #2ecc71;"></i> Sí, ambas playas disponen de pasarelas, baños accesibles y zonas reservadas para personas con movilidad reducida.</dd>

        <dt><i class="fas fa-question-circle" style="color: #3498db;"></i> ¿Se pueden practicar deportes acuáticos?</dt>
        <dd><i class="fas fa-check-circle" style="color: #2ecc71;"></i> Por supuesto. Son populares el <a href="/surf-en-noja/" title="Surf en Noja">surf</a>, bodyboard, paddle surf y kayak, especialmente en la playa de Ris.</dd>

        <dt><i class="fas fa-question-circle" style="color: #3498db;"></i> ¿Dónde encontrar más información turística?</dt>
        <dd><i class="fas fa-check-circle" style="color: #2ecc71;"></i> Consulta nuestra <a href="./guia-playa-de-noja.php" title="Guía Playa de Noja">guía completa de la Playa de Noja</a> para más detalles.</dd>
      </dl>
    </div>

    <?php require './../../../../bloques/estructura/sections_generico/Carruseles_CSV/prueba_botas_hombre.php'; ?>

    <!-- Consejos Útiles -->
    <header class="section-header">
      <h2><i class="fas fa-info-circle"></i> Consejos Útiles</h2>
      <p class="lead">Prepara tu día en la costa de Noja con estos consejos prácticos</p>
    </header>
    <div class="consejos-section">
      <ul class="list-unstyled">
        <li class="my-4">
          <i class="fas fa-calendar-day" style="color: #27ae60;"></i>
          <strong>¿Cuándo visitar?</strong><br>
          La mejor época es de <time datetime="2025-06">junio</time> a <time datetime="2025-09">septiembre</time>. También puedes disfrutar de la tranquilidad de mayo u octubre si prefieres menos afluencia.
        </li>
        <li class="my-4">
          <i class="fas fa-umbrella-beach" style="color: #f39c12;"></i>
          <strong>¿Qué llevar?</strong><br>
          No olvides protector solar, gorra, gafas de sol, una sombrilla, calzado cómodo, y si te animas, una tabla de surf o paddle. Lleva también una bolsa para recoger tus residuos.
        </li>
        <li class="my-4">
          <i class="fas fa-map-marker-alt" style="color: #8e44ad;"></i>
          <strong>Recomendaciones cercanas:</strong><br>
          Explora las **marismas de Victoria y Joyel**, ideales para senderismo y avistamiento de aves, o visita la cercana villa marinera de **Santona**, famosa por sus anchoas.
        </li>
      </ul>
    </div>

  </div>
</section>

<?php require './../../../../bloques/estructura/sections_generico/Carruseles_CSV/prueba_shorts_hombre.php';  ?>

<?php require "./../../../../bloques/estructura/footer.php"; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>