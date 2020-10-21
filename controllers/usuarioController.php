<?php

class UsuarioController{
    
    public function mostrarUsuarios(){

        require_once 'models/usuario.php';

        $usuario = new Usuario();
        $usuariosTodos = $usuario->obtenerUsuarios();

        require_once 'views/usuario/mostrarTodos.php';

    }

    public function crearUsuario(){
        require_once 'views/usuario/crear.php';
    }
}