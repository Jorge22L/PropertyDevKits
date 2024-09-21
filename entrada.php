<?php

require 'includes/funciones.php';

incluirTemplate('header', false);

?>
<main class="contenedor seccion contenido-centrado">
    <h1>Guía para la decoración de tu hogar</h1>
    <article class="entrada-blog">
        <div class="imagen">
            <picture>
                <source srcset="build/img/destacada.webp" type="image/webp" />
                <source srcset="build/img/destacada.jpg" type="image/jpeg" />
                <img src="build/img/destacada.jpg" alt="Entrada blog" loading="lazy" />
            </picture>
            <p class="informacion-meta">Escrito el: <span>20/10/2022</span> por: <span>Admin</span></p>
        </div>
        <div class="texto-entrada">
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dicta alias, molestiae facere consequatur
                aliquid amet! Ipsam sint laboriosam dolor, iste iusto accusantium praesentium numquam? Dolores repellat
                quidem ullam cumque sint.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis inventore reprehenderit tempore illo et
                dignissimos eos quod voluptatum optio! Quaerat minima culpa maiores quasi nesciunt amet aspernatur,
                suscipit ullam rerum?</p>
        </div>
    </article>
</main>

<?php
incluirTemplate('footer');
?>