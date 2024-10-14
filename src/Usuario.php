<?php

abstract class Usuario
{
    protected string $email;
    protected string $senha;
    
    abstract public function liberaAcessos();
}