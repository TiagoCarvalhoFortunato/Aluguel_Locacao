<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Formulários</title>
</head>

<body>
    <div class="container">
        <div class="row g-3 justify-content-center align-items-center vh-100">
            <div class="tamanho">
                <div class="text-center">
                    <img src="imagem/carro.png" class="imagemL img-fluid rounded ms-5 ps-3 d-block" alt="">
                </div>
                <h1 class="text-center p-2"> Formulário - Aluguel de Veículo</h1>
                <h2 class="text-center p-2"> Cadastro do Cliente</h2>

                <form action="carro.php" class="formulario" method="GET">
                    <div class="row">

                        <div class="col-12 p-2 col-md-6">
                            <label for="nome" class="form-label">
                                Nome Completo:
                            </label>
                            <input type="text" name="nome" class="form-control" id="inName" required autofocus
                                placeholder="Digite seu nome completo">
                        </div>

                        <div class="col-12 p-2 col-md-6">
                            <label class="form-label ">
                                CPF:
                            </label>
                            <input type="number" name="cpf" class="form-control" id="inCpf" placeholder="Digite seu CPF"
                                required>
                        </div>

                        <div class="col-6 p-2">
                            <label class="form-label pt-2">
                                Data de Nascimento:
                            </label>
                            <input type="date" name="data_nascimento" class="form-control" id="inNascimeto"
                                placeholder="**/**/****" required>
                        </div>

                        <div class="col-6 p-2">
                            <label class="form-label pt-2">
                                Celular:
                            </label>
                            <input type="tel" name="celular" class="form-control" id="inCelular"
                                placeholder="Digite seu número" required >
                        </div>

                        <div class="col-12 p-2 col-md-6">
                            <label class="form-label">
                                E-mail:
                            </label>
                            <input type="email" name="email" class="form-control" id="inEmail"
                                placeholder="*******@****.com" required>
                        </div>

                        <div class="col-8 p-2 col-md-4">
                            <label class="form-label">
                                Endereço:
                            </label>
                            <input type="text" class="form-control" id="inRua" placeholder="Rua" name="endereco" required>
                        </div>

                        <div class="col-4 p-2 col-md-2">
                            <label class="form-label">
                                Nº:
                            </label>
                            <input type="number" class="form-control" id="inNumCasa" name="numero" placeholder="número" required>
                        </div>

                    </div>


                    <div class="row justify-content-center">
                        <div class="d-grid col-md-6  mt-4 p-2 d-flex justify-content-center">
                            <input type="submit" value="Próximo &gt;&gt;" class="btn btn-primary fs-4 me-2">
                            <input type="reset" value="Limpar Formulário" class="btn btn-primary fs-4">
                        </div>
                    </div>


                </form>

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>