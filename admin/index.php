<?php

/** Conexión a Base de Datos */
require '../includes/config/database.php';
$db = conectarDB();

/**Consulta para obtener las propiedades desde BD */
$sql = "SELECT * from bienesraices.propiedades";

//Consultar a la base de datos
$resultadoConsulta = mysqli_query($db, $sql);

    require '../includes/funciones.php';

    incluirTemplate('header');

?>

    <main class="contenedor seccion">
        <h1>Administrador de Bienes raices</h1>
        <a href="/admin/propiedades/crear.php" class="boton boton-verde">Nueva Propiedad</a>
        

        <table class="propiedades">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titulo</th>
                    <th>Imagen</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            <!-- Llenando tabla desde BD -->
             <?php while($propiedad = mysqli_fetch_assoc($resultadoConsulta)): ?>
                <tr>
                    <td> <?php echo $propiedad['id']; ?> </td>
                    <td> <?php echo $propiedad['titulo']; ?> </td>
                    <td><img class="imagen-tabla" src="build/img/<?php echo $propiedad['imagen']; ?>" alt="casa"></td>
                    <td> <?php echo $propiedad['precio']; ?> </td>
                    <td>
                        <a href="#" class="boton boton-naranja-block">Actualizar</a>
                        <a href="#" class="boton boton-rojo-block">Eliminar</a>
                    </td>
                </tr>
            <?php endwhile; ?>
            </tbody>
        </table>
    </main>


    

<?php
        incluirTemplate('footer');
?>