<?php

require_once 'NivelUsuario.php';

class Autenticar
{
    protected const BASE_DADOS = [
        ['email' => 'joao@gmail.com', 'senha' => '123456'],
        ['email' => 'carlos@gmail.com', 'senha' => '123456'],
        ['email' => 'luana@gmail.com', 'senha' => '123456'],
        ['email' => 'marcia@gmail.com', 'senha' => '123456']
    ];

    protected const TIPOS_USUARIOS = [
        ['email' => 'joao@gmail.com', 'nivel' => NivelUsuario::NIVEL_ADM],
        ['email' => 'carlos@gmail.com', 'nivel' => NivelUsuario::NIVEL_COMUM],
        ['email' => 'luana@gmail.com', 'nivel' => NivelUsuario::NIVEL_ADM],
        ['email' => 'marcia@gmail.com', 'nivel' => NivelUsuario::NIVEL_COMUM]
    ];

    public function login($email, $senha) {
        if (in_array([
            'email' => $email, 'senha' => $senha
        ], self::BASE_DADOS)) {
            return array_filter(self::TIPOS_USUARIOS, function ($array) use ($email){
                if ($array['email'] == $email) {
                    return $array['nivel'];
                }
            });
        }
    }

}