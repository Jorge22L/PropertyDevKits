<?php

/** Conexión a Base de Datos */
require '../../includes/config/database.php';
$db = conectarDB();


/** Ejecutar código después que el usuario envía el formulario */
if($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $titulo = $_POST['titulo'];
    $precio = $_POST['precio'];
    $imagen = "";
    $descripcion = $_POST['descripcion'];
    $habitaciones = $_POST['habitaciones'];
    $wc = $_POST['wc'];
    $estacionamiento = $_POST['estacionamientos'];
    $vendedores_id = $_POST['vendedor'];
    
    /* Insertar en base de datos */
    $sql = "INSERT INTO bienesraices.propiedades (titulo, precio, imagen, descripcion, habitaciones, wc, estacionamiento, fechaCreacion, vendedores_id) VALUES ('$titulo', '$precio', '$imagen', '$descripcion', '$habitaciones', '$wc', '$estacionamiento', now(), '$vendedores_id')";
    
    $resultado = mysqli_query($db, $sql);
    if($resultado)
    {
        header("Location: /admin");
    }
}

require '../../includes/funciones.php';

incluirTemplate('header');

?>

<main class="contenedor seccion">
    <h1>Crear Propiedad</h1>

    <a href="/admin" class="boton boton-verde">Volver</a>

    <form class="formulario" method="POST">
        <fieldset>
            <legend>Informacion General</legend>

            <label for="titulo">Titulo:</label>
            <input type="text" name="titulo" id="titulo" placeholder="Titulo Propiedad">

            <label for="precio">Precio:</label>
            <input type="number" name="precio" id="precio" placeholder="Precio Propiedad">

            <label for="imagen">Imagen:</label>
            <input type="file" id="imagen">

            <label for="descripcion">Descripción:</label>
            <textarea name="descripcion" id="descripcion">

            </textarea>

        </fieldset>

        <fieldset>
            <legend>Informacion de la Propiedad</legend>

            <label for="habitaciones">Habitaciones:</label>
            <input type="number" name="habitaciones" id="habitaciones" placeholder="Ej: 3">

            <label for="wc">Baños:</label>
            <input type="number" name="wc" id="wc" placeholder="Ej: 3">

            <label for="estacionamientos">Estacionamientos:</label>
            <input type="number" name="estacionamientos" id="estacionamientos" placeholder="Ej: 3">

        </fieldset>

        <fieldset>
            <legend>Vendedor</legend>

            <label for="vendedor">Vendedor:</label>
            <select name="vendedor" id="vendedor">
                <option value="0">-- Seleccione --</option>
                <option value="1">Vendedor 1</option>
                <option value="2">Vendedor 2</option>
            </select>

        </fieldset>

        <input type="submit" value="Crear Propiedad" class="boton boton-verde">
    </form>

</main>

<?php
incluirTemplate('footer');
?>