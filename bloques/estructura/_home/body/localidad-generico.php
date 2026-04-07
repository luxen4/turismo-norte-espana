<h3 id="<?= $localidad_minuscula ?>" 
    class="text-2xl md:text-2xl font-bold text-left text-<?= COLOR_PAGE; ?>-800 mb-6 underline">
    <a 
        <?php
        if ($_SERVER['SERVER_NAME'] == "localhost") { ?>
            href="<?= PATH_HREF_RAIZ.'/'.$region_minuscula.'/'.$localidad_minuscula ?>"<?php
        } else { ?>
            href= <?= "/turismo-norte-espana/".$region_minuscula."/".$localidad_minuscula."/"; }?>


            class="hover:text-<?= COLOR_PAGE; ?>-600 transition-colors duration-200">
        <?= $localidad; ?>
    </a>
</h3>

