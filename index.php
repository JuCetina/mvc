<h1>Muestra de MVC</h1>

<?php

require_once 'controllers/usuarioController.php';

$usuarios = new UsuarioController();
$usuarios->mostrarUsuarios();

$usuarios->crearUsuario();