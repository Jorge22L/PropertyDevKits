<?php
// Base de Datos
require '../../includes/config/database.php';
$db = conectarDB();

//Consultar para obtener los vendedores
$consulta = "SELECT * FROM vendedores";
$resultado = mysqli_query($db, $consulta);

//Arreglo con mensajes de errores
$errores = [];
$titulo = "";
$precio = "";
$descripcion = "";
$habitaciones = "";
$wc = "";
$estacionamiento = "";
$vendedorId = "";

//Ejecutar el código después de que el usuario envia el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titulo = mysqli_real_escape_string($db, $_POST['titulo']);
    $precio = mysqli_real_escape_string($db, $_POST['precio']);
    $descripcion = mysqli_real_escape_string($db, $_POST['descripcion']);
    $habitaciones = mysqli_real_escape_string($db, $_POST['habitaciones']);
    $wc = mysqli_real_escape_string($db, $_POST['wc']);
    $estacionamiento = mysqli_real_escape_string($db, $_POST['estacionamiento']);
    $vendedorId = mysqli_real_escape_string($db, $_POST['vendedor']);
    //$creado = date('Y/m/d');

    $imagen = $_FILES['imagen'];


    if (!$titulo) {
        $errores[] = "Debes añadir un titulo";
    }
    if (!$precio) {
        $errores[] = "El precio es obligatorio";
    }
    if (!$descripcion) {
        $errores[] = "La descripción es obligatoria";
    }
    if ($vendedorId == 0) {
        $errores[] = "Elige un vendedor";
    }
    if (!$habitaciones) {
        $errores[] = "El numero de habitaciones es obligatorio";
    }
    if (!$wc) {
        $errores[] = "El numero de baños es obligatorio";
    }
    if (!$estacionamiento) {
        $errores[] = "El numero de estacionamiento es obligatorio";
    }
    if (!$imagen['name']) {
        $errores = "La imagen es obligatoria";
    }

    $medida = 1000 * 1000;

    if ($imagen['size'] > $medida) {
        $errores[] = "La imagen es muy grande";
    }

    //Revisar que el arreglo de errores este vacío
    if (empty($errores)) {
        /** SUBIDA DE ARCHIVOS **/

        //Crear carpeta
        $carpetaImagenes = '../../imagenes/';
        if (!is_dir($carpetaImagenes)) {
            mkdir($carpetaImagenes);
        }

        //Generar un nombre único
        $nombreImagen = md5(uniqid(rand(), true)) . ".jpg";

        //Subir la imagen
        move_uploaded_file($imagen['tmp_name'], $carpetaImagenes . $nombreImagen);

        //Insertar en la base de datos
        $query = " INSERT INTO bienesraices.propiedades (titulo, precio, imagen, descripcion, habitaciones, wc, estacionamiento, fechaCreacion, vendedores_id)";
        $query .= "VALUES ('$titulo', '$precio', '$nombreImagen', '$descripcion', '$habitaciones', '$wc', '$estacionamiento', now(), $vendedorId)";

        $resultado = mysqli_query($db, $query);
        if ($resultado) {
            header('Location: /admin?resultado=1');
        }
    }
}

require '../../includes/funciones.php';
incluirTemplate('header');
?>

<main class="contenedor seccion">
    <h1>Crear Propiedad</h1>
    <a href="/admin/index.php" class="boton boton-verde">Volver</a>

    <?php foreach ($errores as $error): ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach; ?>

    <form class="formulario" method="POST" action="/admin/propiedades/crear.php" enctype="multipart/form-data">
        <fieldset>
            <legend>Informacion General</legend>

            <label for="titulo">Título:</label>
            <input type="text" name="titulo" id="titulo" placeholder="Título de la propiedad" value="<?php echo $titulo; ?>">

            <label for="precio">Precio:</label>
            <input type="number" name="precio" id="precio" placeholder="Precio de la propiedad" min="0" value="<?php echo $precio; ?>">

            <label for="imagen">Imagen:</label>
            <input type="file" name="imagen" id="imagen" accept="image/jpeg, image/png" name="imagen">

            <label for="descripcion">descripcion:</label>
            <textarea id="descripcion" name="descripcion"><?php echo $descripcion; ?></textarea>
        </fieldset>

        <fieldset>
            <legend>Informacion de la Propiedad</legend>
            <label for="habitaciones">Habitaciones:</label>
            <input type="number" name="habitaciones" id="habitaciones" placeholder="Ej. 3" min="1" max="9" value="<?php echo $habitaciones; ?>">

            <label for="wc">Baños:</label>
            <input type="number" id="wc" name="wc" placeholder="Ej. 2" min="1" max="9" value="<?php echo $wc; ?>">

            <label for="estacionamiento">Estacionamiento:</label>
            <input type="number" name="estacionamiento" id="estacionamiento" placeholder="Ej. 1" min="1" max="9" value="<?php echo $estacionamiento; ?>">

        </fieldset>

        <fieldset>
            <legend>Vendedor</legend>
            <label for="vendedor">Vendedor:</label>
            <select name="vendedor" id="vendedor" ">
                <option value=" 0">-- Seleccione --</option>
                <?php while ($vendedor = mysqli_fetch_assoc($resultado)): ?>
                    <option <?php echo $vendedorId === $vendedor['id'] ? 'selected' : ""; ?> value="<?php echo $vendedor['id']; ?>"><?php echo $vendedor['nombre'] . " " . $vendedor['apellido']; ?></option>
                <?php endwhile; ?>
            </select>
        </fieldset>

        <input type="submit" value="Crear Propiedad" class="boton boton-verde">
    </form>
</main>

<?php
incluirTemplate('footer');
?>