<?php
//-----------------------------------------------------------------------------------------------------------------------------------------------------------
namespace Projeto\Cliente\Data;

//-----------------------------------------------------------------------------------------------------------------------------------------------------------
use Projeto\Cliente\Tipos\ClientePF;
use Projeto\Cliente\Tipos\ClientePJ;

//-----------------------------------------------------------------------------------------------------------------------------------------------------------

class ClienteData {
    
    private $dbConnection;
    
    public function __construct($pdo) {
        $this->dbConnection = $pdo;
    }
    
    function getClientes($ordem = 'DESC') {
        $stmt = $this->dbConnection->prepare("SELECT * FROM clientes ORDER BY id {$ordem}");
        $stmt->execute();
        
        $clientData = $stmt->fetchAll();
        return $clientData;
    }
    
    function getCliente($id) {
        $stmt = $this->dbConnection->prepare("SELECT * FROM clientes WHERE id = {$id}");
        $stmt->execute();
        
        $clientData = $stmt->fetch();
        return $clientData;        
    }
}