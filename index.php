<?php
 require 'includes/funciones.php';
 incluirTemplate('header', true);

?>
<main class="contenedor seccion">
    <h1>Más Sobre Nosotros</h1>
    <div class="iconos-nosotros">
        <div class="icono">
            <img src="build/img/icono1.svg" alt="Seguridad" loading="lazy" />
            <h3>Seguridad</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem dolore illo a consectetur debitis
                nobis cumque quo. Rem, quas. Quibusdam molestiae qui soluta at! Iste, in vel. Hic, sapiente
                consequuntur?</p>
        </div>
        <div class="icono">
            <img src="build/img/icono2.svg" alt="Precio" loading="lazy" />
            <h3>Precio</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem dolore illo a consectetur debitis
                nobis cumque quo. Rem, quas. Quibusdam molestiae qui soluta at! Iste, in vel. Hic, sapiente
                consequuntur?</p>
        </div>
        <div class="icono">
            <img src="build/img/icono3.svg" alt="Tiempo" loading="lazy" />
            <h3>Tiempo</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem dolore illo a consectetur debitis
                nobis cumque quo. Rem, quas. Quibusdam molestiae qui soluta at! Iste, in vel. Hic, sapiente
                consequuntur?</p>
        </div>
    </div>
</main>

<section class="seccion-contenedor">
    <h2>Casas y Departamentos en Venta</h2>
    <div class="contenedor-anuncios">
        <div class="anuncio">
            <picture>
                <source srcset="build/img/anuncio1.webp" type="image/webp">
                <source srcset="build/img/anuncio1.jpg" type="image/jpeg">
                <img src="build/img/anuncio1.jpg" alt="Anuncio casa" loading="lazy">
            </picture>
            <div class="contenido-anuncio">
                <h3>Casa de Lujo en el Lago</h3>
                <p>Casa en el lago con excelente vista, acabados de lujo a un excelente precio.</p>
                <p class="precio">$500,000</p>
                <ul class="iconos-caracteristicas">
                    <li>
                        <img src="build/img/icono_wc.svg" alt="icono wc" loading="lazy">
                        <p>3</p>
                    </li>
                    <li>
                        <img src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento" loading="lazy">
                        <p>3</p>
                    </li>
                    <li>
                        <img src="build/img/icono_dormitorio.svg" alt="icono dormitorio" loading="lazy">
                        <p>3</p>
                    </li>
                </ul>
                <a href="anuncio.html" class="boton-naranja">Ver Propiedad</a>
            </div> <!--.contenido-anuncio-->
        </div> <!--.anuncio-->
        <div class="anuncio">
            <picture>
                <source srcset="build/img/anuncio1.webp" type="image/webp">
                <source srcset="build/img/anuncio1.jpg" type="image/jpeg">
                <img src="build/img/anuncio1.jpg" alt="Anuncio casa" loading="lazy">
            </picture>
            <div class="contenido-anuncio">
                <h3>Casa de Lujo en el Lago</h3>
                <p>Casa en el lago con excelente vista, acabados de lujo a un excelente precio.</p>
                <p class="precio">$500,000</p>
                <ul class="iconos-caracteristicas">
                    <li>
                        <img src="build/img/icono_wc.svg" alt="icono wc" loading="lazy">
                        <p>3</p>
                    </li>
                    <li>
                        <img src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento" loading="lazy">
                        <p>3</p>
                    </li>
                    <li>
                        <img src="build/img/icono_dormitorio.svg" alt="icono dormitorio" loading="lazy">
                        <p>3</p>
                    </li>
                </ul>
                <a href="anuncio.html" class="boton-naranja">Ver Propiedad</a>
            </div> <!--.contenido-anuncio-->
        </div> <!--.anuncio-->
        <div class="anuncio">
            <picture>
                <source srcset="build/img/anuncio1.webp" type="image/webp">
                <source srcset="build/img/anuncio1.jpg" type="image/jpeg">
                <img src="build/img/anuncio1.jpg" alt="Anuncio casa" loading="lazy">
            </picture>
            <div class="contenido-anuncio">
                <h3>Casa de Lujo en el Lago</h3>
                <p>Casa en el lago con excelente vista, acabados de lujo a un excelente precio.</p>
                <p class="precio">$500,000</p>
                <ul class="iconos-caracteristicas">
                    <li>
                        <img src="build/img/icono_wc.svg" alt="icono wc" loading="lazy">
                        <p>3</p>
                    </li>
                    <li>
                        <img src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento" loading="lazy">
                        <p>3</p>
                    </li>
                    <li>
                        <img src="build/img/icono_dormitorio.svg" alt="icono dormitorio" loading="lazy">
                        <p>3</p>
                    </li>
                </ul>
                <a href="anuncio.html" class="boton-naranja">Ver Propiedad</a>
            </div> <!--.contenido-anuncio-->
        </div> <!--.anuncio-->
    </div>
    <div class="alinear-derecha">
        <a href="anuncios.html" class="boton-verde">Ver Todas</a>
    </div>
</section>

<section class="imagen-contacto">
    <h2>Encuentra la casa de tus sueños</h2>
    <p>Llena el formulario de contacto y un asesor se pondra en contacto con usted lo antes posible.</p>
    <a href="contacto.html" class="boton-naranja">Contactanos</a>
</section>

<div class="contenedor seccion seccion-inferior">

    <section class="blog">
        <h3>Nuestro Blog</h3>
        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog1.webp" type="image/webp">
                    <source srcset="build/img/blog1.jpg" type="image/jpeg">
                    <img src="build/img/blog1.jpg" alt="Entrada blog" loading="lazy">
                </picture>
            </div>
            <div class="texto-entrada">
                <a href="entrada.html">
                    <h4>Terraza en el techo de tu casa</h4>
                    <p class="informacion-meta">Escrito el: <span>20/10/2021</span> por: <span>Admin</span></p>
                    <p>
                        Consejos para construir una terraza en el techo de tu casa con los mejores materiales y
                        ahorrando dinero
                    </p>
                </a>
            </div>
        </article>
    </section>

    <section class="testimoniales">
        <h3>Testimoniales</h3>
        <div class="testimonial">
            <blockquote>
                El personal se comporto de una excelente forma, muy buena atención y la casa que me ofrecieron
                cumple con todas mis expectativas
            </blockquote>
            <p> -Jorge Morales</p>
        </div>
    </section>
</div>

<?php
incluirTemplate('footer');
?>