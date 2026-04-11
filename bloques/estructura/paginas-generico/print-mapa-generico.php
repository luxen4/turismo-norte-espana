<!-- Leaflet CSS/JS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

<!-- Mapa -->
<section class="mb-12">
  <h2 class="text-2xl font-bold text-<?= COLOR_PAGE; ?>-700 mb-4"><?= $mapa['titulo'] ?></h2>
  <div id="<?= $mapa['map_id'] ?>" class="w-full h-80 rounded-xl shadow"></div>
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      var map = L.map('<?= $mapa['map_id'] ?>').setView([<?= $mapa['centro'][0] ?>, <?= $mapa['centro'][1] ?>], <?= $mapa['zoom'] ?>);

      L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors'
      }).addTo(map);

      L.marker([<?= $mapa['marker']['coords'][0] ?>, <?= $mapa['marker']['coords'][1] ?>])
        .addTo(map)
        .bindPopup('<?= $mapa['marker']['popup'] ?>')
        .openPopup();
    });
  </script>
</section>