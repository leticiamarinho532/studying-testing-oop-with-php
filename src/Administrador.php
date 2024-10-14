<?php

require_once 'Usuario.php';
require_once 'NivelUsuario.php';

class Administrador extends Usuario 
{
    protected const ACESSOS = [
        'manter_usuario',
        'verificar_relatorio',
        'manter_estoque'
    ];

    public function liberaAcessos() 
    {
        return print_r(self::ACESSOS);
    }
}