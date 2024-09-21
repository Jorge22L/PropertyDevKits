<?php

require 'includes/funciones.php';

incluirTemplate('header', false);

?>

<main class="contenedor seccion">
    <section class="seccion contenedor">
        <h2>Casas y Departamentos en Venta</h2>
        <div class="contenedor-anuncios">
            <div class="anuncio">
                <picture>
                    <source srcset="build/img/anuncio1.webp" type="image/webp" />
                    <source srcset="build/img/anuncio1.jpg" type="image/jpeg" />
                    <img src="build/img/anuncio1.jpg" alt="Anuncio casa" loading="lazy" />
                </picture>
                <div class="contenido-anuncio">
                    <h3>Casa de Lujo en el Lago</h3>
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
                    <a href="anuncio.php" class="boton-naranja-block">Ver Propiedad</a>
                </div> <!--.Cierre contenido-anuncio-->

            </div> <!--.Cierre anuncio-->

            <div class="anuncio">
                <picture>
                    <source srcset="build/img/anuncio1.webp" type="image/webp" />
                    <source srcset="build/img/anuncio1.jpg" type="image/jpeg" />
                    <img src="build/img/anuncio1.jpg" alt="Anuncio casa" loading="lazy" />
                </picture>
                <div class="contenido-anuncio">
                    <h3>Casa de Lujo en el Lago</h3>
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
                    <a href="anuncio.php" class="boton-naranja-block">Ver Propiedad</a>
                </div> <!--.Cierre contenido-anuncio-->

            </div> <!--.Cierre anuncio-->

            <div class="anuncio">
                <picture>
                    <source srcset="build/img/anuncio1.webp" type="image/webp" />
                    <source srcset="build/img/anuncio1.jpg" type="image/jpeg" />
                    <img src="build/img/anuncio1.jpg" alt="Anuncio casa" loading="lazy" />
                </picture>
                <div class="contenido-anuncio">
                    <h3>Casa de Lujo en el Lago</h3>
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
                    <a href="anuncio.php" class="boton-naranja-block">Ver Propiedad</a>
                </div> <!--.Cierre contenido-anuncio-->

            </div> <!--.Cierre anuncio-->

        </div>
        <div class="alinear-derecha">
            <a href="anuncios.php" class="boton-verde">Ver todas</a>
        </div>
    </section>

</main>

<?php
incluirTemplate('footer');
?>