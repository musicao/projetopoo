<?php

include "ClienteImportanciaInterface.php";

class ClientePF implements ClienteImportanciaInterface{
    private $nome;
    private $email;
    private $cidade;
    private $insc;
	private $endereco;
	private $importancia;
	private $tipoCliente = 'Fisica';
	
	

    /**
     * Cliente constructor.
     * @param $nome
     * @param $email
     * @param $sexo
     * @param $insc
     */



    /**
     * @return null|string
     */
    private function gerainsc(){

        $retorno = null;
        $num = '1234567890';
        $len = strlen($num);
        for ($n = 1; $n < 12; $n++) {
            $rand = mt_rand(1, $len);
            $retorno .= $num[$rand-1];
        }
        return $retorno;
    }

    /**
     * @return Cliente
     */
    public function gerarDadosClientePF()
    {

        $nomes = ['ELSA','ANTONIO','MAIA','OLIVER'];
        $sobrenomes = ['Silva','Souza','Salvador','Junqueira'];

        $cidades = ['São Paulo','Salvador','Minas','Rio de Janeiro'];

        $nome = $nomes[rand(0, 3)];
        $sobrenome = $sobrenomes[rand(0, 3)];
        $cidade = $cidades[rand(0, 3)];


        return  array([strtoupper($nome . ' ' . $sobrenome), "$nome$sobrenome@email.com",$cidade, $this->gerainsc(),rand(1, 5),""]);
    }

    /**
     * @return mixed
     */
    public function getinsc()
    {
        return $this->insc;
    }

    /**
     * @param mixed $insc
     */
    public function setinsc($insc)
    {
        $this->insc = $insc;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
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
     */
    public function setCidade($cidade)
    {
        $this->cidade = $cidade;
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
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }
	
	public function getImportancia() {
		return $this->importancia;
	}
	
	public function setImportancia($importancia) {
		$this->importancia = $importancia;
		return $this;
	}
	
	public function getEndereco() {
		return $this->endereco;
	}
	
	public function setEndereco($endereco) {
		$this->endereco = $endereco;
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
	 * @return Cliente
	 */
	public function setTipoCliente($tipoCliente)
	{
		$this->tipoCliente = $tipoCliente;
		return $this;
	}
}