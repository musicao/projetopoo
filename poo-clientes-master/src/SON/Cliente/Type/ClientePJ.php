<?php

namespace SON\Cliente\Type;

use SON\Cliente\ClienteAbstract;

class ClientePJ extends ClienteAbstract
{
    public function __construct($id, $nome, $cpf, $endereco)
    {
        parent::__construct($id, $nome, $cpf, $endereco);

        $this->tipo = 2;
    }

}