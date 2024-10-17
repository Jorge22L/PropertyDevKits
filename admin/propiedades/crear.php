<?php

//Incluir conexión a base de datos
require '../../includes/config/database.php';
$db = conectarDB();

//Arreglo para mensajes de errores
$errores = [];
$titulo = "";
$precio = "";
$descripcion = "";
$habitaciones = "";
$wc = "";
$estacionamiento = "";
$vendedorId = "";

//Consulta para obtener los vendedores
$vendedores = "SELECT * FROM bienesraices.vendedores";
$resultadoVendedores = mysqli_query($db, $vendedores);

//Ejecutar código después que el usuario envía el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titulo = mysqli_real_escape_string($db, $_POST['titulo']);
    $precio = mysqli_real_escape_string($db, $_POST['precio']);
    $imagen = ''; //$_POST['imagen'];
    $descripcion = mysqli_real_escape_string($db, $_POST['descripcion']);
    $habitaciones = mysqli_real_escape_string($db, $_POST['habitaciones']);
    $wc = mysqli_real_escape_string($db, $_POST['wc']);
    $estacionamiento = mysqli_real_escape_string($db, $_POST['estacionamiento']);
    $vendedorId = mysqli_real_escape_string($db, $_POST['vendedor']);

    if (!$titulo) {
        $errores['titulo'] = 'El titulo es obligatorio';
    }
    if (!$precio) {
        $errores['precio'] = 'El precio es obligatorio';
    }
    if (!$descripcion) {
        $errores['descripcion'] = 'La descripción es obligatoria';
    }
    if ($vendedorId == 0) {
        $errores[''] = 'Elige un vendedor';
    }
    if (!$habitaciones) {
        $errores['habitaciones'] = 'El campo habitaciones es obligatorio';
    }
    if (!$wc) {
        $errores['wc'] = 'El campo wc es obligatorio';
    }
    if (!$estacionamiento) {
        $errores['estacionamiento'] = 'El campo estacionamiento es obligatorio';
    }

    //Revisar que el arreglo de errores esté vacío
    if (empty($errores)) {
        //Insertar datos en la base de datos
        $query = " INSERT INTO bienesraices.propiedades (titulo, precio,imagen, descripcion, 
    habitaciones,wc, estacionamiento, fechaCreacion, vendedores_id)";
        $query .= " VALUES('$titulo', '$precio', '$imagen', '$descripcion', '$habitaciones', '$wc', '$estacionamiento', now(), '$vendedorId')";


        $resultado = mysqli_query($db, $query);
        if ($resultado) {
            //Redireccionar al usuario
            header('Location: /admin?resultado=1');
        }

    }

    require '../../includes/funciones.php';
    incluirTemplate('header');


}
?>

<main class="contenedor seccion">
    <h1>Crear Nueva Propiedad</h1>

    <a href="/admin" class="boton boton-verde">Volver</a>

    <!-- Mostrar los errores de validación -->
    <?php foreach ($errores as $error): ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach; ?>
    <form class="formulario" method="POST">
        <fieldset>
            <legend>Información General</legend>
            <label>Titulo:</label>
            <input type="text" name="titulo" id="titulo" placeholder="Título de la propiedad"
                value="<?php echo $titulo; ?>">
            <label>Precio:</label>
            <input type="number" name="precio" id="precio" placeholder="Precio de la propiedad" min="0"
                value="<?php echo $precio; ?>">
            <label>Imagen:</label>
            <input type="file" name="imagen" id="imagen">
            <label>Descripción:</label>
            <textarea name="descripcion" id="descripcion"><?php echo $descripcion; ?></textarea>
        </fieldset>

        <fieldset>
            <legend>Información de la Propiedad</legend>
            <label>Habitaciones</label>
            <input type="number" name="habitaciones" id="habitaciones" placeholder="Ej. 3" min="1"
                value="<?php echo $habitaciones; ?>">
            <label>Baños</label>
            <input type="number" name="wc" id="wc" placeholder="Ej. 2" min="1" value="<?php echo $wc; ?>">
            <label>Estacionamientos</label>
            <input type="number" name="estacionamiento" id="estacionamiento" placeholder="Ej. 1" min="0"
                value="<?php echo $estacionamiento; ?>">
        </fieldset>

        <fieldset>
            <legend>Vendedor</legend>
            <label>Vendedor</label>
            <select name="vendedor" id="vendedor">
                <option value="">-- Seleccione --</option>
                <?php while ($vendedor = mysqli_fetch_array($resultadoVendedores)): ?>
                    <option
                        <?php echo $vendedorId === $vendedor['id'] ? 'selected': ""; ?> 
                        value="<?php echo $vendedor['id']; ?>">
                        <?php echo $vendedor['nombre'] . ' '. $vendedor['apellido']; ?>
                    </option>
                <?php endwhile; ?>
            </select>
        </fieldset>

        <input type="submit" value="Crear Propiedad" class="boton boton-verde">
    </form>
</main>

<?php
incluirTemplate('footer');
?>