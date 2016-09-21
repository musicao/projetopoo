<?php

include "iCLiente.php";

class Cliente implements iCLiente{
    private $nome;
    private $email;
    private $cidade;
    private $cpf;


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
    private function geraCPF(){

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
    public function gerarDadosCliente()
    {

        $nomes = ['ELSA','ANTONIO','MAIA','OLIVER'];
        $sobrenomes = ['Silva','Souza','Salvador','Junqueira'];

        $cidades = ['São Paulo','Salvador','Minas','Rio de Janeiro'];

        $nome = $nomes[rand(0, 3)];
        $sobrenome = $sobrenomes[rand(0, 3)];
        $cidade = $cidades[rand(0, 3)];


        return  array([strtoupper($nome . ' ' . $sobrenome), "$nome$sobrenome@email.com",$cidade, $this->geraCPF()]);
    }

    /**
     * @return mixed
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * @param mixed $cpf
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
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
}