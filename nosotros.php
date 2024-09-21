<?php

require 'includes/funciones.php';

incluirTemplate('header', false);

?>

<main class="contenedor seccion">
    <h1>Conoce más sobre nosotros</h1>
    <div class="contenido-nosotros">
        <div class="imagen">
            <picture>
                <source srcset="build/img/nosotros.webp" type="image/webp">
                <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                <img src="build/img/nosotros.jpg" alt="Nosotros" loading="lazy">
            </picture>
        </div>
        <div class="texto-nosotros">
            <blockquote>
                25 años de experiencia
            </blockquote>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eligendi aliquam maxime quas nostrum reiciendis
                facilis earum, qui dicta, distinctio ipsam, natus quo et veniam commodi! Quisquam dolorum facere vitae
                iste?</p>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eligendi aliquam maxime quas nostrum reiciendis
                facilis earum, qui dicta, distinctio ipsam, natus quo et veniam commodi! Quisquam dolorum facere vitae
                iste?</p>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eligendi aliquam maxime quas nostrum reiciendis
                facilis earum, qui dicta, distinctio ipsam, natus quo et veniam commodi! Quisquam dolorum facere vitae
                iste?</p>
        </div>
</main>

<section class="contenedor seccion">
    <h1>Más sobre Nosotros</h1>
    <div class="iconos-nosotros">
        <div class="icono">
            <img src="build/img/icono1.svg" alt="Seguridad" loading="lazy">
            <h3>Seguridad</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam culpa veritatis, officiis et eos dolorem
                magnam quis perferendis a voluptates est iure omnis excepturi eius repellendus atque labore iusto
                ducimus!</p>
        </div>
        <div class="icono">
            <img src="build/img/icono2.svg" alt="Precio" loading="lazy">
            <h3>Seguridad</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam culpa veritatis, officiis et eos dolorem
                magnam quis perferendis a voluptates est iure omnis excepturi eius repellendus atque labore iusto
                ducimus!</p>
        </div>
        <div class="icono">
            <img src="build/img/icono3.svg" alt="Tiempo" loading="lazy">
            <h3>Seguridad</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam culpa veritatis, officiis et eos dolorem
                magnam quis perferendis a voluptates est iure omnis excepturi eius repellendus atque labore iusto
                ducimus!</p>
        </div>
    </div>
</section>

<?php
incluirTemplate('footer');
?>