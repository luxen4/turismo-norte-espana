<!-- Información -->
<section class="mb-12">
  <h2 class="text-2xl font-bold text-<?= COLOR_PAGE; ?>-700 mb-4"><?= $info['titulo'] ?></h2>
  <div class="grid md:grid-cols-2 gap-6">
    <?php foreach($info['items'] as $item): ?>
      <div class="bg-white rounded-xl p-1 shadow border-l-4 border-<?= COLOR_PAGE; ?>-600 flex items-start gap-3 transform hover:scale-105 transition duration-300 ease-in-out">
        <span class="text-2xl"><?= $item['icono'] ?></span>
        <div>
          <h3 class="font-semibold text-<?= COLOR_PAGE; ?>-700 mb-1"><?= $item['titulo'] ?></h3>
          <p><?= $item['descripcion'] ?></p>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>
