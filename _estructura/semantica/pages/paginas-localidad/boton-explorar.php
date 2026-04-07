<div class="card-body p-4">
    <h5 class="card-title text-lg font-semibold text-red-800"><?php echo $lugar['nombre']; ?></h5>
    <p class="card-text text-muted small mb-3"><?php echo $lugar['desc']; ?></p>
    <a
        <?php /* Para amigables URLs */
        if ($_SERVER['SERVER_NAME'] == "localhost") { ?>
            href="/turismo-norte-espana/<?= $region_minuscula; ?>/<?= $localidad_minuscula; ?>/lugares-interes/<?php echo $lugar['slug'] . '/'; ?>" <?php
        } else { ?>
            href="/turismo-norte-espana/<?= $region_minuscula; ?>/<?= $localidad_minuscula; ?>/lugares-interes/<?php echo $lugar['slug']; ?>/"; <?php
        } ?>
        class="btn btn-success btn-sm px-3 py-2 shadow-sm">Explorar &rarr;
    </a>
</div>