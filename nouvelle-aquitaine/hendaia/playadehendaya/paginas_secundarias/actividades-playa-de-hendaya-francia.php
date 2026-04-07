<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Actividades en la Playa de Hendaya – País Vasco Francés</title>


  <?php 
  // Variables para la página de Hendaya
  require $_SERVER['DOCUMENT_ROOT'] . '/turismo-norte-espana/francia/playadehendaya/fichas/sections/head/variables/web-playa/localizacion-playa.php';
  require $_SERVER['DOCUMENT_ROOT'] . '/turismo-norte-espana/bloques/estructura/variables_comunes/defines.php';?>



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
  <meta name="description" content="Explora las actividades turísticas y deportivas en la Playa de Hendaya: surf, senderismo por los Pirineos Atlánticos, paseos marítimos y más." />
  <meta name="keywords" content="Playa de Hendaya, actividades Hendaya, surf Aquitania, senderismo Pirineos, deportes de playa, excursiones barco Hendaya" />
  <meta name="robots" content="index, follow" />
  <meta name="date" content="2025-05-25" />

  <!-- Favicon -->
  <link rel="icon" href='./../turismo-norte-espana/img/icono-sombrilla.ico' type="image/x-icon">

  <!-- Open Graph -->
  <meta property="og:image" content="https://playas2024.kesug.com/turismo-norte-espana/francia/hendaya/img/playa-de-hendaya-paisvascofrances.jpg" />
  <meta property="og:title" content="Actividades en la Playa de Hendaya – País Vasco Francés" />
  <meta property="og:description" content="Descubre qué hacer en la Playa de Hendaya: surf, senderismo, paseos en barco y más experiencias en la costa vasca de Francia." />
  <meta property="og:type" content="article" />
  <meta property="og:url" content="https://playas2024.kesug.com/turismo-norte-espana/actividades-playa-de-hendaya-francia" />
  <meta property="og:image:alt" content="Vista panorámica de la Playa de Hendaya con surfistas y senderos junto al mar" />
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
  /*$localidad = 'Hendaya';
  $region = 'País Vasco Francés';
  $nombre_playa_minuscula = 'hendaya';
  $localidad_minuscula = 'hendaya';
  $region_minuscula = 'francia';
  $rutas = 'playa-de-hendaya-francia';*/

  // Descripción general y URL
  $descripcion = 'Explora la Playa de Hendaya, un extenso arenal en el litoral atlántico francés, ideal para el surf, paseos naturales y disfrutar de los Pirineos Atlánticos.';
  $url = '<?= PATH_DOMINIO_RAIZ; ?>/turismo-norte-espana/francia/hendaya/fichas/playa-de-hendaya.php';

  // Datos estructurados Schema.org (mainEntity)
  $mainEntity_description = 'La Playa de Hendaya es famosa por su longitud, su oleaje moderado perfecto para aprender a surfear, y sus vistas hacia las rocas gemelas y la bahía.';
  $mainEntity_addressLocality = 'Hendaya';
  $mainEntity_addressRegion = 'Nueva Aquitania';
  $mainEntity_addressCountry = 'Francia';

  // Coordenadas geográficas
  $mainEntity_geo_latitude = 43.3713;
  $mainEntity_geo_longitude = -1.7736;

  // Imagen representativa y URL canónica
  $mainEntity_image = 'https://playas2024.kesug.com/turismo-norte-espana/francia/hendaya/img/playa-de-hendaya-paisvascofrances.jpg';
  $mainEntity_url = 'https://playas2024.kesug.com/turismo-norte-espana/playa-de-hendaya-paisvascofrances';
  ?>

  <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/turismo-norte-espana/bloques/estructura/structured_data_generico.php'; ?>
</head>

<body>

<script>
  const imagenes = [
    'https://playas2024.kesug.com/turismo-norte-espana/francia/hendaya/img/playa-hendaya-1.jpg',
    'https://playas2024.kesug.com/turismo-norte-espana/francia/hendaya/img/playa-hendaya-2.jpg',
    'https://playas2024.kesug.com/turismo-norte-espana/francia/hendaya/img/playa-hendaya-3.jpg',
  ];

  let indice = 0;

  function mostrarPopup() {
    const imagenUrl = imagenes[indice];
    indice = (indice + 1) % imagenes.length;

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

    const img = document.createElement('img');
    img.src = imagenUrl;
    img.style.maxWidth = '300px';
    img.style.maxHeight = '200px';
    img.style.display = 'block';
    img.style.marginBottom = '10px';

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

  setInterval(mostrarPopup, 5000);
</script>

<?php require "./../../../../bloques/estructura/header.php"; ?>

<?php require "./../../../../francia/playadehendaya/fichas/sections/variables/actividades-recomendadas.php"; ?> 
<?php require './../../../../bloques/estructura/sections_generico/Carruseles_CSV/prueba_vaqueros_hombre.php'; ?>
<?php require "./../../../../bloques/estructura/footer.php"; ?>

<!-- Scripts Bootstrap + jQuery -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>