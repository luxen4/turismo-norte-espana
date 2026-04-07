<section id="lugares-interes" class="my-10">
    <div class="text-center mb-6">
        <h2 class="text-2xl font-bold text-red-700 mb-2">📍 Lugares de Interés en <?= $localidad; ?></h2>
        <p class="text-gray-600"><?php echo $parrafo; ?></p>
    </div>

    <div class="row row-cols-1 row-cols-md-2 g-4">
        <?php foreach ($lugares_interes as $lugar): ?>
            <div class="col">
                <div class="card h-100 shadow-sm border-0 rounded-lg overflow-hidden transition hover:shadow-md">
                    <figure class="mb-0">
                        <img
                            src="/turismo-norte-espana/<?= $region_minuscula; ?>/<?= $localidad_minuscula; ?>/lugares-interes/<?php echo $lugar['slug']; ?>/img/<?php echo $lugar['imagen']; ?>"
                            class="card-img-top h-64 object-cover rounded-top"
                            alt="<?php echo $lugar['alt']; ?>">

                        <figcaption class="text-xs text-gray-500 mt-1 px-3 py-1 bg-gray-100">
                            📷 Imagen de <?php echo $lugar['nombre']; ?> – fuente:
                            <a href="<?php echo $lugar['web_imagen']; ?>" class="underline hover:text-blue-600 inline-flex items-center gap-1" target="_blank" rel="noopener noreferrer">
                                <?php echo $lugar['fuente']; ?>
                            </a>
                        </figcaption>
                    </figure>

                    <?php require PATH_RAIZ . '/_estructura/semantica/pages/paginas-localidad/boton-explorar.php'; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>
<?php //echo(PATH_HREF_RAIZ_LOCALIDADES_REGION_LOCALIDAD ."/lugares-interes/{$lugar['slug']}-{$localidad_minuscula}/index.php"); ?>
