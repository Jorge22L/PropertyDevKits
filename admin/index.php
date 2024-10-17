<?php

//Incluir conexión a base de datos
require '../includes/config/database.php';
$db = conectarDB();

//Consulta para obtener las propiedades
$sql = "SELECT * FROM bienesraices.propiedades";

//Consultar a la base de datos
$resultadoConsulta = mysqli_query($db, $sql);

//Mostrar mensaje condicional
$mensaje = $_GET['resultado'] ?? null;

require '../includes/funciones.php';
incluirTemplate('header');
?>

<main class="contenedor seccion">
    <h1>Administrador de Bienes Raíces</h1>
    <?php if(intval($mensaje) === 1): ?>
        <p class="alerta exito">Anuncio creado correctamente</p>
    <?php endif; ?>

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
            <!-- Mostrar los resultados -->
             <?php while($propiedad = mysqli_fetch_assoc($resultadoConsulta)) : ?>
            <tr>
                <td><?php echo $propiedad['id']; ?></td>
                <td> <?php echo $propiedad['titulo']; ?> </td>
                <td><img class="imagen-tabla" src="build/img/blog1.webp" alt="imagen blog" loading="lazy"></td>
                <td> <?php echo $propiedad['precio']; ?></td>
                <td>
                    <form>
                        <input type="submit" class="boton boton-rojo-block w-100" value="Eliminar">
                    </form>
                    <a href="#" class="boton boton-naranja-block">Actualizar</a>
                </td>
            </tr>

            <?php endwhile; ?>
        </tbody>
    </table>
</main>

<?php
incluirTemplate('footer');
?>