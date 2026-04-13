<?php  //require PATH_RAIZ_LOCALIDAD_LUGARES_INTERES_BODY_DATA . '/data-informacion.php'; ?>
<?php  require $_SERVER['DOCUMENT_ROOT'] . "/turismo-norte-espana/" .$region_minuscula. "/".$localidad_minuscula. '/lugares-interes/'.$lugar_interes.'/body/data/data-informacion.php'; ?>

<?php // $publicidad = PATH_BLOQUES_SECTIONS_CARRUSELES_CSV . '/prueba_sneakers.php'; ?>
<main class=" min-h-screen p-1 md:p-10">
  <?php require PATH_RAIZ . '/_estructura/semantica/componentes/breadcrums-generico.php'; ?>

  <?php require PATH_RAIZ . '/_estructura/semantica/body/header/print-header-generico.php'; ?>
  <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO . '/print-description-generico.php'; ?>
  <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO . '/print-galeria-dinamica-imagenes.php'; ?>
  <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO . '/print-comentarios-simulados-generico.php'; ?>
  <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO . '/print-informacion-generico.php'; ?>
  <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO . '/print-actividades-generico.php'; ?>
  <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO . '/print-mapa-generico.php'; ?>
  <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO . '/print-contacto-generico.php'; ?>
  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/anuncios/anuncios-fade-in.php'; ?>
  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/enlace-lugares-interes.php'; ?>

</main>





<?php /*


  <section class="my-8 p-4 bg-<?= COLOR_PAGE; ?>-50 rounded-lg shadow-md text-center">
    <h2 class="text-xl font-semibold text-<?= COLOR_PAGE; ?>-700 mb-4">🌟 Reserva Tours y Actividades</h2>
    <p class="text-gray-700 mb-4">
      Descubre los Acantilados del Cabo de Ajo y alrededores con los mejores tours.
      Reserva con Uniite Travel y apoya nuestro sitio mediante enlaces de afiliado.
    </p>

    <!-- Enlace de afiliado -->
    <a href="https://uniitetravel.com?fpr=adrian82"
      target="_blank"
      rel="nofollow sponsored noopener noreferrer"
      class="inline-block px-6 py-3 bg-<?= COLOR_PAGE; ?>-600 text-white font-semibold rounded-lg hover:bg-<?= COLOR_PAGE; ?>-700 transition-colors duration-300">
      Ver tours disponibles
    </a>
  </section>



  <pre>*Recuerda* 
Este blog siempre será gratuito pero tenemos algunos enlaces de afiliados. 
Si vas a reservar, a ti no te costará más hacerlo a través de nuestros enlaces 
y a nosotros nos ayudas con el mantenimiento del blog. 
¡Gracias!</pre>
  <p>&nbsp;</p>
  <div style="text-align: center;">
    <script>
      function loadScript(url, callback) {
        var script = document.createElement('script');
        script.type = 'text/javascript';
        if (script.readyState) {
          script.onreadystatechange = function() {
            if (script.readyState == 'loaded' || script.readyState == 'complete') {
              script.onreadystatechange = null;
              callback();
            }
          };
        } else {
          script.onload = function() {
            callback();
          };
        }
        script.src = url;
        document.getElementsByTagName('head')[0].appendChild(script);
      }
      loadScript('https://www.civitatis.com/f/js/vendor/iframeResizer.min.js', function() {
        iFrameResize({
          checkOrigin: false,
          initCallback: function(iframe) {
            setTimeout(function() {
              var resizeEvent = window.document.createEvent('UIEvents');
              resizeEvent.initUIEvent('resize', true, false, window, 0);
              iframe.dispatchEvent(resizeEvent);
            });
          }
        })
      })
    </script><iframe class="civitatis-iframe" style="max-width: 100%;" src="https://www.civitatis.com/widget-activities/?affiliated=11404&amp;display=compact&amp;cant=6&amp;lang=es&amp;currency=EUR&amp;zone=106&amp;transfer=0&amp;cmp=Widget_Costa_de_Cantabria_ES&amp;width=100%&amp;hideButton=0&amp;centerContent=1&amp;typeSelection=category&amp;color=f70759&amp;typography=Montserrat&amp;removeBackground=1&amp;showShadow=1&amp;roundedButtons=1" width="100%" frameborder="0" data-maxwidth="100%"></iframe>
  </div>








  <?php /*

<!-- Sección de afiliados Uniite Travel -->
<section class="my-8">
  <h2 class="text-2xl font-bold text-<?= COLOR_PAGE; ?>-700 mb-6 text-center">🌍 Tours y Experiencias con Uniite Travel</h2>
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

    <!-- Tarjeta de ejemplo 1 -->
    <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
      <img src="https://via.placeholder.com/400x250" 
           alt="Tour Costa Cantábrica" 
           class="w-full h-48 object-cover">
      <div class="p-4">
        <h3 class="text-lg font-semibold mb-2">Tour Costa Cantábrica</h3>
        <p class="text-gray-600 mb-4 text-sm">Explora los acantilados y playas de Cantabria con un guía experto y disfruta de paisajes impresionantes.</p>
        <a href="https://uniitetravel.com?fpr=adrian82" 
           target="_blank" 
           rel="nofollow sponsored noopener noreferrer"
           class="inline-block px-4 py-2 bg-<?= COLOR_PAGE; ?>-600 text-white font-semibold rounded-lg hover:bg-<?= COLOR_PAGE; ?>-700 transition-colors duration-300">
          Ver Detalles
        </a>
      </div>
    </div>

    <!-- Tarjeta de ejemplo 2 -->
    <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
      <img src="https://via.placeholder.com/400x250" 
           alt="Senderismo y Naturaleza" 
           class="w-full h-48 object-cover">
      <div class="p-4">
        <h3 class="text-lg font-semibold mb-2">Senderismo y Naturaleza</h3>
        <p class="text-gray-600 mb-4 text-sm">Rutas guiadas por los acantilados y bosques de Cantabria. Ideal para amantes del senderismo y la fotografía.</p>
        <a href="https://uniitetravel.com?fpr=adrian82" 
           target="_blank" 
           rel="nofollow sponsored noopener noreferrer"
           class="inline-block px-4 py-2 bg-<?= COLOR_PAGE; ?>-600 text-white font-semibold rounded-lg hover:bg-<?= COLOR_PAGE; ?>-700 transition-colors duration-300">
          Ver Detalles
        </a>
      </div>
    </div>

    <!-- Tarjeta de ejemplo 3 -->
    <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
      <img src="https://via.placeholder.com/400x250" 
           alt="Experiencia Gastronómica Cantabria" 
           class="w-full h-48 object-cover">
      <div class="p-4">
        <h3 class="text-lg font-semibold mb-2">Experiencia Gastronómica</h3>
        <p class="text-gray-600 mb-4 text-sm">Descubre los sabores locales de Cantabria mientras disfrutas de vistas impresionantes al mar y la naturaleza.</p>
        <a href="https://uniitetravel.com?fpr=adrian82" 
           target="_blank" 
           rel="nofollow sponsored noopener noreferrer"
           class="inline-block px-4 py-2 bg-<?= COLOR_PAGE; ?>-600 text-white font-semibold rounded-lg hover:bg-<?= COLOR_PAGE; ?>-700 transition-colors duration-300">
          Ver Detalles
        </a>
      </div>
    </div>

  </div>
</section>



*/ ?>









  <?php /*
  <section aria-label="Publicidad relacionada" class="mb-8">
    <div class="border border-gray-200 rounded shadow-sm bg-white p-4">
      <div class="text-center">
        <?php require $publicidad; ?>
      </div>
    </div>
  </section> 
  
  
    <?php $publicidad = PATH_BLOQUES_SECTIONS_CARRUSELES_CSV . '/prueba_camisas_hawaianas_man.php'; ?>
    <section aria-label="Publicidad relacionada" class="mb-8">
    <div class="border border-gray-200 rounded shadow-sm bg-white p-4">
      <div class="text-center">
        <?php require $publicidad; ?>
      </div>
    </div>
  </section>*/ ?>


  <?php /*
        <iframe src="https://www.google.com/maps/d/u/1/embed?mid=1zppFF9nLYr6SbHPRYCfmkucuNl3_7OC9" width="640" height="480"></iframe>
        <iframe src="https://www.google.com/maps/d/embed?mid=1L4SEO97SALcMFfuGKJylOveGmwvXoRg&ehbc=2E312F" width="640" height="480"></iframe> */ ?>
