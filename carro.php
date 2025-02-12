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
            <div class="tamanho" >
                <div class="text-center">
                    <img src="imagem/carro.png" class="imagemL img-fluid rounded ms-5 ps-3 d-block" alt="">
                </div>
                <a href="index.php">
                    <img width="30" height="30" src="https://img.icons8.com/ios-glyphs/30/ffffff/reply-arrow.png"
                        class="m-2" alt="reply-arrow" />
                </a>
                <h1 class="text-center p-2"> Formulário - Aluguel de Veículo</h1>
                <h2 class="text-center p-2"> Veículo para Locação</h2>

                <form action="cad.php" method="GET" class="formulario">

                    <input type="hidden" name="nome" value="<?php echo $_GET["nome"]?>">

                    <input type="hidden" name="cpf" value="<?php echo $_GET["cpf"] ?>">

                    <input type="hidden" name="data_nascimento" value="<?php echo $_GET["data_nascimento"] ?>">

                    <input type="hidden" name="celular" value="<?php echo $_GET["celular"]?>">

                    <input type="hidden" name="email" value="<?php echo $_GET["email"]?>">

                    <input type="hidden" name="endereco" value="<?php echo $_GET["endereco"]?>">

                    <input type="hidden" name="numero" value="<?php echo $_GET["numero"]?>">
                
                    <div class="row">

                        <div class="col-12 p-2 col-md-4">
                            <label for="nome_car" class="form-label">
                                Nome do Carro:
                            </label>
                            <input type="text" name="nome_car" class="form-control" id="inNameCar" required autofocus
                                placeholder="Digite o nome do Carro">
                        </div>

                        <div class="col-6 p-2 col-md-4">
                            <label class="form-label ">
                                Marca:
                            </label>
                            <input type="text" name="marca_car" class="form-control" id="inMarcaCar" placeholder="Marca"
                                required>
                        </div>

                        <div class="col-6 p-2 col-md-4">
                            <label class="form-label">
                                modelo:
                            </label>
                            <input type="text" class="form-control" id="inModeloCar" name="modelo_car"
                                placeholder="Digite o Modelo" required>
                        </div>

                        <div class="col-4 p-2">
                            <label class="form-label">
                                Ano:
                            </label>
                            <input type="number" class="form-control" id="inAnoCar" name="ano" placeholder="****"
                                required>
                        </div>

                        <div class="col-4 p-2">
                            <label class="form-label">
                                Cor:
                            </label>
                            <input type="text" class="form-control" id="inCorCar" placeholder="Cor" required>
                        </div>

                        <div class="col-4 p-2">
                            <label class="form-label">
                                Quilometragem:
                            </label>
                            <input type="number" class="form-control" id="inKmCar" name="inKm" placeholder="Km rodado"
                                required>
                        </div>

                        <div class="col-6 pt-5">
                            <label class="form-label">
                                Data da Locação
                            </label>
                            <input type="date" class="form-control" id="inLocado" required>
                        </div>

                        <div class="col-6 pt-5">
                            <label class="form-label" id="inEntrega" required>
                                Data da Entrega
                            </label>
                            <input type="date" class="form-control">
                        </div>


                    </div>
                    <div class="row justify-content-center">
                        <div class="d-grid col-md-6  mt-4 p-2">
                            <input type="submit" value="Enviar" class="btn btn-primary fs-4">
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