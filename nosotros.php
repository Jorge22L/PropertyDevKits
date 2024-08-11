<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Conoce sobre nosotros</h1>

        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="image/webp">
                    <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                    <img src="build/img/nosotros.jpg" alt="Imagen Sobre Nosotros" loading="lazy">
                </picture>
            </div>

            <div class="texto-nosotros">
                <blockquote>25 años de experiencia</blockquote>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus assumenda neque, eos esse veniam, blanditiis tempora vitae quaerat nostrum repellendus veritatis eius eaque voluptate, consequatur consectetur! Impedit laboriosam excepturi temporibus.</p>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quibusdam quos sequi blanditiis non similique sed porro ipsam dignissimos, debitis animi eaque ullam cumque enim ex voluptates? Nobis a commodi ipsam?</p>
            </div>
        </div>
    </main>
    <section class="contenedor seccion">
        <h1>Más Sobre Nosotros</h1>
        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="Icono Seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex praesentium perspiciatis, labore provident nemo perferendis, officiis id, voluptatibus ipsa est sapiente sunt repellat enim saepe sed nulla asperiores voluptates possimus.</p>
            </div>
            <div class="icono">
                <img src="build/img/icono2.svg" alt="Icono Precio" loading="lazy">
                <h3>Seguridad</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex praesentium perspiciatis, labore provident nemo perferendis, officiis id, voluptatibus ipsa est sapiente sunt repellat enim saepe sed nulla asperiores voluptates possimus.</p>
            </div>
            <div class="icono">
                <img src="build/img/icono3.svg" alt="Icono tiempo" loading="lazy">
                <h3>Seguridad</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex praesentium perspiciatis, labore provident nemo perferendis, officiis id, voluptatibus ipsa est sapiente sunt repellat enim saepe sed nulla asperiores voluptates possimus.</p>
            </div>
        </div>
    </section>

<?php 
    incluirTemplate('footer');
?>