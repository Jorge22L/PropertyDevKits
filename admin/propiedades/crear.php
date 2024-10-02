<?php

//Incluir conexión a base de datos
require '../../includes/config/database.php';
$db = conectarDB();

require '../../includes/funciones.php';
incluirTemplate('header');

//Ejecutar código después que el usuario envía el formulario
if($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $titulo = mysqli_real_escape_string($db, $_POST['titulo']);
    $precio = mysqli_real_escape_string($db,  $_POST['precio']);
    $imagen = ''; //$_POST['imagen'];
    $descripcion = mysqli_real_escape_string($db, $_POST['descripcion']);
    $habitaciones = mysqli_real_escape_string($db, $_POST['habitaciones']);
    $wc = mysqli_real_escape_string($db, $_POST['wc']);
    $estacionamiento = mysqli_real_escape_string($db, $_POST['estacionamiento']);
    $vendedorId = mysqli_real_escape_string($db, $_POST['vendedor']);

    //Insertar datos en la base de datos
    $query = " INSERT INTO bienesraices.propiedades (titulo, precio,imagen, descripcion, 
    habitaciones,wc, estacionamiento, fechaCreacion, vendedores_id)";
    $query .= " VALUES('$titulo', '$precio', '$imagen', '$descripcion', '$habitaciones', '$wc', '$estacionamiento', now(), '$vendedorId')";

    $resultado = mysqli_query($db, $query);
    if($resultado)
    {
        //Redireccionar al usuario
        header('Location: /admin');
    }
}
?>

<main class="contenedor seccion">
    <h1>Crear Nueva Propiedad</h1>

    <a href="/admin" class="boton boton-verde">Volver</a>

    <form class="formulario" method="POST">
        <fieldset>
            <legend>Información General</legend>
            <label>Titulo:</label>
            <input type="text" name="titulo" id="titulo" placeholder="Título de la propiedad">
            <label>Precio:</label>
            <input type="number" name="precio" id="precio" placeholder="Precio de la propiedad" min="0">
            <label>Imagen:</label>
            <input type="file" name="imagen" id="imagen">
            <label>Descripción:</label>
            <textarea name="descripcion" id="descripcion"></textarea>
        </fieldset>

        <fieldset>
            <legend>Información de la Propiedad</legend>
            <label>Habitaciones</label>
            <input type="number" name="habitaciones" id="habitaciones" placeholder="Ej. 3" min="1">
            <label>Baños</label>
            <input type="number" name="wc" id="wc" placeholder="Ej. 2" min="1">
            <label>Estacionamientos</label>
            <input type="number" name="estacionamiento" id="estacionamiento" placeholder="Ej. 1" min="1">
        </fieldset>

        <fieldset>
            <legend>Vendedor</legend>
            <label>Vendedor</label>
            <select name="vendedor" id="vendedor">
                <option value="">-- Seleccione --</option>
                <option value="1">Vendedor 1</option>
            </select>
        </fieldset>

        <input type="submit" value="Crear Propiedad" class="boton boton-verde">
    </form>
</main>

<?php
incluirTemplate('footer');
?>