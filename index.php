<!DOCTYPE html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
        <div class="bubbles">
            <span style="--i:17;"></span>
            <span style="--i:12;"></span>
            <span style="--i:20;"></span>
            <span style="--i:14;"></span>
            <span style="--i:23;"></span>
            <span style="--i:18;"></span>
            <span style="--i:27;"></span>
            <span style="--i:11;"></span>
            <span style="--i:16;"></span>
            <span style="--i:25;"></span>
            <span style="--i:13;"></span>
            <span style="--i:22;"></span>
            <span style="--i:15;"></span>
            <span style="--i:28;"></span>
            <span style="--i:19;"></span>
            <span style="--i:24;"></span>
            <span style="--i:10;"></span>
            <span style="--i:26;"></span>
            <span style="--i:21;"></span>
            <span style="--i:11;"></span>
            <span style="--i:18;"></span>
            <span style="--i:12;"></span>
            <span style="--i:25;"></span>
            <span style="--i:20;"></span>
            <span style="--i:14;"></span>
            <span style="--i:27;"></span>
            <span style="--i:23;"></span>
            <span style="--i:20;"></span>
            <span style="--i:14;"></span>
            <span style="--i:27;"></span>
            <span style="--i:13;"></span>            
        </div>
    </div>
<div class="container2">
    <div class="form">
        <form method="post" action="processa_compra.php">
            <label for="nome_Cli_Compra">Insira o nome do cliente: </label>
            <input type="text" name="nome_Cli_Compra" placeholder="Digite o nome do cliente" required>
            <br>
            <label for="data_Compra">Insira a data da compra: </label>
            <input type="date" name="data_Compra" required>
            <br>
            <label for="id_Compra">Insira o id da compra: </label>
            <input type="number" name="id_Compra" required>
            <br>
            <label for="nome_Loja_Compra">Insira o nome da loja: </label>
            <br>
            <select name="nome_Loja_Compra" id="lojas">
                <option value="" disabled selected hidden>Selecione a loja</option>
                <option value="Americanas">Americanas</option>
                <option value="Submarino">Submarino</option>
                <option value="Casas bahia">Casas Bahia</option>
                <option value="Magazine Luiza">Magazine Luiza</option>
            </select>
            <input type="submit" value="Enviar dados">
        </form>
    </div>
</div>
    <?php 

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $db = "compraspessoais";

    $conexao = mysqli_connect($servidor, $usuario, $senha, $db);
    ?>
</body>