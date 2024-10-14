<?php

require_once 'src/Administrador.php';
require_once 'src/UsuarioComum.php';
require_once 'src/Autenticar.php';

$tentativaLogin = [
    'email' => 'joao@gmail.com',
    'senha' => '123456'
];

$autenticar = new Autenticar();
$administrador = new Administrador();
$usuarioComum = new UsuarioComum();

$respostaLogin = $autenticar->login($tentativaLogin['email'], $tentativaLogin['senha']);

if ($respostaLogin[0]['nivel']->value == 'nivel adm') {
    return $administrador->liberaAcessos();
} else if ($respostaLogin[0]['nivel']->value == 'nivel comum') {
    return $usuarioComum->liberaAcessos();
}