<?php
//------------------------------------------------------------------------------------------------------------
namespace Projeto\Cliente\Data;

//------------------------------------------------------------------------------------------------------------
use \PDO;

//------------------------------------------------------------------------------------------------------------

class ClientePersist {
    
    protected $pdo;
    protected $clientes;    
    
    public function __construct($pdo) {
        $this->pdo = $pdo;
    }  
    
    public function persist($cliente) {
        $this->clientes[] = $cliente;
        return $this;
    }
    
    public function flush() {
        foreach($this->clientes as $cliente) {
            $stmt = $this->pdo->prepare("INSERT INTO clientes(nome, endereco, enderecoCobranca, importancia, tipoCliente, numId) VALUES(:nome, :endereco, :enderecoCobranca, :importancia, :tipoCliente, :numId)");
            $stmt->bindValue(":nome", $cliente->getNome());
            $stmt->bindValue(":endereco", $cliente->getEnderecoCobranca());
            $stmt->bindValue(":enderecoCobranca", $cliente->getTipoCliente()=="PJ" ? $cliente->getEnderecoCobranca() : '');
            $stmt->bindValue(":importancia", $cliente->getImportancia());
            $stmt->bindValue(":tipoCliente", $cliente->getTipoCliente());
            $stmt->bindValue(":numId", $cliente->getInsc());
            $stmt->execute();
        }
    }    
    
    public function getClientes() {
        return $this->clientes;
    }
        
}