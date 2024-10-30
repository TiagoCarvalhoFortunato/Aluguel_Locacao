<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>

<body>
    <div class="container">
        <div class="row g-3 justify-content-center align-items-center vh-100">
            <div class="tamanho">
                <a href="javascript:history.go(-1)">
                    <img width="30" height="30" src="https://img.icons8.com/ios-glyphs/30/ffffff/reply-arrow.png" class="m-2" alt="reply-arrow" />
                </a>
                <div class="text-center">
                    <img src="imagem/carro.png" class="imagemL img-fluid rounded ms-5 ps-3 d-block" alt="">
                </div>
                <header>
                    <h1 class="text-center p-2">Lort Locação</h1>
                </header>
                <main class="formulario">
                    <?php
                    
                    //Definição das classes abstratas

                    abstract class VeiculoAbstrata
                    {
                        protected $codigo_veiculo;
                        protected $nome;
                        protected $marca;
                        protected $modelo;
                        protected $ano;
                        protected $cor;
                        protected $quilometragem;
                        abstract public function Veiculo_Cadastro($cod, $array_parametros);
                        abstract public function Veiculo_Alteracao($cod, $array_parametros);
                        abstract public function Veiculo_Exclusao($cod);
                    }

                    abstract class ClienteAbstrata
                    {
                        protected $codigo_cliente;
                        protected $nome;
                        protected $endereco;
                        protected $email;
                        protected $telefone;
                        protected $celular;
                        abstract public function Cliente_Aluga_Veiculo($cod, $array_parametros);
                        abstract public function Cliente_Devolve_Veiculo($cod, $array_parametros);
                        abstract public function Cliente_Reserva_Veiculo($cod, $array_parametros);
                        abstract public function Cliente_Exclusão($cod);
                    }

                    // Implementação da classe veículo
                    class Veiculo extends VeiculoAbstrata
                    {

                        public function Veiculo_Cadastro($cod, $array_parametros)
                        {
                            echo "Dados para cadastro do veículo de código $cod:<br>";
                            foreach ($array_parametros as $campo)
                                echo $campo . "<br>";
                        }

                        public function Veiculo_Alteracao($cod, $array_parametros)
                        {
                            echo "Dados para alteração do ceiculo de código $cod:<br>";
                            foreach ($array_parametros as $campo) {
                                echo $campo . "<br>";
                            }
                        }
                        public function Veiculo_Exclusao($cod)
                        {
                            echo "Exlusão do veículo de código $cod";
                        }
                    }


                    // Implementação das classes dos clientes
                    class Cliente extends ClienteAbstrata
                    {

                        public function Cliente_Aluga_Veiculo($cod, $array_parametros)
                        {
                            $codigoVeiculo = $array_parametros[0];
                            $dataAluguel = $array_parametros[1];
                            $periodo = $array_parametros[2];
                            $valor = $array_parametros[3];
                            echo "O cliente de código $cod irá alugar o veículo $codigoVeiculo a partir de $dataAluguel, por $periodo. O preço é R\$ $valor.";
                        }

                        public function Cliente_Devolve_Veiculo($cod, $array_parametros)
                        {
                            $codigoVeiculo = $array_parametros[0];
                            $dataAluguel = $array_parametros[1];
                            echo "O cliente de código $cod devolveu o veículo $codigoVeiculo, alugado em $dataAluguel";
                        }

                        public function Cliente_Reserva_Veiculo($cod, $array_parametros)
                        {

                            $codigoVeiculo = $array_parametros[0];
                            $dataAluguel = $array_parametros[1];
                            echo "O cliente de código $cod reservou o veículo $codigoVeiculo para o dia $dataAluguel.";
                        }

                        public function Cliente_Exclusão($cod)
                        {
                            echo "Exclusão do cliente de código $cod.";
                        }
                    }

                    class PessoaFisica extends Cliente
                    {
                        private $cpf;
                        private $rg;
                        private $data_nascimento;
                        private function testaCPF($cpf)
                        {
                            function cpf_validacao($cpf)
                            {

                                $erro = false;
                                $aux_cpf = "";

                                for ($i = 0; $i < strlen($cpf); $i++) {

                                    if (substr($cpf, $i, 1) >= "0" and substr($cpf, $i, 1) <= "9")
                                        $aux_cpf .= substr($cpf, $i, 1);

                                    if (strlen($aux_cpf) != 11)
                                        $erro = true;

                                    else {
                                        $cpf1 = $aux_cpf;
                                        $cpf2 = substr($cpf, -2);
                                        $controle = "";
                                        $start = 2;
                                        $end = 10;

                                        for ($a = 1; $a <= 2; $a++)
                                            $soma = 0;
                                        for ($b = $start; $b <= $end; $b++)
                                            $soma += substr($cpf, ($b - $a - 1), 1) * ($end + 1 + $a + $b);
                                        if ($a == 2)
                                            $digito = ($soma * 10) % 11;
                                        $soma += $digito * 2;
                                        if ($digito == 10)
                                            $digito = 0;
                                        $controle .= $digito;
                                        $start = 3;
                                        $end = 11;
                                    }
                                    // if($controle != $cpf2)
                                    // $erro = true;
                                }
                                return $erro;
                            }

                            if (cpf_validacao($cpf)) {

                                $erro = false;
                                $aux_cpf = "";

                                for ($i = 0; $i < strlen($cpf); $i++) {

                                    if (substr($cpf, $i, 1) >= "0" and substr($cpf, $i, 1) <= "9")
                                        $aux_cpf .= substr($cpf, $i, 1);

                                    if (strlen($aux_cpf) != 11)
                                        $erro = true;

                                    else {
                                        $cpf1 = $aux_cpf;
                                        $cpf2 = substr($cpf, -2);
                                        $controle = "";
                                        $start = 2;
                                        $end = 10;

                                        for ($a = 1; $a <= 2; $a++)
                                            $soma = 0;
                                        for ($b = $start; $b <= $end; $b++)
                                            $soma += substr($cpf, ($b - $a - 1), 1) * ($end + 1 + $a + $b);
                                        if ($a == 2)
                                            $digito = ($soma * 10) % 11;
                                        $soma += $digito * 2;
                                        if ($digito == 10)
                                            $digito = 0;
                                        $controle .= $digito;
                                        $start = 3;
                                        $end = 11;
                                    }
                                    if ($controle != $cpf2)
                                        $erro = true;
                                }
                                return $erro;
                            }

                            if (cpf_validacao($cpf)) {
                                echo "O CPF digitado é inválido";
                                exit;
                            }
                        }


                        public function Cadastro($cod, $array_parametros)
                        {
                            echo "Dados para cadastro do cliente (pessoa fisica) de código $cod:<br>";
                            foreach ($array_parametros as $campo)
                                echo $campo . "<br>";
                        }

                        public function Alteracao($cod, $array_parametros)
                        {
                            echo "Dados para alteração do cliente (pessoa fisica) de código $cod<br>";
                            foreach ($array_parametros as $campo)
                                echo $campo . "<br.";
                        }
                    }

                    class PessoaJuridica extends Cliente
                    {
                        private $cpf;
                        private $incricao_estadual;
                        private $data_de_fundacao;
                        private $pesoa_responsavel;
                        private $website;
                        private function testaCNPJ($cnpj)
                        {
                            if (strlen($cnpj) != 0) {
                                echo "Cnpj precisa ter 11 dígitos";
                                return false;
                            }
                        }

                        public function Cadastro($cod, $array_parametros)
                        {
                            echo "Dados para cadastro do cliente (pessoa juridica) de código $cod:<br>";
                            foreach ($array_parametros as $campo)
                                echo "$campo <br>";
                        }

                        public function Alteracao($cod, $array_parametros)
                        {
                            echo "Dados para alteração do cliente (pessoa jurídica) de código $cod:<br>";
                            foreach ($array_parametros as $campo) {
                                echo "$campo<br>";
                            }
                        }
                    }
                    //PESSOA FISICA
                    $nome = $_GET["nome"];
                    $cpf = $_GET["cpf"];
                    $data_nascimento = $_GET["data_nascimento"];
                    $celular = $_GET["celular"];
                    $email= $_GET["email"];

                    //CARRO LOCADO
                    $nome_car = $_GET["nome_car"];
                    $marca_car = $_GET["marca_car"];
                    $modelo_car = $_GET["modelo_car"];
                    $ano = $_GET["ano"];
                    $km = $_GET["inKm"];

                    //Programa principal - exemplos
                    $dadosVeiculo = array("Carro: $nome_car", "Marca: $marca_car", "Modelo: $modelo_car", "Ano: 2009", "Cor: preto", "km Rodado: $km");
                    $objVeiculo = new Veiculo;
                    $objVeiculo->Veiculo_Cadastro("1", $dadosVeiculo);
                    echo "<hr>";
                    $objVeiculo->Veiculo_Exclusao("1");
                    echo "<hr>";

                    $dadosCliente = array("Nome: $nome", "Endereço: Rua Valdemar Martins 233", "E-mail: $email", "Celular: $celular", "CPF: $cpf", "Data de Nascimento: $data_nascimento");
                    $objCliente = new PessoaFisica;
                    $objCliente->Cadastro("1", $dadosCliente);
                    echo "<hr>";
                    $dadosCliente = array("Lort & Cia", "Rua João Rodrigues Tortosa", "Lort@gmail.com", "7619191", "92919191", "07.055.245/0001-22", "096/5487547", "20/10/2004", "Tiago", "htttp://www.algumdominio.com.br");
                    $objCliente = new PessoaJuridica;
                    $objCliente->Cadastro("1", $dadosCliente);
                    echo "<hr>";

                    $dadosAluguel = array("1", "04/10/2024", "2 dias", "90,00");
                    $objCliente->Cliente_Aluga_Veiculo("1", $dadosAluguel);
                    echo "<hr>";
                    $dadosAluguel = array("1", "06/10/2024");
                    $objCliente->Cliente_Devolve_Veiculo("1", $dadosAluguel);
                    echo "<hr>";
                    $objCliente->Cliente_Exclusão("1");


                    ?>
                </main>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>