<?php 
if ($_SERVER['SERVER_NAME'] == "localhost") { ?>
    href="/turismo-norte-espana/<?= $region_minuscula; ?>/<?= $localidad_minuscula; ?>/lugares-interes/<?= $playa_name_minuscula; ?>"<?php

} else { ?>
    href="/turismo-norte-espana/<?= $region_minuscula; ?>/<?= $localidad_minuscula; ?>/lugares-interes/<?= $playa_name_minuscula; ?>" <?php
}?>

