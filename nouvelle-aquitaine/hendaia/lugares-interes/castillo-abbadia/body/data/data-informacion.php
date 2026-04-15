<?php 
$header = [
  "titulo" => "🏰 Castillo de Abbadia en Hendaia",
  "descripcion" => "Un impresionante castillo neogótico junto al mar con vistas espectaculares de la costa vasca"
];
?>

<?php
$intro = [
  "parrafos" => [
    "El <strong>Castillo de Abbadia</strong> es uno de los monumentos más emblemáticos de Hendaia, situado sobre los acantilados frente al océano Atlántico.",
    "Construido en el siglo XIX por Antoine d’Abbadie, combina arquitectura neogótica con influencias orientales y un fuerte carácter científico.",
    "Rodeado por un entorno natural protegido, ofrece vistas espectaculares de la costa vasco-francesa.",
    "Hoy en día se puede visitar su interior, donde destacan sus salas decoradas, su observatorio y su historia ligada a la exploración y la ciencia."
  ],
  "imagenes" => [

[
        "src" => "https://www.anglet-tourisme.com/wp-content/uploads/2024/05/Exterieur-Abbadia-le-Chateau-Observatoire-Hendaye-Tourisme-95-scaled.jpg",
        "alt" => "Vista exterior del Castillo de Abbadia",
        "caption" => "Vista exterior del Castillo de Abbadia",
        "fuente" => "wikipedia.org",
        "fuente_texto" => "wikipedia.org"
],

    [
      "src" => "https://losviajesdeaspasia.com/wp-content/uploads/2023/08/165_Vista_Abbadia.jpg",
      "alt" => "Acantilados junto al Castillo de Abbadia",
      "caption" => "Castillo sobre los acantilados",
      "fuente" => "https://losviajesdeaspasia.com/2020/09/04/castillo-abbadia/",
      "fuente_texto" => "losviajesdeaspasia.com"
    ]
  ],
  "video" => [
    "url" => "https://media.eitb.eus/multimediahd/videos/2024/10/28/3279477/20241028_22313221_0016704898_004_001_LA_OTRA_CARA.mp4",
    "titulo" => "Castillo de Abbadia en Hendaia"
  ]
];
?>

<?php
$galeria_imagenes = [
    [
      "src" => "img/castillo-abbadia-hendaya-nouvelle-aquitaine-1.jpg", /* No borrar */
      "alt" => "Castillo de Abbadia en Hendaia",
      "caption" => "Panorámica del Castillo de Abbadia",
      "fuente" => "wikipedia.org",
      "fuente_texto" => "wikipedia.org"
    ],
    [
        "src" => "https://lh3.googleusercontent.com/proxy/exQfiPL5Uxi56UuDs9om71VhW3kj3DLZz5wDks8bCLPYU0AAU3_VrdBCbvSopoLPM19DlwmJaaSZLVWfQMt1KS53CkV-UTBOph9PeOv2aiIAy5qmw9cwn_eUzEByW31HdpfVWu8K4OJlR9Y2z4MPmZfodZUOPDT5HYsQ",
        "alt" => "Interior del Castillo de Abbadia",
        "caption" => "Decoración interior del castillo",
        "fuente" => "http://www.basklink.eus/es/actividad/castillo/castillo-de-abbadia/hendaia-hendaya",
        "fuente_texto" => "basklink.eus"
    ],
    [
        "src" => "https://losviajesdeaspasia.com/wp-content/uploads/2023/08/165_Vista_Abbadia.jpg",
        "alt" => "Costa cerca del castillo",
        "caption" => "Entorno natural protegido",
        "fuente" => "https://losviajesdeaspasia.com/2020/09/04/castillo-abbadia/",
        "fuente_texto" => "losviajesdeaspasia.com"
    ]
];
?>

<?php
$info = [
  "titulo" => "ℹ️ Información sobre el Castillo de Abbadia",
  "items" => [
    [
      "icono" => "📍",
      "titulo" => "Ubicación",
      "descripcion" => "Hendaia, País Vasco francés"
    ],
    [
      "icono" => "🏰",
      "titulo" => "Tipo",
      "descripcion" => "Castillo neogótico del siglo XIX"
    ],
    [
      "icono" => "🔭",
      "titulo" => "Historia",
      "descripcion" => "Residencia de Antoine d’Abbadie, científico y explorador"
    ],
    [
      "icono" => "⭐",
      "titulo" => "Interés",
      "descripcion" => "Arquitectura única y vistas espectaculares del Atlántico"
    ]
  ]
];
?>

<?php 
$actividades = [
  "titulo" => "🏰 Qué hacer en el Castillo de Abbadia",
  "items"  => [
    [ "icono" => "🏛️", "texto" => "Visitar el interior del castillo" ],
    [ "icono" => "🌿", "texto" => "Pasear por los alrededores naturales protegidos" ],
    [ "icono" => "📸", "texto" => "Fotografiar los acantilados y el edificio" ],
    [ "icono" => "🌅", "texto" => "Disfrutar de las vistas al atardecer" ]
  ]
];
?>

<?php
$mapa = [
    "titulo" => "🗺️ Localización",
    "map_id" => "map-abbadia",
    "centro" => [43.3695, -1.7870],
    "zoom"   => 14,
    "marker" => [
        "coords" => [43.3695, -1.7870],
        "popup"  => "<strong>Castillo de Abbadia</strong>"
    ]
];
?>

<?php
$contacto = [
  "titulo"   => "📞 Información",
  "telefono" => [
    "texto"  => "+33 5 59 20 04 51",
    "enlace" => "tel:+33559200451"
  ],
  "web"      => [
    "texto" => "www.chateau-abbadia.fr",
    "url"   => "https://www.chateau-abbadia.fr"
  ]
];
?>

<?php
$comentarios = [
    [
        "nombre" => "Jean P.",
        "texto"  => "Un castillo impresionante con vistas increíbles al mar."
    ],
    [
        "nombre" => "Ainhoa B.",
        "texto"  => "Muy interesante por dentro, mezcla de ciencia y arte."
    ],
    [
        "nombre" => "Carlos M.",
        "texto"  => "El entorno natural es espectacular, merece la visita."
    ],
    [
        "nombre" => "Sophie L.",
        "texto"  => "Uno de los lugares más bonitos de Hendaia."
    ]
];
?>

<?php  
$iframeSrc = "https://openweathermap.org/weathermap?basemap=map&cities=true&layer=temperature&lat=43.3695&lon=-1.7870&zoom=10"; 
?>