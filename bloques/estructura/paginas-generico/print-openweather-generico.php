<section class="my-10">
  <h2 class="text-xl font-semibold text-<?= COLOR_PAGE; ?>-700 mb-4">
    Tiempo en <?= $localidad; ?> (OpenWeather)
  </h2>
  <iframe 
    src="<?= $iframeSrc ?>" 
    frameborder="0" 
    width="100%" 
    height="500" 
    class="rounded-md shadow"
    loading="lazy">
  </iframe>
</section>