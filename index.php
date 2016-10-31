<?php
//------------------------------------------------------------------------------------------------------------
require_once('autoload.php');

//------------------------------------------------------------------------------------------------------------
@$ordemExibicao = $_GET['ordemExibicao'];
$ordemExibicao = ( isset($ordemExibicao) && !empty($ordemExibicao) ) ? $ordemExibicao : 'ASC';

//------------------------------------------------------------------------------------------------------------
use Projeto\Cliente\Db\Connect;
use Projeto\Cliente\Tipos\ClientePF;
use Projeto\Cliente\Tipos\ClientePJ;
use Projeto\Cliente\Data\ClienteData;

//------------------------------------------------------------------------------------------------------------
$db = new Connect();
$pdo = $db->dbConnect();

$dadosClientes = new ClienteData($pdo);

//------------------------------------------------------------------------------------------------------------
$dbClientes = $dadosClientes->getClientes($ordemExibicao);
$clientes = [];

foreach ($dbClientes as $cliente) {
    $clientes[] = $cliente['tipoCliente'] == "Física" ? new ClientePF($cliente['id'], $cliente['nome'], $cliente['numId'], $cliente['importancia'], $cliente['endereco']) : new ClientePJ($cliente['id'], $cliente['nome'], $cliente['numId'], $cliente['importancia'], $cliente['endereco'], $cliente['enderecoCobranca']);
}

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
                <h1>Cadastro de clientes<small> CodeEducation</small></h1>
            </div>
        </header>
        <section>
            <table class="table">
                <thead>
                    <tr>
                        <th><a href="?&ordemExibicao=<?php echo $ordemExibicao == 'ASC' ? 'DESC' : 'ASC'; ?>">#</a></th>
                        <th>Tipo cliente</th>
                        <th>Importância</th>
                        <th>Nome</th>
                        <th>CPF/CNPJ</th>
                        <th>Endereço</th>
                        <th>Endereço de cobrança</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($clientes AS $cliente) : ?>
                        <tr>
                            <td><?php echo $cliente->getId(); ?></td>
                            <td><?php echo $cliente->getTipoCliente()=='física' ? "Pessoa física" : 'Pessoa jurídica'; ?></td>
                            <td>
                                <?php for( $i=1; $i<=5; $i++ ): ?>
                                    <?php if($i <= $cliente->getImportancia()):?>
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                    <?php else :?>
                                        <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                                    <?php endif; ?>
                                <?php endfor; ?>
                            </td>
                            <td><a href="detalhes.php?id=<?php echo $cliente->getId();?>" title="Clique para visualizar"><?php echo $cliente->getNome(); ?></a></td>
                            <td><?php echo $cliente->getInsc(); ?></td>
                            <td><?php echo $cliente->getEndereco(); ?></td>
                            <td><?php echo $cliente->getTipoCliente()=="Jurídica" ? $cliente->getEnderecoCobranca() : ''; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>                
            </table>
        </section>
    </body>
</html>
