<?php

//Importar la conexión
require '../includes/config/database.php';
$db = conectarDB();

//Escribir la consulta
$sql = "SELECT * FROM propiedades";

//Consultar la base de datos
$resultadoConsulta = mysqli_query($db, $sql);

//Muestra mensaje condicional
$mensaje = $_GET['resultado'] ?? null;

//Ejecutar el query para eliminar
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);

    if ($id) {

        //Eliminar la imagen del servidor
        $query = "SELECT imagen from propiedades WHERE id = $id";
        $resultado = mysqli_query($db, $query);
        $propiedad = mysqli_fetch_assoc($resultado);

        unlink('../imagenes/' . $propiedad['imagen']);

        //Eliminar la propiedad
        $sql = "DELETE FROM propiedades WHERE id = $id";
        $resultado = mysqli_query($db, $sql);

        if ($resultado) {
            header('Location: /admin?resultado=3');
        }
    }
}

//Incluye un template
require '../includes/funciones.php';
incluirTemplate('header');
?>

<main class="contenedor seccion">
    <h1>Administrador de Bienes Raíces</h1>
    <?php if (intval($mensaje) === 1): ?>
        <p class="alerta exito">Anuncio Creado correctamente</p>
    <?php elseif (intval($mensaje) === 2): ?>
        <p class="alerta exito">Anuncio Actualizado correctamente</p>
    <?php elseif (intval($mensaje) === 3): ?>
        <p class="alerta exito">Anuncio Eliminado correctamente</p>
    <?php endif; ?>

    <a href="/admin/propiedades/crear.php" class="boton boton-verde">Nueva Propiedad</a>

    <table class="propiedades">
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Imagen</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody> <!-- Mostrar los resultados -->
            <?php while ($propiedad = mysqli_fetch_assoc($resultadoConsulta)) : ?>
                <tr>
                    <td> <?php echo $propiedad['id']; ?> </td>
                    <td> <?php echo $propiedad['titulo'] ?></td>
                    <td> <img src="/imagenes/<?php echo $propiedad['imagen']; ?>" class="imagen-tabla"></td>
                    <td> $ <?php echo $propiedad['precio'] ?></td>
                    <td>
                        <form method="post" class="w-100">
                            <input type="hidden" name="id" value="<?php echo $propiedad['id']; ?>">
                            <input type="submit" class="boton-rojo-block" value="Eliminar"></a>
                        </form>
                        <a href="/admin/propiedades/actualizar.php?id=<?php echo $propiedad['id']; ?>" class="boton-naranja-block">Actualizar</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</main>

<?php

//Cerrar la conexión
mysqli_close($db);
incluirTemplate('footer');
?>