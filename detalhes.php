<?php
//------------------------------------------------------------------------------------------------------------
require_once('autoload.php');

//------------------------------------------------------------------------------------------------------------
use Projeto\Cliente\Db\Connect;
use Projeto\Cliente\Tipos\ClientePF;
use Projeto\Cliente\Tipos\ClientePJ;
use Projeto\Cliente\Data\ClienteData;

//------------------------------------------------------------------------------------------------------------
$idCliente = $_GET['id'];
$db = new Connect();
$pdo = $db->dbConnect();

$dadosCliente = new ClienteData($pdo);
$cliente = $dadosCliente->getCliente($idCliente);

$cliente = $cliente['tipoCliente'] == "Física" ? new ClientePF($cliente['id'], $cliente['nome'], $cliente['numId'], $cliente['importancia'], $cliente['endereco']) : new ClientePJ($cliente['id'], $cliente['nome'], $cliente['numId'], $cliente['importancia'], $cliente['endereco'], $cliente['enderecoCobranca']);

//------------------------------------------------------------------------------------------------------------
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Listagem de clientes</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">      
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    </head>
    <body>
        <header>
            <div class="page-header">
                <h1>Detalhes do cliente<small> - <?php echo $cliente->getNome(); ?></small></h1>
            </div>
        </header>
        <section>
            <ul class="list-group">
                <li>
                    <label>Tipo cliente: </label>
                    <?php echo $cliente->getTipoCliente()=='Física' ? "Pessoa física" : 'Pessoa jurídica'; ?>
                </li>                
                <li>
                    <label>Nome: </label>
                    <?php echo $cliente->getNome(); ?>
                </li>
                <li>
                    <label><?php echo $cliente->getTipoCliente()=="Física" ? 'CPF:' : 'CNPJ:'; ?> </label>
                    <?php echo $cliente->getInsc(); ?>
                </li>
                <li>
                    <label>Endereço: </label>
                    <?php echo $cliente->getEndereco(); ?>
                </li>
                <?php if( $cliente->getTipoCliente()=='Jurídica' && !empty($cliente->getEnderecoCobranca()) ): ?>
                    <li>
                        <label>Endereço cobrança: </label>
                        <?php echo $cliente->getEnderecoCobranca(); ?>
                    </li>  
                <?php endif; ?>
            </ul>
            <hr>
            <button type="button" class="btn btn-primary" onclick="javascript: history.back();">Voltar</button>            
        </section>
    </body>
</html>