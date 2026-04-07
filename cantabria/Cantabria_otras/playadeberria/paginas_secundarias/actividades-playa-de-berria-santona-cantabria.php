<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Actividades en la Playa de Berria – Santona</title>

  <!-- Fuentes -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Merriweather:wght@400;700&display=swap" rel="stylesheet">

  <!-- Google Ads -->
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9695238706576343" crossorigin="anonymous"></script>
  <meta name="seobility" content="6fdc72f26c4563f937e32ff3def5f9d5">

  <!-- Bootstrap -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />

  <!-- Meta SEO -->
  <meta name="description" content="Explora las actividades turísticas y deportivas en la Playa de Berria, Santona: surf, senderismo por el Monte Buciero, rutas en barco y más." />
  <meta name="keywords" content="Playa de Berria, actividades Berria, surf Cantabria, senderismo Buciero, deportes de playa, excursiones barco Santona" />
  <meta name="robots" content="index, follow" />
  <meta name="date" content="2025-05-18" />

  <!-- Favicon -->
  <link rel="icon" href='./../turismo-norte-espana/img/icono-sombrilla.ico' type="image/x-icon">

  <!-- Open Graph -->
  <meta property="og:image" content=PATH_RAIZ_LOCALIDADES_CARPETA."/cantabria/playadeberria/img/playa-de-berria-santona-cantabria.jpg" />
  <meta property="og:title" content="Actividades en la Playa de Berria – Santona" />
  <meta property="og:description" content="Descubre qué hacer en la Playa de Berria: surf, rutas naturales, paseos marítimos y experiencias en la costa cántabra." />
  <meta property="og:type" content="article" />
  <meta property="og:url" content="https://Playas2026.kesug.com/turismo-norte-espana/actividades-playa-de-berria-santona-cantabria" />
  <meta property="og:image" content="https://Playas2026.kesug.com/turismo-norte-espana/cantabria/playadeberria/img/playa-de-berria-santona-cantabria.jpg" />
  <meta property="og:image:alt" content="Vista de la Playa de Berria, ideal para surf y naturaleza en la costa de Santona" />
  <meta property="og:site_name" content="Turismo y Playas 2026 – Guía Costera de España" />
  <meta property="og:locale" content="es_ES" />

  <!-- Adcash (opcional) -->
  <script src="https://static.adcash.com/js/aclib.js" async></script>
  <?php require "./../../../../bloques/estructura/anuncios/js/logica_anuncios_addcash.php"; ?>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Estilos -->
  <link rel="stylesheet" href="http://<?= $_SERVER['SERVER_NAME'] ?>/turismo-norte-espana/styles.css">

  <?php
  // Información básica
  $localidad = 'Berria';
  $region = 'Cantabria';
  $nombre_playa_minuscula = 'berria';
  $localidad_minuscula = 'santona';
  $region_minuscula = 'cantabria';
  $rutas = 'playa-de-berria-santona-cantabria';

  // Descripción general y URL
  $descripcion = 'Explora la Playa de Berria, uno de los destinos más naturales y salvajes de la costa cántabra, ideal para deportes acuáticos y rutas por el Monte Buciero.';
  $url = 'http://Playas2026.kesug.com/turismo-norte-espana/cantabria/playadeberria/fichas/playa-de-berria.php';

  // Datos estructurados Schema.org (mainEntity)
  $mainEntity_description = 'La Playa de Berria es conocida por sus olas perfectas para el surf y sus rutas naturales por el Monte Buciero en Santona.';
  $mainEntity_addressLocality = 'Berria';
  $mainEntity_addressRegion = 'Cantabria';
  $mainEntity_addressCountry = 'España';

  // Coordenadas geográficas
  $mainEntity_geo_latitude = 43.4764;
  $mainEntity_geo_longitude = -3.4431;

  // Imagen representativa y URL canónica
  $mainEntity_image = 'http://Playas2026.kesug.com/turismo-norte-espana/cantabria/playadeberria/img/playa-de-berria-santona-cantabria.jpg';
  $mainEntity_url = 'http://Playas2026.kesug.com/turismo-norte-espana/playa-de-berria-santona-cantabria';
  ?>

  <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/turismo-norte-espana/bloques/estructura/structured_data_generico.php'; ?>
</head>

<body>


<script>
  // Array con URLs de las imágenes que quieres mostrar
  const imagenes = [
    'http://localhost/turismo-norte-espana/cantabria/playadeberria/img/playa-de-berria-santona.jpg',
    'https://Playas2026.kesug.com/cantabria/playadeberria/img/imagen2.jpg',
    'https://Playas2026.kesug.com/cantabria/playadeberria/img/imagen3.jpg',
  ];

  let indice = 0;

  function mostrarPopup() {
    const imagenUrl = imagenes[indice];
    indice = (indice + 1) % imagenes.length;

    // Crear un div para el popup
    const popup = document.createElement('div');
    popup.style.position = 'fixed';
    popup.style.top = '50%';
    popup.style.left = '50%';
    popup.style.transform = 'translate(-50%, -50%)';
    popup.style.backgroundColor = 'rgba(0,0,0,0.8)';
    popup.style.padding = '10px';
    popup.style.borderRadius = '8px';
    popup.style.zIndex = '9999';
    popup.style.textAlign = 'center';

    // Crear imagen dentro del popup
    const img = document.createElement('img');
    img.src = imagenUrl;
    img.style.maxWidth = '300px';
    img.style.maxHeight = '200px';
    img.style.display = 'block';
    img.style.marginBottom = '10px';

    // Botón para cerrar el popup
    const btnCerrar = document.createElement('button');
    btnCerrar.textContent = 'Cerrar';
    btnCerrar.style.padding = '5px 10px';
    btnCerrar.style.cursor = 'pointer';
    btnCerrar.onclick = () => {
      document.body.removeChild(popup);
    };

    popup.appendChild(img);
    popup.appendChild(btnCerrar);
    document.body.appendChild(popup);
  }

  // Mostrar popup cada 5 segundos
  setInterval(mostrarPopup, 5000);
</script>






















  <?php require "./../../../../bloques/estructura/header.php"; ?>
  <a class="nav-link text-red" href="/turismo-norte-espana/<?= $rutas; ?>">Playa de Berria</a>
  <?php require "./../../../../cantabria/playadeberria/fichas/sections/variables/actividades-recomendadas.php"; ?> 
  <?php require './../../../../bloques/estructura/sections_generico/Carruseles_CSV/prueba_vaqueros_hombre.php'; ?>
  <?php require "./../../../../bloques/estructura/footer.php"; ?>

  <!-- Scripts Bootstrap + jQuery -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>