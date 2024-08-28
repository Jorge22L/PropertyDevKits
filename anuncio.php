<?php
//Importar la conexion
require 'includes/config/database.php';
$db = conectarDB();

//Obtener id de la propiedad
$id = $_GET['id'];
$id = filter_var($id, FILTER_VALIDATE_INT);

if (!$id) {
    header('Location: /');
}

//Obtener los datos de la propiedad
$query = "SELECT * FROM propiedades WHERE id = $id";
$resultado = mysqli_query($db, $query);
$propiedad = mysqli_fetch_assoc($resultado);

require 'includes/funciones.php';
incluirTemplate('header');
?>
<main class="contenedor seccion contenido-centrado">
    <h1><?= $propiedad['titulo'] ?></h1>

    <img loading="lazy" src="/imagenes/<?= $propiedad['imagen'] ?>" alt="Imagen Principal">

    <div class="resumen-propiedad">
        <p class="precio">$<?= $propiedad['precio'] ?></p>
        <ul class="iconos-caracteristicas">
            <li>
                <img class="icono" src="build/img/icono_wc.svg" alt="icono wc" loading="lazy">
                <p><?= $propiedad['wc'] ?></p>
            </li>
            <li>
                <img class="icono" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento" loading="lazy">
                <p><?= $propiedad['estacionamiento'] ?></p>
            </li>
            <li>
                <img class="icono" src="build/img/icono_dormitorio.svg" alt="icono habitaciones" loading="lazy">
                <p><?= $propiedad['habitaciones'] ?></p>
            </li>
        </ul>
        <p><?= $propiedad['descripcion'] ?></p>
    </div>
</main>

<?php
//cerrar la conexion
mysqli_close($db);

incluirTemplate('footer');

?>