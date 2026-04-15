<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Actividades en la Playa de Biarritz – Francia</title>

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
  <meta name="description" content="Explora las actividades turísticas y deportivas en la Playa de Biarritz, Francia: surf, paseos por la costa vasca, rutas culturales y más." />
  <meta name="keywords" content="Playa de Biarritz, actividades Biarritz, surf Francia, senderismo costa vasca, deportes acuáticos, excursiones Biarritz" />
  <meta name="robots" content="index, follow" />
  <meta name="date" content="2025-05-18" />

  <!-- Favicon -->
  <link rel="icon" href='./../turismo-norte-espana/img/icono-sombrilla.ico' type="image/x-icon">

  <!-- Open Graph -->
  <meta property="og:image" content=PATH_RAIZ_LOCALIDADES_CARPETA."/francia/playadebiarritz/img/playa-de-biarritz.jpg" />
  <meta property="og:title" content="Actividades en la Playa de Biarritz – Francia" />
  <meta property="og:description" content="Descubre qué hacer en la Playa de Biarritz: surf, paseos por la costa vasca, cultura y experiencias junto al océano Atlántico." />
  <meta property="og:type" content="article" />
  <meta property="og:url" content="https://playas2024.kesug.com/turismo-norte-espana/actividades-playa-de-biarritz-francia" />
  <meta property="og:image:alt" content="Vista de la Playa de Biarritz, destino ideal para surf y turismo costero en Francia" />
  <meta property="og:site_name" content="Turismo Norte de España – Guía Costera" />
  <meta property="og:locale" content="es_ES" />

  <!-- Adcash (opcional) -->
  <script src="https://static.adcash.com/js/aclib.js" async></script>
  <?php require "./../../../../bloques/estructura/anuncios/js/logica_anuncios_addcash.php"; ?>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Estilos -->
  <link rel="stylesheet" href="http://<?= $_SERVER['SERVER_NAME'] ?>/turismo-norte-espana/styles.css">

  <?php


  // Descripción general y URL
  $descripcion = 'Explora la Playa de Biarritz, un icono del surf y el turismo costero en el País Vasco francés, con impresionantes paisajes y una vibrante vida cultural.';
  $url = '<?= PATH_DOMINIO_RAIZ; ?>/turismo-norte-espana/francia/playadebiarritz/fichas/playa-de-biarritz.php';

  // Datos estructurados Schema.org (mainEntity)
  $mainEntity_description = 'La Playa de Biarritz es famosa mundialmente por sus olas perfectas para el surf y su ambiente cosmopolita en la costa vasca.';
  $mainEntity_addressLocality = 'Biarritz';
  $mainEntity_addressRegion = 'País Vasco Francés';
  $mainEntity_addressCountry = 'Francia';

  // Coordenadas geográficas aproximadas
  $mainEntity_geo_latitude = 43.4831;
  $mainEntity_geo_longitude = -1.5586;

  // Imagen representativa y URL canónica
  $mainEntity_image = '<?= PATH_DOMINIO_RAIZ; ?>/turismo-norte-espana/francia/playadebiarritz/img/playa-de-biarritz.jpg';
  $mainEntity_url = '<?= PATH_DOMINIO_RAIZ; ?>/turismo-norte-espana/playa-de-biarritz-francia';
  ?>

  <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/turismo-norte-espana/bloques/estructura/structured_data_generico.php'; ?>
</head>

<body>


<script>
  // Array con URLs de las imágenes que quieres mostrar
  const imagenes = [
    'http://localhost/turismo-norte-espana/cantabria/playadeberria/img/playa-de-berria-santona.jpg',
    'https://playas2024.kesug.com/cantabria/playadeberria/img/imagen2.jpg',
    'https://playas2024.kesug.com/cantabria/playadeberria/img/imagen3.jpg',
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
  <?php require "./../../../../francia/playadebiarritz/fichas/sections/variables/actividades-recomendadas.php"; ?> 
  <?php require './../../../../bloques/estructura/sections_generico/Carruseles_CSV/prueba_vaqueros_hombre.php'; ?>
  <?php require "./../../../../bloques/estructura/footer.php"; ?>

  <!-- Scripts Bootstrap + jQuery -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>