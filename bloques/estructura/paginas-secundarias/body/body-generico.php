<?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_SECUNDARIAS_HEADER . "/barra-navegacion-paginas-secundarias.php"; ?>

<main id="main-content" role="main" class="py-6">
  <div class="max-w-screen-xl mx-auto px-4 flex flex-col md:flex-row gap-6">

    <!-- Contenido principal -->
    <section class="w-full md:w-3/4">
      <?php 
      // Carga de contenido principal
      // require PATH_RAIZ_LOCALIDADES_CARPETA_PAGINAS_SECUNDARIAS_ACTIVIDADES_RECOMENDADAS."/".LUGAR_MINUSCULA.".php"; 
      require PATH_RAIZ_LOCALIDADES_CARPETA_PAGINAS_SECUNDARIAS_TEMA . "/section.php"; 
      ?>

      <!-- Enlace que cierra la pestaña -->
      <div class="text-center mt-6">
        <a
          href="#"
          onclick="window.close(); return false;"
          class="inline-block text-green-600 font-semibold hover:text-green-800 transition-colors duration-200"
        >
          Playa de <?= $nombre_playa; ?>
        </a>
      </div>
    </section>

    <!-- Sidebar oculto en móviles -->
    <aside class="hidden md:block md:w-1/4">
      <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_PLAYA_BODY_MAIN . '/sidebar-playa.php'; ?>
    </aside>

  </div>
</main>


<?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO . "/footer-generico.php"; ?>
<?php //require PATH_RAIZ_BLOQUES_ESTRUCTURA . "/paginas-generico/footer.php"; ?>
<?php //require PATH_RAIZ . "/anuncios/pop-up-publicitario2.php";  Ya se pondrá?>






<?php /*
<!-- Enlace a la ficha de la playa -->
<div class="text-center mb-3">
    <a class="nav-link text-success fw-bold" 
       href="/Blog_Playas2026/<?= $region_minuscula ?>/<?= $localidad_minuscula; ?>/index.php" 
       target="_blank"
       onclick="window.open(this.href, '_blank'); window.close(); return false;">
        Playa de <?= $nombre_playa; ?>
    </a>
</div> */ ?>