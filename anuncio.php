<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>
    <main class="contenedor seccion contenido-centrado">
        <h1>Casa en Venta frente al bosque</h1>

        <picture>
            <source srcset="build/img/destacada.webp" type="image/webp">
            <source srcset="build/img/destacada.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada.jpg" alt="Imagen Principal">
        </picture>

        <div class="resumen-propiedad">
            <p class="precio">$3,000,000</p>
            <ul class="iconos-caracteristicas">
                <li>
                    <img class="icono" src="build/img/icono_wc.svg" alt="icono wc" loading="lazy">
                    <p>3</p>
                </li>
                <li>
                    <img class="icono" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento" loading="lazy">
                    <p>3</p>
                </li>
                <li>
                    <img class="icono" src="build/img/icono_dormitorio.svg" alt="icono habitaciones" loading="lazy">
                    <p>3</p>
                </li>
            </ul>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem blanditiis dicta quae tenetur aspernatur quasi vel eius cumque eligendi! Architecto dolore neque dolores officiis voluptatum aliquam corporis ducimus exercitationem tenetur?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, ratione natus. Asperiores delectus at corrupti, ad provident suscipit perferendis tenetur quaerat amet error veniam quam fugit aliquid, laudantium molestias enim!</p>
        </div>
    </main>

<?php 
    incluirTemplate('footer');
?>