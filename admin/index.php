<?php
require '../includes/funciones.php';
incluirTemplate('header');
?>

<main class="contenedor seccion">
    <h1>Administrador de Bienes Raíces</h1>

    <a href="/admin/propiedades/crear.php" class="boton boton-verde">Nueva propiedad</a>

    <table class="propiedades">
        <thead>
            <tr>
                <th>Id</th> 
                <th>Titulo</th>
                <th>Imagen</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>

            <tr>
                <td>1</td>
                <td>Casa en el lago</td>
                <td><img class="imagen-tabla" src="build/img/blog1.webp" alt="imagen blog" loading="lazy"></td>
                <td>$3,000,000</td>
                <td>
                    <form>
                        <input type="submit" class="boton boton-rojo-block" value="Eliminar">
                    </form>
                    <a href="#" class="boton boton-naranja-block">Actualizar</a>
                </td>
            </tr>
        </tbody>
    </table>
</main>

<?php
incluirTemplate('footer');
?>