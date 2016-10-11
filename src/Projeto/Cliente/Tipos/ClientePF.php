<?php

namespace Projeto\Cliente\Tipos;

use Projeto\Cliente\Pessoa;
 

class ClientePF extends Pessoa{
	 
	
		public function __construct()
		{
			$this->setTipoCliente("Física");
		}
	
	/**
     * @return null|string
     */
    public function gerainsc(){

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

   
}