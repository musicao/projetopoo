<?php

namespace SON\Cliente\Model;


use SON\Cliente\ClienteAbstract;
use SON\Cliente\Type\ClientePF;
use SON\Cliente\Type\ClientePJ;

class ClienteModel
{
    private $conn;

    public function __construct(\PDO $conn)
    {
        $this->conn = $conn;
    }

    public function fetchAll($order = "ASC")
    {
        $array = array();

        $consulta = $this->conn->query("SELECT * FROM clientes ORDER BY nome {$order}");

        while ($row = $consulta->fetch(\PDO::FETCH_ASSOC)) {
            if($row['tipo'] == 1) {
                $array[$row['id']] = new ClientePF($row['id'], $row['nome'], $row['cpf'], $row['endereco']);
            }
            else{
                $array[$row['id']] = new ClientePJ($row['id'], $row['nome'], $row['cpf'], $row['endereco']);
            }
        }

        return $array;
    }

    public function insert(ClienteAbstract $cliente)
    {
        $stmt = $this->conn->prepare('INSERT INTO clientes VALUES(:id, :nome, :cpf, :endereco, :enderecoCobranca, :tipo, :grau)');
        $stmt->execute(
            array(
                ':id' => null,
                ':nome' => $cliente->getNome(),
                ':cpf' => $cliente->getCpf(),
                ':endereco' => $cliente->getEndereco(),
                ':enderecoCobranca' => $cliente->getEnderecoCobranca(),
                ':tipo' => $cliente->getTipo(),
                ':grau' => $cliente->getGrauImportancia(),
            ));
    }

    public function find($id)
    {
        $consulta = $this->conn->query("SELECT * FROM clientes WHERE id = {$id}");
        $row = $consulta->fetch(\PDO::FETCH_ASSOC);

        if($row['tipo'] == 1) {
            return new ClientePF($row['id'], $row['nome'], $row['cpf'], $row['endereco']);
        }
        else{
            return new ClientePJ($row['id'], $row['nome'], $row['cpf'], $row['endereco']);
        }
    }

    public function getConn()
    {
        return $this->conn;
    }

    public function setConn($conn)
    {
        $this->conn = $conn;
        return $this;
    }



}