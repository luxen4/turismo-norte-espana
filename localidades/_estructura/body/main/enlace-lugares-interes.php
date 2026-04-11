<div class="text-center mt-2">
  <a
    <?php
    if ($_SERVER['SERVER_NAME'] == "localhost") {
        echo 'href="' . PATH_HREF_RAIZ .  '/'.$region_minuscula.'/'.$localidad_minuscula.'"';
    } else {
        echo 'href="' . PATH_HREF_RAIZ .  '/'.$localidad_minuscula.'"';
    }
    ?>
    class="inline-flex items-center gap-1 text-<?= COLOR_PAGE; ?>-500 text-sm hover:underline transition-colors duration-200"
    aria-label="Volver a la lista de lugares de interés"
  >
    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-<?= COLOR_PAGE; ?>-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
    </svg>
    Otros lugares de interés en <?= $localidad; ?>
  </a>
</div>