<?php

require 'app.php';
<<<<<<< HEAD
function incluirTemplate(string $nombre, bool $inicio = false) {
    include TEMPLATES_URL . "/$nombre.php";
=======

function incluirTemplate(string $nombre, bool $inicio = false)
{
    include TEMPLATE_URL . "/{$nombre}.php";
>>>>>>> dominical_dev
}