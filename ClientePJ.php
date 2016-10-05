<?php

include "ClientePJInterface.php";


class ClientePJ implements ClienteImportanciaInterface,ClientePJInterface{
    private $nome;
    private $email;
    private $cidade;
    private $insc;
	private $endereco;
	private $importancia;
	private $tipoCliente = 'Jurídica';
	
	

    /**
     * Cliente constructor.
     * @param $nome
     * @param $email
     * @param $sexo
     * @param $cpf
     */



    /**
     * @return null|string
     */
    private function gerainsc(){

        $retorno = null;
        $num = '1234567890';
        $len = strlen($num);
        for ($n = 0; $n < 14; $n++) {
            $rand = mt_rand(1, $len);
            $retorno .= $num[$rand-1];
        }
        return $retorno;
    }

    /**
     * @return ClientePF
     */
    public function gerarDadosClientePJ()
    {

        $nomes = ['ELSA','ANTONIO','MAIA','OLIVER'];
        $atividades = ['Marmoraria','padaria','supermercados','Cabeleireiro'];

        $cidades = ['São Paulo','Salvador','Minas','Rio de Janeiro'];
		
		$ends = ["Praça Dr. Sampaio Vidal, 95 - Vila Formosa, 03356-060 ",
				" R. Anga, 110 - Vila Formosa " ,
				" R. Salvador do Valê, 67 - Vila Formosa, 03362-015 ",
		 		" Av. das Nações Unidas, 22540 "];

        $nome = $nomes[rand(0, 3)];
		$atividade = $atividades[rand(0, 3)];
        $cidade = $cidades[rand(0, 3)];
		$end = $ends[rand(0, 3)];


        return  array([strtoupper($nome . ' ' . $atividade), "$nome$atividade@comercial.com",$cidade, $this->gerainsc(),rand(1, 5),$end]);
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
	
	public function getEnderecoCobranca() {
		return $this->enderecoCobranca;
	}
	
	public function setEnderecoCobranca($endereco) {
		$this->enderecoCobranca = $endereco;
		return $this;
	}
}