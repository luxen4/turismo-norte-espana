<!-- Comentarios -->
<section class="my-10">
  <h2 class="text-xl font-semibold text-<?= COLOR_PAGE; ?>-700 mb-4">Comentarios</h2>
  <?php foreach ($comentarios as $i => $comentario): ?>
    <?php 
      // Caritas diferentes para cada comentario
      $caritas = ["😊", "😎", "🤩"];
      $emoji = $caritas[$i % count($caritas)];
    ?>
    <div class="bg-white p-2 rounded-lg shadow mt-3 
                transform transition duration-300 ease-in-out 
                hover:scale-105 hover:shadow-lg">
      <p class="font-semibold"><?= $emoji ?> <?= $comentario["nombre"]; ?></p>
      <p class="text-sm text-gray-600"><?= $comentario["texto"]; ?></p>
    </div>
  <?php endforeach; ?>
</section>
