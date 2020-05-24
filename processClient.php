<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ficha do cliente</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>

<body>
    <?php
    require 'classes/Cliente.php';
    require 'classes/ClienteFisico.php';
    require 'classes/ClienteJuridico.php';

    switch ($_POST['tipoPessoa']) {
        case 1:
            $cliente = new ClienteFisico();
            break;
        case 2:
            $cliente = new ClienteJuridico();
            break;
    }

    $cliente->setNome($_POST['nome']);
    $cliente->setEndereco($_POST['endereco']);
    $cliente->setCpfCnpj($_POST['cpfCnpj']);
    $cliente->adicionarDesconto();
    ?>

    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand" href="index.php">Floricultura</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
        <div class="container">
            <br>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Tipo do cliente</th>
                        <th scope="col">CPF/CNPJ</th>
                        <th scope="col">Endereço</th>
                        <th scope="col">Desconto</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"><?php echo $cliente->getNome(); ?></th>
                        <td><?php echo $cliente->retornarTipo(); ?></td>
                        <td><?php echo $cliente->getCpfCnpj(); ?></td>
                        <td><?php echo $cliente->getEndereco(); ?></td>
                        <td><?php echo 'R$ ' . number_format($cliente->getDesconto(), 2, ",", "."); ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>