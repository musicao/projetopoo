<?php

namespace Projeto\Cliente\Tipos;

use Projeto\Cliente\Pessoa;


class ClientePJ extends  Pessoa {
	 
	private $cnpj;
	private $enderecoCobranca;
	
	public function __construct($id, $nome, $cnpj, $importancia, $endereco, $enderecoCobranca) {
		$this->id = $id;
		$this->tipoCliente = 'Jurídica';
		$this->nome = $nome;
		$this->insc = $cnpj;
		$this->importancia = $importancia;
		$this->endereco = $endereco;
		$this->enderecoCobranca = $enderecoCobranca;
	}

    

     
	 
}