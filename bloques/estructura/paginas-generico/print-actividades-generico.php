<section class="mb-10">
  <h2 class="text-2xl font-bold text-green-800 mb-4"><?= $actividades["titulo"] ?></h2>
  <ul class="grid md:grid-cols-2 gap-4">
    <?php foreach ($actividades["items"] as $actividad): ?>
      <li class="bg-white p-1 rounded-xl shadow border-l-4 border-<?= COLOR_PAGE; ?>-600 hover:shadow-lg transform hover:scale-105 transition duration-300 ease-in-out flex items-center gap-3">
        <span class="text-2xl"><?= $actividad["icono"] ?></span>
        <span><?= $actividad["texto"] ?></span>
      </li>
    <?php endforeach; ?>
  </ul>
</section>
