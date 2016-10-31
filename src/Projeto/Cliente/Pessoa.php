<?php

namespace Projeto\Cliente;

 

abstract  class Pessoa implements ClienteEnderecoInterface, ClienteImportanciaInterface
{
	protected $id;
	protected $nome;
	protected $email;
	protected $cidade;
	protected $insc;
	protected $endereco;
	protected $importancia;
	protected $tipoCliente;
	
	/**
	 * @return mixed
	 */
	public function getNome()
	{
		return $this->nome;
	}
	
	/**
	 * @param mixed $nome
	 * @return Pessoa
	 */
	public function setNome($nome)
	{
		$this->nome = $nome;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getEmail()
	{
		return $this->email;
	}
	
	/**
	 * @param mixed $email
	 * @return Pessoa
	 */
	public function setEmail($email)
	{
		$this->email = $email;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getCidade()
	{
		return $this->cidade;
	}
	
	/**
	 * @param mixed $cidade
	 * @return Pessoa
	 */
	public function setCidade($cidade)
	{
		$this->cidade = $cidade;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getInsc()
	{
		return $this->insc;
	}
	
	/**
	 * @param mixed $insc
	 * @return Pessoa
	 */
	public function setInsc($insc)
	{
		$this->insc = $insc;
		return $this;
	}
	
	
	
	/**
	 * @return mixed
	 */
	public function getImportancia()
	{
		return $this->importancia;
	}
	
	/**
	 * @param mixed $importancia
	 * @return Pessoa
	 */
	public function setImportancia($importancia)
	{
		$this->importancia = $importancia;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getTipoCliente()
	{
		return $this->tipoCliente;
	}
	
	/**
	 * @param mixed $tipoCliente
	 * @return Pessoa
	 */
	public function setTipoCliente($tipoCliente)
	{
		$this->tipoCliente = $tipoCliente;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getEnderecoCobranca()
	{
		return $this->endereco;
	}
	
	/**
	 * @param mixed $endereco
	 * @return Pessoa
	 */
	public function setEnderecoCobranca($endereco)
	{
		$this->endereco = $endereco;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getId()
	{
		return $this->id;
	}
	
	/**
	 * @param mixed $id
	 */
	public function setId($id)
	{
		$this->id = $id;
	}
	
	/**
	 * @return mixed
	 */
	public function getEndereco()
	{
		return $this->endereco;
	}
	
	/**
	 * @param mixed $endereco
	 */
	public function setEndereco($endereco)
	{
		$this->endereco = $endereco;
	}
	 
	
		
}