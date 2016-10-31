<?php

namespace SON\Cliente;


abstract class ClienteAbstract implements ClienteInterface
{
    protected $id;
    protected $nome;
    protected $cpf;
    protected $endereco;
    protected $enderecoCobranca;
    protected $tipo;
    protected $grau;

    public function __construct($id, $nome, $cpf, $endereco, $grau = null)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->endereco = $endereco;
        $this->id = $id;
        $this->grau = $grau;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
        return $this;
    }

    public function getEndereco()
    {
        return $this->endereco;
    }

    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
        return $this;
    }

    public function getId()
    {
        return $this->id;
    }


    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
        return $this;
    }


    public function getTipo()
    {
        return $this->tipo;
    }

    public function isPessoaFisica(){
        if($this->tipo == 1){
            return true;
        }
        return false;
    }

    public function isPessoaJuridica(){
        if($this->tipo == 2){
            return true;
        }
        return false;
    }

    public function getGrauImportancia()
    {
        return $this->grau;
    }

    public function setGrauImportancia($grau)
    {
        $this->grau = $grau;
        return $this;
    }

    public function setEnderecoCobranca($endereco)
    {
        $this->enderecoCobranca = $endereco;
        return $this;
    }

    public function getEnderecoCobranca()
    {
       return $this->enderecoCobranca;
    }
}