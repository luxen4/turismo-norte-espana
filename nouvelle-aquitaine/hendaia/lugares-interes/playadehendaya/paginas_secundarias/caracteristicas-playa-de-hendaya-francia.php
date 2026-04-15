<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Playa de Hendaya</title>
  <meta name="description" content="Descubre la Playa de Hendaya, la más extensa del País Vasco francés. Ideal para familias, deportes acuáticos y naturaleza.">

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

  <!-- Adcash Script -->
  <script src="https://static.adcash.com/js/aclib.js" async></script>
  <?php require "./../../../../bloques/estructura/anuncios/js/logica_anuncios_addcash.php"; ?>
</head>

<body>
  <?php require "./../../../../bloques/estructura/header.php"; ?>

  <section class="py-5">
    <div class="container">
      <header class="text-center mb-5">
        <h2 class="text-primary">🏖️ Playa de Hendaya</h2>
        <p class="lead">Una de las playas más amplias y familiares del País Vasco francés</p>
      </header>

      <div class="beach-info">
        <p>La <strong>Playa de Hendaya</strong> (Hendaye Plage), ubicada en la región de Nueva Aquitania, es una de las playas más seguras y espaciosas del litoral atlántico francés. A continuación, te mostramos sus características destacadas:</p>

        <ul class="list-unstyled">
          <li><i class="fas fa-umbrella-beach" style="color: #e67e22;"></i> <strong>Arena:</strong> fina y clara, ideal para familias y actividades al aire libre.</li>
          <li><i class="fas fa-ruler-combined" style="color: #3498db;"></i> <strong>Longitud:</strong> unos 3 kilómetros, siendo la más extensa del País Vasco francés.</li>
          <li><i class="fas fa-expand-arrows-alt" style="color: #1abc9c;"></i> <strong>Anchura:</strong> muy amplia, incluso en marea alta, perfecta para juegos y deportes.</li>
          <li><i class="fas fa-water" style="color: #1abc9c;"></i> <strong>Oleaje:</strong> suave a moderado, ideal para iniciarse en <a href="https://hendaye.com/fr/ecoles-de-surf/" target="_blank" rel="noopener noreferrer" title="Escuelas de surf en Hendaya">surf o bodyboard</a>.</li>
          <li><i class="fas fa-tree" style="color: #2ecc71;"></i> <strong>Entorno natural:</strong> cerca de la bahía de Txingudi, vistas a los Pirineos y acceso a rutas de senderismo.</li>
          <li><i class="fas fa-shower" style="color: #1abc9c;"></i> <strong>Servicios:</strong> duchas, socorristas, baños, pasarelas, alquiler de sombrillas y bares costeros.</li>
          <li><i class="fas fa-wheelchair" style="color: #e74c3c;"></i> <strong>Accesibilidad:</strong> accesible para personas con movilidad reducida.</li>
          <li><i class="fas fa-car" style="color: #f39c12;"></i> <strong>Transporte:</strong> aparcamiento disponible, conexión con tren (SNCF) y bus desde San Juan de Luz o Irún.</li>
          <li><i class="fas fa-hiking" style="color: #9b59b6;"></i> <strong>Actividades recomendadas:</strong> surf, paddle surf, paseos en barco por la bahía, senderismo en la Cornisa Vasca.</li>
        </ul>

        <p>También puedes consultar nuestra <a href="/guias/playas-del-pais-vasco-frances/" title="Playas del País Vasco francés">guía de playas del País Vasco francés</a> para organizar tu escapada perfecta.</p>

        <div class="cta-button">
          <h5>¿Quieres descubrir más experiencias en el suroeste de Francia?</h5>
          <a href="./experiencias-aquitania.php" class="btn btn-primary mt-2">
            <i class="fas fa-map-marked-alt"></i> Explora esta guía de actividades
          </a>

          <?php require './../../../../bloques/estructura/sections_generico/Carruseles_CSV/prueba_atuendo3.php'; ?>
        </div>
      </div>
    </div>
  </section>

  <?php require './../../../../bloques/estructura/footer.php'; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>