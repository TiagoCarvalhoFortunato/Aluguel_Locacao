<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MySQL</title>
</head>
<body>

    <?php 
    
        $operacao = $_POST["operacao"];
        include "conecta_mysql.inc";
    
        if ($operacao == "incluir") {
            $codigo = $_POST["codigo"];
            $nome = $_POST["nome"];
            $descricao = $_POST["descricao"];
            $preco = $_POST["preco"];
            $peso = $_POST["peso"];
            $cc = $_POST["cc"];
            $cs = $_POST["cs"];
            $ad = $_POST["ad"];
            $sql = "INSERT INTO produtos VALUES ";
            $sql .= "('$codigo', '$nome', '$descricao', $preco, $peso, $cc, $cs, '$ad')";
            $resultado = $mysqli->query($sql);
            echo "Produto incluido com sucesso!";
    
        }

    
    ?>
    
</body>
</html>