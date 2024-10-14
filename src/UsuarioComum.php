<?php

require_once 'Usuario.php';
require_once 'NivelUsuario.php';

class UsuarioComum extends Usuario 
{
    protected const ACESSOS = [
        'ver_produtos'
    ];

    public function liberaAcessos() 
    {
        return print_r(self::ACESSOS);
    }
}