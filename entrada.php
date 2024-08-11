<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>
    <main class="contenedor seccion contenido-centrado">
        <h1>Guía para la decoración de tu hogar</h1>
        <picture>
            <source srcset="build/img/destacada.webp" type="image/webp">
            <source srcset="build/img/destacada.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada.jpg" alt="Imagen Principal">
        </picture>
        <p class="informacion-meta">Escrito el: <span>20/10/2022</span> por: <span>Admin</span></p>
        <div class="resumen-propiedad">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem blanditiis dicta quae tenetur aspernatur quasi vel eius cumque eligendi! Architecto dolore neque dolores officiis voluptatum aliquam corporis ducimus exercitationem tenetur?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, ratione natus. Asperiores delectus at corrupti, ad provident suscipit perferendis tenetur quaerat amet error veniam quam fugit aliquid, laudantium molestias enim!</p>
        </div>
    </main>

<?php 
    incluirTemplate('footer');
?>