<?php
//Importar la conexion
require __DIR__ . '/../config/database.php';
$db = conectarDB();

//Consultar
$query = "SELECT * FROM propiedades LIMIT $limite";

//Obtener el resultado
$resultado = mysqli_query($db, $query);

?>

<div class="contenedor-anuncios">
    <?php while ($propiedad = mysqli_fetch_assoc($resultado)): ?>
        <div class="anuncio">

            <img src="/imagenes/<?= $propiedad['imagen'] ?>" alt="Anuncio casa" loading="lazy">

            <div class="contenido-anuncio">
                <h3><?= $propiedad['titulo'] ?></h3>
                <p><?= $propiedad['descripcion'] ?></p>
                <p class="precio">$<?= $propiedad['precio'] ?></p>
                <ul class="iconos-caracteristicas">
                    <li>
                        <img class="icono" src="build/img/icono_wc.svg" alt="icono wc" loading="lazy">
                        <p><?php echo $propiedad['wc'] ?></p>
                    </li>
                    <li>
                        <img class="icono" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento"
                            loading="lazy">
                        <p><?php echo $propiedad['estacionamiento'] ?></p>
                    </li>
                    <li>
                        <img class="icono" src="build/img/icono_dormitorio.svg" alt="icono habitaciones" loading="lazy">
                        <p><?php echo $propiedad['habitaciones'] ?></p>
                    </li>
                </ul>
                <a href="anuncio.php?id=<?= $propiedad['id'] ?>" class="boton-naranja-block">Ver Propiedad</a>
            </div><!-- Cierre contenido anuncio -->
        </div> <!-- Cierre anuncio -->

    <?php endwhile; ?>
</div> <!-- Cierre contenedor anuncios -->

<?php
//cerrar la conexion
mysqli_close($db);
?>