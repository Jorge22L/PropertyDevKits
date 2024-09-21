<?php

require 'includes/funciones.php';

incluirTemplate('header', false);

?>

<main class="contenedor seccion">
    <h3>Nuestro Blog</h3>
    <article class="entrada-blog">
        <div class="imagen">
            <picture>
                <source srcset="build/img/blog1.webp" type="image/webp" />
                <source srcset="build/img/blog1.jpg" type="image/jpeg" />
                <img src="build/img/blog1.jpg" alt="Entrada blog" loading="lazy" />
            </picture>
        </div>
        <div class="texto-entrada">
            <a href="entrada.php">
                <h4>Terraza en el techo de tu casa</h4>
                <p class="informacion-meta">Escrito el: <span>20/10/2022</span> por: <span>Admin</span></p>
                <p>Consejos para construir una terraza en el techo de tu casa con los mejores materiales y ahorrando
                    dinero</p>
            </a>
        </div>
    </article>
    <article class="entrada-blog">
        <div class="imagen">
            <picture>
                <source srcset="build/img/blog1.webp" type="image/webp" />
                <source srcset="build/img/blog1.jpg" type="image/jpeg" />
                <img src="build/img/blog1.jpg" alt="Entrada blog" loading="lazy" />
            </picture>
        </div>
        <div class="texto-entrada">
            <a href="entrada.php">
                <h4>Terraza en el techo de tu casa</h4>
                <p class="informacion-meta">Escrito el: <span>20/10/2022</span> por: <span>Admin</span></p>
                <p>Consejos para construir una terraza en el techo de tu casa con los mejores materiales y ahorrando
                    dinero</p>
            </a>
        </div>
    </article>
</main>

<?php
incluirTemplate('footer');
?>