<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Cadastro do cliente!</title>
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand" href="#">Floricultura</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
        <div class="container">
            <br>
            <div class="alert alert-warning" role="alert">
                Cadastre um cliente para seguir, escolhendo se é pessoa física ou jurídica.
            </div>
            <form action="processClient.php" method="post">
                <div class="form-group">
                    <label for="formGroupExampleInput">Nome:</label>
                    <input type="text" class="form-control" name="nome" placeholder="Nome do cliente" required>
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Endereço:</label>
                    <input type="text" class="form-control" name="endereco" placeholder="Endereço do cliente" required>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="tipoPessoa" value="1" required>
                    <label class="form-check-label" for="exampleRadios1">
                        Pessoa Física
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="tipoPessoa" value="2" required>
                    <label class="form-check-label" for="exampleRadios2">
                        Pessoa Jurídica
                    </label>
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput">CPF/CNPJ:</label>
                    <input type="text" class="form-control" name="cpfCnpj" placeholder="Digite o CPF ou CNPJ" required>
                </div>
                <input class="btn btn-success" type="submit" value="Enviar">
            </form>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>