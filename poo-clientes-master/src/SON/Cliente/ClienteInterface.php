<?php

namespace SON\Cliente;

interface ClienteInterface
{
    public function getGrauImportancia();
    public function setGrauImportancia($grau);
    public function setEnderecoCobranca($endereco);
    public function getEnderecoCobranca();
}