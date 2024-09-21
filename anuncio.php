<?php

require 'includes/funciones.php';

incluirTemplate('header', false);

?>


<main class="contenedor seccion contenido-centrado">

    <h3>Casa de Lujo en el Lago</h3>
    <picture>
        <source srcset="build/img/anuncio1.webp" type="image/webp" />
        <source srcset="build/img/anuncio1.jpg" type="image/jpeg" />
        <img src="build/img/anuncio1.jpg" alt="Anuncio casa" loading="lazy" />
    </picture>
    <div class="resumen-propiedad">

        <p>Casa en el lago con excelente vista, acabados de lujo. Excelente precio.</p>
        <p class="precio">$250,000</p>
        <ul class="iconos-caracteristicas">
            <li>
                <img class="icono" src="build/img/icono_wc.svg" alt="wc">
                <p>3</p>
            </li>
            <li>
                <img class="icono" src="build/img/icono_estacionamiento.svg" alt="estacionamiento">
                <p>3</p>
            </li>
            <li>
                <img class="icono" src="build/img/icono_dormitorio.svg" alt="dormitorio">
                <p>3</p>
            </li>
        </ul>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea itaque ex blanditiis similique minima ipsa
            officiis ullam exercitationem alias sed odit, possimus ab aliquam. Doloremque ipsa voluptates inventore
            animi excepturi.</p>
    </div> <!--.Cierre contenido-anuncio-->



</main>

<?php
incluirTemplate('footer');
?>