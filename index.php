<?php

$rota = parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
$path = urldecode(substr($rota['path'], 1));
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Clientes</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>
<div class="row">
    <div class="container">
        <?php
        require_once('Cliente.php');
        $clientes = [];
        for ($i = 0; $i < 10; $i++){
            $cli = new Cliente();
            $dados = $cli->gerarDadosCliente();
            $dados = $dados[0];


            $cli->setNome($dados[0]);
            $cli->setEmail($dados[1]);
            $cli->setCidade($dados[2]);
            $cli->setCpf($dados[3]);
            array_push($clientes,$cli);

        }

        if($path=='DESC') {
            arsort($clientes);
        }else{
             asort($clientes);
        }
            echo '<h2>Listagem de clientes</h2>';
            echo '<a style="margin-left:5px;" class="btn btn-primary pull-right" href="/DESC">&downarrow;</a><a class="btn btn-primary pull-right" href="/ASC">&uparrow;</a>';
            echo '<table class="table"><thead><th>Nome</th><th>E-mail</th><th>Cidade</th><th>CPF</th></thead><tbody>';


            foreach ($clientes as $cliente) {
                echo '<tr><td>'.$cliente->getNome(). '</td><td>'.$cliente->getEmail() . '</td><td>'.$cliente->getCidade() . '</td><td>' .  $cliente->getCpf() . '</td></tr>';
            }
            echo '</tbody></table>';

        ?>
    </div>
</div>
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>