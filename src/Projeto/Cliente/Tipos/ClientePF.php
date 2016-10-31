<?php

namespace Projeto\Cliente\Tipos;

use Projeto\Cliente\Pessoa;
 

class ClientePF extends Pessoa{
	 
	
	 
	
	public function __construct($id, $nome, $cpf, $importancia, $endereco) {
		$this->id = $id;
		$this->tipoCliente = 'Física';
		$this->nome = $nome;
		$this->insc = $cpf;
		$this->importancia = $importancia;
		$this->endereco = $endereco;
	}
	 

    
   
}