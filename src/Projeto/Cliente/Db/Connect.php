<?php
//-------------------------------------------------------------------------------------------------------------------------------------
namespace Projeto\Cliente\Db;

//-------------------------------------------------------------------------------------------------------------------------------------
use \PDO;

//-------------------------------------------------------------------------------------------------------------------------------------
class Connect {
    
    protected $config;
    
    public function __construct() {
        $this->config = parse_ini_file("config.ini", false);
		 
    }
    
    public function dbConnect() {
        $pdo = new PDO("mysql:host={$this->config['hostname']}; dbname={$this->config['database']};", $this->config['username'], $this->config['password'], [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ]);
        return $pdo;
    }
    
    public function connect() {
        $pdo = new PDO("mysql:host={$this->config['hostname']};", $this->config['username'], $this->config['password'], [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ]);
        return $pdo;
    }

    public function getDbName() {
        return $this->config['database'];
    }   
    
}