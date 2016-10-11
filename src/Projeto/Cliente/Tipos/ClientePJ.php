<?php

namespace Projeto\Cliente\Tipos;

use Projeto\Cliente\Pessoa;


class ClientePJ extends  Pessoa {
	
	
	public function __construct()
	{
		$this->setTipoCliente("Jurídica");
	}

    /**
     * @return null|string
     */
    public function gerainsc(){

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

     
	 
}