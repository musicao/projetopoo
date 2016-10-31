<?php

namespace SON\Cliente\Model;

use SON\Cliente\Type\ClientePF,
    SON\Cliente\Type\ClientePJ;

class BancoClientes
{
    private static $clientes = array();

    public function __construct()
    {
        self::$clientes = array(
            0 => new ClientePF("Nilton Morais", "123.321.456-01", "Rua A, nº 354 - Centro, Ilhéus-BA"),
            2 => new ClientePJ("Jéssica Abreu", "789.541.369-01", "Rua B, nº 147 - Coceição, Itabuna-BA"),
            3 => new ClientePF("Maria do Carmo", "987.741.364-05", "Rua C, nº 451 - Mangabinha, Itabuna-BA"),
            4 => new ClientePJ("João Pedro", "854.001.140-01", "Rua D, nº 09 - Centro, Contagem-MG"),
            5 => new ClientePF("Manoel Cruz", "059.905.154-01", "Rua Primeiro de Maio, nº 25 - Fátima, Itabuna-BA"),
            6 => new ClientePF("Eva Alves", "212.413.001-01", "Rua Pará de Minas, nº 354 - Centro, Contagem-MG"),
            7 => new ClientePJ("Joaquim Costa", "301.102.301-01", "Rua E, nº 256 - Centro, Camacan-BA"),
            8 => new ClientePF("Eliomar Morais", "103.054.193-01", "Rod. Ilhéus-Itabuna, SN - Salobrinho, Ilhéus-BA"),
            9 => new ClientePJ("Carla Amaral", "123.789.257-79", "Rua F, nº 123 - Centro, Ilhéus-BA"),
            10 => new ClientePF("Jeniffer Araújo", "231.321.412-01", "Rua G, nº 314 - Centro, Salvador-BA"),
        );
    }

    public function getClientes($order = "ASC")
    {
        if($order == "DESC"){
            rsort(self::$clientes);
            return self::$clientes;
        }
        return self::$clientes;
    }

    public function getCliente($id)
    {
        foreach(self::$clientes as $cliente):
            if($cliente->getId() == $id){
                return $cliente;
            }
        endforeach;

        return $id;

    }
}